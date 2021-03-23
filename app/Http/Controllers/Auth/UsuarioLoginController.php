<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use DB;


class UsuarioLoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';



    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'senha' => 'required'
        ]);

        $credenciais = [
            'email' => $request->email,
            'password' => $request->senha


        ];



        $authOK = Auth::guard('usuario')->attempt($credenciais);



        if ($authOK) {

//            return redirect()->intended(route('painel'));
            $login['success']=true;
            echo json_encode($login);
            return;
        }

//        return back()->withInput();
        $login['success']=false;
            $login['message']='OS DADOS INSERIDOS NÃO CONFEREM';
        echo json_encode($login);
        return;
    }

    public function index()
    {
        return view("pages.users.login");
    }



    public function __construct()
    {
        $this->middleware('guest:usuario');
    }
    public function resetarSenha(){
        return view("usuarios.resetarSenha");

    }
}
