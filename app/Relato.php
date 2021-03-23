<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Relato extends Model{
    protected $table = 'relatos';
    public $timestamps=false;

    protected $fillable = [
        'id','idUsuario', 'titulo', 'conteudo', 'tipo', 'status'   ];
    //Join para trazer todos relatos onde o idusario de relatos é igual usuario id
    public function listar(){

       $relatos=Relato::join('usuarios', 'relatos.idUsuario', '=', 'usuarios.id')->orderBy('id', 'DESC')
           ->get(['relatos.*', 'usuarios.nome as nomeUsuario']);

       return $relatos;
    }


}
