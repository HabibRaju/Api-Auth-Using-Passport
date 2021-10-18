<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index()
    {
        $data =  Http::get('https://jsonplaceholder.typicode.com/users');
        
        return $data;
    }
}
