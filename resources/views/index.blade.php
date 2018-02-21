<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Назначения</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=IE8">
        <link href="../css/stylegantt.css" type="text/css" rel="stylesheet">
        <link href="../css/gantt.css" type="text/css" rel="stylesheet">

    </head>
    
    <body>
        <h1>Введите ФИО пациента</h1> 
        <div class="green_button">
            <a class="butt" href="http://good.ru/add">Добавить новую запись</a><p>
        </div>
        <form class="form_home" id="searchform" method="post"> 
            <label class="label_home" for="search_term">Поиск</label> 
                <input type="text" name="search_term" id="search_term" required placeholder="Это обязательное поле!"/> 
                <input type="submit" value="Поиск" id="search_button" onclick = "Gantt()" /> 
        </form>
        <div class="gantt"></div>
        

    
    <script src="./js/jquery.js" ></script>
    <script src="./js/db.js"></script>
    <script src="./js/form.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.fn.gantt.js"></script>
    <script src="./js/moment.min.js"></script>
    <script src="./js/main.js"></script>
    
    <script>

</script>
       
    </body>
</html>



			




	

	