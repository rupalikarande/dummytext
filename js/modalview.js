$(document).ready(function (){
    $.get("modalview.php", function (data){
         var myJSON = JSON.parse(data);
         var table = document.getElementById("info_table");
           for (var i = 0; i < myJSON.length; i++) {
             var tr = document.createElement('tr');
             var tdid = document.createElement('td');
             var tdsub = document.createElement('td');
             var tdphon = document.createElement('td');
             var tdmessage = document.createElement('td');
             tdid.innerHTML = myJSON[i].id;
             tdsub.innerHTML = myJSON[i].sub;
             tdphon.innerHTML = myJSON[i].phoneno;
             tdmessage.innerHTML = myJSON[i].message;
             tr.appendChild(tdid);
             tr.appendChild(tdsub);
             tr.appendChild(tdphon);
             tr.appendChild(tdmessage);
             table.appendChild(tr);
           
         }
     });
    });

    