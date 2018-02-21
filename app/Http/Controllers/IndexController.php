<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers;

class IndexController 
{
    public function getZnach() 
    {
    
    $preparat = DB::table('preparaty')->get(); //вывод первой записи иp таблицы prepraty
    //$preparat1 = DB::table('preparaty')->first(); //вывод всех запией из таблицы prepraty
    //$preparat2 = DB::table('preparaty')->value('preparat'); //вывод первой записи из поля preparat
    //$preparat3 = DB::table('preparaty')->pluck('preparat'); //вывод всех записей из поля preparat
    //$preparat4 = DB::table('preparaty')->count(); //вывод количества запией из таблицы preparaty 

    //dump($preparat);
    //return view('jawa', $preparat);
    return view('jawa', ['preparat'=>$preparat]);
    //dump($preparat1);
    //dump($preparat2);
    //dump($preparat3);
    //dump($preparat4);
    
    }
}
?>