$(document).ready(function(){ 
$("#fio").slideUp(); 
    $("#search_button").click(function(e){ 
        e.preventDefault(); 
        ajax_fio();
        ajax_preparat();  
        ajax_vremya_pr();   
        ajax_data_start();
        ajax_data_end();        
    }); 
    $("#search_term").keyup(function(e){ 
        e.preventDefault(); 
        ajax_fio();
        ajax_preparat();  
        ajax_vremya_pr();   
        ajax_data_start();
        ajax_data_end();  
    }); 

});
/*function ajax_fio(){ 
var search_val=$("#search_term").val();
$.ajax({type:'POST',url:'http://good.ru/fio',data:{search_term : search_val},success:function(){alert("OK");}});
}

*/function ajax_fio(){ 

  $("#fio").show(); 
  
  var search_val=$("#search_term").val(); 
  
  
    $.post(
    "http://good.ru/fio",
    {search_term : search_val},
    function(data){
		
    fio = JSON.parse(data);
    
  }) 
  };
  function ajax_preparat(){ 

  $("#preparat").show(); 
  
  var search_val=$("#search_term").val(); 
  
    $.post(
    "http://good.ru/preparat",
    {search_term : search_val},
    function(data){
        
   preparat = JSON.parse(data);
     
   
  }) 
  };
  function ajax_vremya_pr(){ 

  $("#vremya_pr").show(); 
  
  var search_val=$("#search_term").val(); 
  
    $.post(
    "http://good.ru/vremya_pr",
    {search_term : search_val},
    function(data){
    vremya_pr = JSON.parse(data);
  }) 
  };
  function ajax_data_start(){ 

  $("#vremya_start").show(); 
  
  var search_val=$("#search_term").val(); 
  
    $.post(
    "http://good.ru/data_start",
    {search_term : search_val},
    function(data){
   data_start = JSON.parse(data);
  }) 
  };
  function ajax_data_end(){ 

  $("#data_end").show(); 
  
  var search_val=$("#search_term").val(); 
  
    $.post(
    "http://good.ru/data_end",
    {search_term : search_val},
    function(data){
   data_end = JSON.parse(data);
  }) 
  };
  