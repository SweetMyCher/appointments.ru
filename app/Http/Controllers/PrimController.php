<?php

namespace App\Http\Controllers;

use App\Fio;
use App\Preparat;
use Illuminate\Http\Request;
use DB;


class PrimController extends Controller
{
     public function getAdd()
    {
    $fio = new FIO;
    
   $fio->FIO = 'dfdsf';
  
   $fio->save();
  
}


    }

