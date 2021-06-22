<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\cadastros;

class CadastrosController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function index(){
        $cadastros = cadastros::all();
        return view('index', ['cadastros' => $cadastros]);
    }

    public function cadastrar(){
        return view('cadastrar');
    }

    public function store(Request $request){

        $cadastro = new cadastros;

        $cadastro->name = $request->name;
        $cadastro->nascimento = $request->nascimento;
        $cadastro->sexo = $request->sexo;
        $cadastro->cep = $request->cep;
        $cadastro->endereco = $request->endereco;
        $cadastro->numero = $request->numero;
        $cadastro->complemento = $request->complemento;
        $cadastro->bairro = $request->bairro;
        $cadastro->cidade = $request->cidade;
        $cadastro->estado = $request->estado;
        $cadastro->save();

        return redirect('/')->with('msg', 'Usuário adicionado com sucesso.');
    }

    public function destroy($id){
        cadastros::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Usuario deletado com sucesso!');
    }

    public function edit($id){
        $cadastro = cadastros::findOrFail($id);
        return view('editar', ['cadastro' => $cadastro]);
    }

    public function update(Request $request){
        cadastros::findOrFail($request->id)->update($request->all());
        return redirect('/')->with('msg', 'Usuario editado com sucesso!');
    }
}
