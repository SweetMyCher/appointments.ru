<html> 
<head> 
<script src="{{asset('js/jquery.js')}}" ></script>
<title>Welcome!</title> 
</head> 

<body> 
<h1>Введите препарат</h1> 
    <form id="searchform" method="post"> 
    
<div> 

       <a href="http://good.ru/add">Добавить новую запись</a><p>
       <label for="search_term">Поиск</label> 
        <input type="text" name="search_term" id="search_term" required placeholder="Это обязательное поле!"/> 
<input type="submit" value="search" id="search_button" /> 
<script> 
$(document).ready(function(){ 
$("#search_results").slideUp(); 
    $("#search_button").click(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    }); 
    $("#search_term").keyup(function(e){ 
        e.preventDefault(); 
        
    }); 

});
function ajax_search(){ 
  $("#search_results").show(); 
  var search_val=$("#search_term").val(); 
    $.post("http://good.ru/page", {search_term : search_val}, function(data){
   if (data.length>0){ 
     $("#search_results").html(data); 
   } 
  }) 
  console.log(search_term)
} 
</script>
</div> 
    </form> 
    <div id="search_results"></div> 
</body> 
</html>
