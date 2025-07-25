<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');
        // $contato->save();

        // $contato = new SiteContato();
        // $contato->fill($request->all());
        // $contato->save();

        return view('site.contato');
    }

    public function salvar(Request $request) {

        //realizar a validação dos dados do formulário recebidos no request
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        // SiteContato::create($request->all());
    }
}
