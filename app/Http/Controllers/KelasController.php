<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\CommentPost;
use App\Models\Kelas;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::latest()->get();
        return view('user.kelas.list',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = new Kelas;
        return view('user.kelas.kelasCreate', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelasKode = Str::random(6);
        $request['kelas_kode'] = $kelasKode;
        $request['kelas_by']= Auth::user()->id;
        Kelas::create($request->all());

        /**
         * Return
         */
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($kelas)
    {
        // $post = Kelas::where('id', $kelas['id'])->with('Posts','Posts.Postby','Posts.Postkomen')->latest()->get();
        $post = Post::where('kelas_id', $kelas)->with('Postby','Postkomen','Postkomen.users')->latest()->get();
        $class = Kelas::where('id',$kelas)->first();

        return view('user.kelas.index', compact('post','kelas','class'));
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
