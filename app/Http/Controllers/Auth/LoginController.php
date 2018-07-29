<?php

namespace App\Http\Controllers\Auth;

use App\Contabilidad;
use App\Http\Controllers\Controller;
use App\Log;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        $log = Log::create([
            'id_usuario' => Auth::user()->id,
            'accion' => Auth::user()->name . ' cerró caja',
            'expl' => 'Se cerró caja',
        ]);
        $this->guard()->logout();
        $contabiliad = Contabilidad::where('fecha', date('Y-m-d'))->get()->first();
        if($contabiliad){
            if($contabiliad->abierto == 1){
                //abort(410);
                $contabiliad->abierto = 0;
                $contabiliad->save();
            }
        }

        $request->session()->invalidate();

        return redirect('/');
    }
}
