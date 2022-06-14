<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bukus = Buku::latest()->get();
       
        return view('admin.index',compact('bukus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'isbn' => 'required',
            'judul' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stok' => 'required',
            'deskripsi' => 'required',
            'halaman' => 'required',
            'harga' => 'required',
            'pengarang_id' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'rak_id' => 'required',
        ]);

        if($cover = $request->file('cover')) {
            $destinationPath = 'admin/vendors/images/';
            $profileImage = date('YmdHis') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $profileImage);
            $validated['cover'] = "$profileImage";
        }
    
        Buku::create($validated);
     
        return redirect()->route('buku.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
        return view('admin.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        //
        $request->validate([
            'isbn' => 'required',
            'judul' => 'required',
            'stok' => 'required',
            'cover' => 'required',
            'idpengarang' => 'required',
            'idpenerbit' => 'required',
            'idkategori' => 'required',
            'idrak' => 'required',
        ]);
    
        $buku->update($request->all());
    
        return redirect()->route('buku.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        //
        $buku->DELETE();
        return redirect()->route('buku.index')
                        ->with('success','Product deleted successfully');
    }
}
