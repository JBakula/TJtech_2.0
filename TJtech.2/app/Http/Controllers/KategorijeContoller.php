<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;

class KategorijeContoller extends Controller
{
    public function index(){
        $kategorija = Kategorija::all();
        $data = [
            'kategorija' => $kategorija
        ];
        return view('index',$data);
    }
}
