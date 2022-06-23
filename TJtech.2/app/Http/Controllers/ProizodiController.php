<?php

namespace App\Http\Controllers;

use App\Models\Proizvod;
use Illuminate\Http\Request;

class ProizodiController extends Controller
{
    public function index($id){
        $proizvodi = Proizvod::where('kategorija_id',$id)->paginate(4);
        $data=[
            'proizvodi' => $proizvodi
        ];
        return view('proizvodi.index');
    }
}
