<?php

namespace sisHospital\Http\Controllers\Auth;

use sisHospital\User;
use Validator;
use sisHospital\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

     
    public function loginUsername()
    {
        return property_exists($this, 'username') ? $this->username : 'Nom_user';
    }





    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Nom_user' => 'required|max:255',
            'password' => 'required|confirmed|min:6',
          
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'Nom_user' => $data['Nom_user'],
            'password' => bcrypt($data['password']), //password
        ]);
    }

    public function redirectPath()
    {
     
     switch (auth()->User()->Rol_idRol) {
         case '1':
            return '/sesiones/asistencia';
            break;

         case '2':
            return 'home';
            break;

         case '3':
         return '/seguridad/usuario';
         break;
         
         default:
             return '/login';
             break;
     }

    }

 public function getLogout()
    {
        Auth::logout();
    Cache::flush();
    return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
}


}
