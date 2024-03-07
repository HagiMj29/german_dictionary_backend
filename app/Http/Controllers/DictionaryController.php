<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function index(){

        $dictionary = Dictionary::all();
        return view('dictionary.index',['dictionary'=>$dictionary]);
    }

    public function create(){
        
        return view('dictionary.create');
    }

    public function store(Request $request){
        $request->validate([
            'kata_indonesia'=>'required',
            'kata_jerman'=>'required',
            'jenis_kata'=>'required',
            'contoh_penggunaan'=>'nullable',
            'contoh_penggunaan_jerman'=>'nullable',
            'keterangan'=>'nullable',
        ]);

        Dictionary::create([
        'kata_indonesia'=>$request->kata_indonesia,
        'kata_jerman'=>$request->kata_jerman,
        'jenis_kata'=>$request->jenis_kata,
        'contoh_penggunaan'=>$request->contoh_penggunaan,
        'contoh_penggunaan_jerman'=>$request->contoh_penggunaan_jerman,
        'keterangan'=>$request->keterangan,
        ]);

        return redirect()->route('dictionary.index')->with('success', 'Data kamus berhasil ditambahkan.');
    }

    public function edit(Dictionary $dictionary){
        return view ('dictionary.edit',['dictionary'=>$dictionary]);
    }

    public function update(Request $request, Dictionary $dictionary){
        $request->validate([
            'kata_indonesia'=>'required',
            'kata_jerman'=>'required',
            'jenis_kata'=>'required',
            'contoh_penggunaan'=>'nullable',
            'contoh_penggunaan_jerman'=>'nullable',
            'keterangan'=>'nullable',
        ]);

        $dictionary->update([
            'kata_indonesia'=>$request->kata_indonesia,
            'kata_jerman'=>$request->kata_jerman,
            'jenis_kata'=>$request->jenis_kata,
            'contoh_penggunaan'=>$request->contoh_penggunaan,
            'contoh_penggunaan_jerman'=>$request->contoh_penggunaan_jerman,
            'keterangan'=>$request->keterangan,
            ]);


            return redirect()->route('dictionary.index')->with('success', 'Data kamus berhasil diperbarui.');
    }

    public function destroy(Dictionary $dictionary)
    {
        $dictionary->delete();

        return redirect('dictionary/index');
    }
}