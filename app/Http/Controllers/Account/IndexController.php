<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use App\Models\User;

class IndexController extends Controller
{

    public function __invoke()
    {
        
        $email = FacadesAuth::user()->email;
        $length = strpos($email, '@') - 2;
        $asterisk = '*';
        for($i = 1; $i < $length; $i++)
        $asterisk .= '*'; 
        $email = substr_replace($email, $asterisk, 1, $length);

        $users = new User();


        return view('account.index', ['email' => $email, 'data' => $users->get()->where('id', '<>', FacadesAuth::user()->id)]);
    }

}
