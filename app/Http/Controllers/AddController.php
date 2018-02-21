<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AddController extends Controller
{
    public function getAdd()
    {
     $fio = $_POST['add_fio']; 
     $preparat = $_POST['add_preparat']; 
     $opisanie = $_POST['add_opis']; 
    
    
     
     if (empty($fio) or empty($preparat) or empty($opisanie)) { echo 'Заполните все поля!';}     
     else
     {
         DB::table('fio')->insert(
  ['FIO' => $fio]
  );
  DB::table('naznach')->insert(
  ['FIO' => $fio]
  );
  
   DB::table('preparaty')->insert(
  ['Preparat' => $preparat, 'Opisanie' => $opisanie]
  );
  
 
  //DB::table('preparaty')->insert(
  //['preparat' => $preparat, 'opisanie' => $opisanie]


  echo('Данные занесены!');

     }
}

    }

