<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $arquivos = DB::table('arquivos')->get();
        return view('welcome',['arquivos' => $arquivos]);
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['arquivo'] = $request->arquivo->store('arquivos');
        DB::insert('insert into arquivos (arquivo) values (?)', [$data['arquivo']]);
    }
}
