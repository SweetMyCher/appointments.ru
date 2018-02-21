
Gantt = function() {
           

//var arr1 = arr.split(', ');
console.log(fio);
console.log(preparat);
console.log(vremya_pr);
console.log(data_start);
console.log(data_end);
    //var fio = document.getElementById("fio").innerHTML;
/*    var preparat = document.getElementById("preparat").innerHTML;
    var vremya_pr = document.getElementById("vremya_pr").innerHTML;
    var data_start = document.getElementById("data_start").innerHTML;
    var data_end = document.getElementById("data_end").innerHTML;
  */


var k=["Paul McCartney", "John Lennon", "George Harrison"];
var j=["Paul McCartney", "John Lennon", "George Harrison"];
   var i;
var mass =[];
  
  for(i = 0; i < preparat.length; i++){
   mass.push({
                    name: fio[i],
                   desc: preparat[i],
                   values: [{
                        from: data_start[i],
                        to: data_end[i],
                        
                        label: vremya_pr[i],
                        customClass: "ganttRed"
                    }]
  
   })};

//alert(mass);

    
            
            $(".gantt").gantt(
            
            { 
                source: mass,
                            
                
                
                
                itemsPerPage:preparat.length,
                months:["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],
                dow:["Вс","Пн","Вт","Ср","Чт","Пт","Сб"],
                scale: "days",
                minScale: "hours",
                navigate: "scroll"
            });

        };

