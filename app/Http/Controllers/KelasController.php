<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kelas;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('Postby')->with('Postkomen')->latest()->get();

        return view('user.kelas.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelas::create($request->all());

        /**
         * Return
         */
        return back()->with('sucess', 'Kelas has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $anggota = Anggota::where('kelas_id', $kelas['id'])
            ->where('anggota_id', Auth::user()->id)
            ->where('anggota_role', 'creator')
            ->first();

        if (is_null($anggota)) {
            return back()->with('error', 'You dont have access');
        }

        Kelas::where('id', $kelas['id'])->update($request->all());

        /**
         * Return
         */

        return back()->with('success', 'Kelas has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $anggota = Anggota::where('kelas_id', $kelas['id'])
            ->where('anggota_id', Auth::user()->id)
            ->where('anggota_role', 'creator')
            ->first();

        if (is_null($anggota)) {
            return back()->with('error', 'You dont have access');
        }

        $kelas = Kelas::where('id', $kelas['id'])->delete();

        /**
         * Return
         */
        return back()->with('success', 'Kelas has been deleted');
    }
}
