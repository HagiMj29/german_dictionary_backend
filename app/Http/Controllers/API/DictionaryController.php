<?php

namespace App\Http\Controllers\API;

use App\Models\Dictionary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class DictionaryController extends Controller
{
    public function index()
{
    $dictionary = Dictionary::all();

    $results = $dictionary->map(function ($data) {
        return [
            'kata_indonesia' => $data->kata_indonesia,
            'kata_jerman' => $data->kata_jerman,
            'jenis_kata' => $data->jenis_kata,
            'contoh_penggunaan' => $data->contoh_penggunaan,
            'contoh_penggunaan_jerman' => $data->contoh_penggunaan_jerman,
            'keterangan' => $data->keterangan,
        ];
    });

    return response()->json(['message' => 'Data Berhasil diakses', 'results' => $results], 200);
}


   

    
}