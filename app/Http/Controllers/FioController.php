<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FioController extends Controller
{
    public function getFio() 
    {

  $term = $_POST["search_term"]; //передача с фронта данные
    
    
     //цикл появления данных
    $fio = DB::table('naznach') ->where('FIO' ,'=',  $term)->get(); //вывод всех записей из таблицы prepraty
   


    
    if(count($fio) > NULL and $term > NULL) { //проверка на введные данные и на ошибочные данные
    
      
    $string='';
   $input = array("Петров П.П.", "Петров П.П.");
array_splice($input, 1, 3, "");

    
   
    
    foreach($fio as $row) { //перебор массивая под нужный вид
        $string[] = $row->FIO;
        array_splice($string, 1, count($string), "");
        
    }
    ;
  echo json_encode ($string); 

    }
    else
    {
        echo $string = "Совпадений не найдено!!"; //если пустая строка, выводится сообщение
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