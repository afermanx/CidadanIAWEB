<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Usuario extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $guard = "usuario";

    protected $table = 'usuarios';





    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'nomeUsuario', 'email', 'telefone', 'senha', 'permissao', 'ativo','ultimoAcesso'
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senha', 'remember_token',
    ];

    protected $username;
    /**
     * @var mixed
     */
    private $id;

    public function cont(){

    }



    public function username()
    {
        return $this->email;
    }

//    public function ultimoAcesso()
//    {
//        return $this->ultimoAcesso;
//    }

    public function getAuthPassword() {

        return $this->senha;
    }



    public function checarPermissao($permissao) {

        $perfil = ($this->perfil) ? $this->perfil : "SemPerfil";

        if (strPos($permissao, $perfil) !== false)
        {

            return true;

        } else {

            return false;

        }

    }

}
