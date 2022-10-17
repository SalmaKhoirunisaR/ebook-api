<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AuthController extends Controller
{
    public function me(){
        return [ 
            'NIS'=> 3103120204,
            'NAME' => 'Salma Khoirunisa R',
            'PHONE' => '0987654321',
            'CLASS' => 'XII RPL 6'
        ];
    }
}
