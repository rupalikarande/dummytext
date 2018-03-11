

$(document).ready(function (){
    $.get("viewmsg.php", function (data){
         var myJSON = JSON.parse(data);
         var table = document.getElementById("info_table");
           for (var i = 0; i < myJSON.length; i++) {
             var tr = document.createElement('tr');
             var tdid = document.createElement('td');
             var tdtime = document.createElement('td');
             var tddate = document.createElement('td');
             var tdsub = document.createElement('td');
             var tdphon = document.createElement('td');
             var tdmessage = document.createElement('td');
             tdid.innerHTML = myJSON[i].id;
             tdtime.innerHTML = myJSON[i].time;
             tddate.innerHTML = myJSON[i].date;
             tdsub.innerHTML = myJSON[i].sub;
             tdphon.innerHTML = myJSON[i].phoneno;
             tdmessage.innerHTML = myJSON[i].message;
             tr.appendChild(tdid);
             tr.appendChild(tdtime);
             tr.appendChild(tddate);
             tr.appendChild(tdsub);
             tr.appendChild(tdphon);
             tr.appendChild(tdmessage);
             table.appendChild(tr);
           
         }
     });
    });


    //  $('.datepicker').pickadate();
var from_input = $('#startingDate').pickadate(),
from_picker = from_input.pickadate('picker')
var to_input = $('#endingDate').pickadate(),
to_picker = to_input.pickadate('picker')

// Check if there’s a “from” or “to” date to start with and if so, set their appropriate properties.
if (from_picker.get('value')) {
to_picker.set('min', from_picker.get('select'))
}
if ( to_picker.get('value') ) {
from_picker.set('max', to_picker.get('select'))
}

// Apply event listeners in case of setting new “from” / “to” limits to have them update on the other end. If ‘clear’ button is pressed, reset the value.
from_picker.on('set', function(event) {
if ( event.select ) {
    to_picker.set('min', from_picker.get('select'))
}
else if ( 'clear' in event ) {
    to_picker.set('min', false)
}
})
to_picker.on('set', function(event) {
if ( event.select ) {
    from_picker.set('max', to_picker.get('select'))
}
else if ( 'clear' in event ) {
    from_picker.set('max', false)
}
})