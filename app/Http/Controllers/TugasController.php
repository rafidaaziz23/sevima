<?php

namespace App\Http\Controllers;

use App\Models\ModulesFile;
use App\Models\ModulesLink;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas = Tugas::latest()->get();

        return view('user.tugas.index', compact('tugas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $file = new ModulesFile;
        $link = new ModulesLink;
        $tugas = new Tugas;
        return view('user.tugas.createTugas',compact(
            'file',
            'link',
            'tugas',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tugas = Tugas::create([
            'tugas_judul' => $request['tugas_judul'],
            'tugas_desc' => $request['tugas_desc'],
            'tugas_due' => $request['tugas_due'],
            'create_by' => Auth::user()->id,
            'update_by' => Auth::user()->id,
        ]);
        
        $links = count($request['link']);
        // foreach($request->file('file') as $file){
        //     $file_name = $file->hashName();
        //     $file_path = storage_path('app/public/uploads/products');
        //     $file->move($file_path, $file_name);

            
        //     ModulesFile::create([
        //         'produk_id'     => $tugas['id'],
        //         'thumb'         => $file_name,
        //     ]);
        // }
        
        for($j = 0; $j < $links ; $j++){
            ModulesLink::create([
                'tugas_id' => $tugas['id'],
                'link' => $request['link'][$j],
            ]);
        }

        return redirect()->route('tugas.index')
            ->with('success', 'Karir Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function show(Tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugas $tugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugas $tugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugas $tugas)
    {
        //
    }
}
