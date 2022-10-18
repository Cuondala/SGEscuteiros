<?php

namespace App\Http\Controllers;

use App\Models\Nucleo;
use App\Models\Dirigente;
use Illuminate\Http\Request;

class DirigenteController extends Controller
{
    //


    public function index(){

        $nucleos=Nucleo::all();
        return view('admin.dirigentes.index', compact('nucleos'));
    }

    public function create(){

        return view('admin.dirigentes.create');
    }

    public function store(Request $request){

        dd('store');
    }

    public function show($id){

        dd('show', $id);
    }

    public function edit($id){

        dd('edit', $id);
    }

    public function update($id){

        dd('update',$id);
    }

    public function destroy($id){

        dd('delete',$id);
    }




}
