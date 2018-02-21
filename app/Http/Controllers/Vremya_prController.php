<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Vremya_prController extends Controller
{
    public function getVremya_pr() 
    {

   $term = $_POST["search_term"]; //передача с фронта данные
    
    
     //цикл появления данных
    //$preparat = DB::table('naznach') ->where('id_naznach' ,'=', $term) ->get(); //вывод всех записей из таблицы prepraty
    
    $preparat = DB::table('naznach') ->where('FIO' ,'=', $term ) ->get(); //вывод всех записей из таблицы prepraty

    

    
    if(count($preparat) > NULL and $term > NULL) { //проверка на введные данные и на ошибочные данные
    
      
    $string='';
  
    
    
    foreach($preparat as $row) { //перебор массивая под нужный вид
        $string[] = $row->Vremya_pr;
      
    }
     echo json_encode ($string);
    }
    else
    {
        echo $preparat = "Свопадений не найдено"; //если пустая строка, выводится сообщение
    }
    //$preparat1 = ->pluck('preparat'); //вывод всех запией из таблицы prepraty
    //$preparat2 = DB::table('preparaty')->value('preparat'); //вывод первой записи из поля preparat
    //$preparat3 = DB::table('preparaty')->pluck('preparat'); //вывод всех записей из поля preparat
    //$preparat4 = DB::table('preparaty')->count(); //вывод количества запией из таблицы preparaty 

   
    
    
    
    //dump($preparat);
    //dump($preparat2);
    //dump($preparat3);
    //dump($preparat4);
    
    }
}
?>