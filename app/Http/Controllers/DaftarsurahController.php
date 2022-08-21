<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DaftarsurahController extends Controller
{
    public function index()
    {
        $response = Http::get('https://al-quran-8d642.firebaseio.com/data.json?print=prettyn');
        $data['surah']= $response->json();
        return view('app', compact('data'));
    }
}
