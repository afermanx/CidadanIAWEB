<?php

namespace App\Http\Controllers;

use App\Relato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RelatoController extends Controller
{

    public function index()
    {
        $model= new Relato();
        $data= $model->listar();

        return $data;

    }
    public function salvar(Request $request)
    {
        $usuario = Auth::guard('usuario')->user();
        if (!$usuario) {
            return response()->json(['sucesso' => false, 'message' => 'Sessão inválida. Você deve fazer login novamente']);
        };

        try {

            $dados = $request->validate([
                'titulo' => 'required',
                'conteudo' => 'required',
                'tipo' => 'required',



            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['sucesso' => false, 'message' => 'Erro ao validar dados', 'erro' => $e->errors()]);
        }

        $data = json_decode($request->getContent(), true);
        $titulo = $data['titulo'];
        $conteudo = $data['conteudo'];
        $tipo = $data['tipo'];

        date_default_timezone_set('America/Porto_Velho');

        $acesso = date("d-m-Y H:i:s");

        $relato=new Relato();
        $relato->idUsuario=$usuario->id;
        $relato->titulo=$titulo;
        $relato->conteudo=$conteudo;
        $relato->tipo=$tipo;
        $relato->status="Publico";
        $relato->dataPost=$acesso;


        $relato->save();
        return response()->json(['sucesso' => true, 'message' => 'Relato cadastrado com sucesso', 'idCadastrado' => $relato->id]);

//
    }

    public function getRelato(Request $request)
    {
        $usuario = Auth::guard('usuario')->user();


        $data = json_decode($request->getContent(), true);
        $id=$data['id'];


       $relatos=Relato::where('id',$id)->get();





        if (!$relatos) {
            return response()->json(['sucesso' => false, 'message' => 'Relato não encontrado']);
        };

        return response()->json(['sucesso' => true, 'relato' => $relatos[0]]);
    }

    public function alterar(Request $request)
    {
        $usuario = Auth::guard('usuario')->user();
        if (!$usuario) {
            return response()->json(['sucesso' => false, 'message' => 'Sessão inválida. Você deve fazer login novamente']);
        };

        try {

            $dados = $request->validate([
                'titulo' => 'required',
                'conteudo' => 'required',
                'tipo' => 'required',



            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['sucesso' => false, 'message' => 'Erro ao validar dados', 'erro' => $e->errors()]);
        }

        $data = json_decode($request->getContent(), true);
        $titulo = $data['titulo'];
        $conteudo = $data['conteudo'];
        $tipo = $data['tipo'];
        $id = $data['id'];

        date_default_timezone_set('America/Porto_Velho');

        $acesso = date("d-m-Y H:i:s");

        $relato = Relato::find($id);
        $relato->titulo=$titulo;
        $relato->conteudo=$conteudo;
        $relato->tipo=$tipo;
        $relato->status="Publico";
        $relato->dataPost=$acesso;



        $relato->save();
        return response()->json(['sucesso' => true, 'message' => 'Relato cadastrado com sucesso']);

//
    }


    public function excluir(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $usuario = Auth::guard('usuario')->user();

        $relato = $data['relato'];

       Relato::where('id',$relato)->delete();



        return response()->json(['sucesso' => true, 'excluido' => true]);
    }


}
