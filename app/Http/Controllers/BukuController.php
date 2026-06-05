<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $buku = Buku::latest()->paginate(5);

        return view('buku.index', compact('buku'));
    }
}