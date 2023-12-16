<?php

namespace App\Http\Controllers;

use App\Packages\EFaturaLaravel\Fatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    //
    function Test()
    {
         $fatura= new Fatura();

         $aa=Storage::
         dd($aa);

    }
}
