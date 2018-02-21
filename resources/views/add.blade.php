
<html> 
<head> 
    <script src="http://good.ru/js/jquery.js" ></script>
    <title>Добавляем новую запись</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=IE8"> 
    <link href="../css/gantt.css" type="text/css" rel="stylesheet">    
</head> 

<body> 
    <h1>Введите название препарата</h1> 
    <form id="searchform" method="post"> 
        <div class="form_add"> 
                <label for="add_fio">Фамилия И.О</label> 
                <input type="text" name="add_fio" id="add_fio" required placeholder="Это обязательное поле!"/> <p>
                <label for="add_preparat">Препарат</label> 
                <input type="text" name="add_preparat" id="add_preparat" required placeholder="Это обязательное поле!"/> <p>
                <label for="add_opis">Описание препарата</label> 
                <input type="text" name="add_opis" id="add_opis" required placeholder="Это обязательное поле!"/> <p>
                <input type="submit" value="Добавить" id="add_button" /> 
        <script> 
        $(document).ready(function(){ 
            $("#add_button").click(function(e){ 
                e.preventDefault(); 
                ajax_search(); 
            }); 
            $("#add_fio").keyup(function(e){ 
                e.preventDefault(); 
                   }); 
            $("#add_preparat").keyup(function(e){ 
                e.preventDefault(); 
                    }); 
                     $("#add_opis").keyup(function(e){ 
                e.preventDefault(); 
                    }); 
                    

        });

        function ajax_search(){ 
          $("#add_results").show(); 
          var fio_val=$("#add_fio").val(); 
          var preparat_val=$("#add_preparat").val();
           var opis_val=$("#add_opis").val();

            $.post("http://good.ru/add_page", {add_fio : fio_val, add_preparat : preparat_val, add_opis : opis_val}, function(data){
          
           if (data.length>0){ 
             $("#add_results").html(data); 
           } 
          }) 
          
        } 
        </script>
        </div> 
    </form> 
    <div id="add_results"></div> 
</body> 
</html>
