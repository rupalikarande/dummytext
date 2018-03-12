<html>
    <head>
     <title>dummy text demo</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Material Design fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Bootstrap Material Design -->
<link rel="stylesheet" href="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css">
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.iife.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/dob.js"></script>
<script src="js/modal.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
     
<!-- <style>
table, th, td {
border: 1px solid black;
}
</style> -->
<script>
    // AJAX call for autocomplete 
    $(document).ready(function(){
        $("#search-box").keyup(function(){
            $.ajax({
            type: "POST",
            url: "readCountry.php",
            data:'keyword='+$(this).val(),
            beforeSend: function(){
                 $("#search-box");//.css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
            },
            success: function(data){
                $("#suggesstion-box").show();
                $("#suggesstion-box").html(data);
                $("#search-box").css("background","#FFF");
            }
            });
        });
    });
    //To select country name
    function selectPhn(val) {
    $("#search-box").val(val);
    $("#suggesstion-box").hide();
    }
    jQuery.ajax({
                type : 'POST',
/*url is your function name in file */
                url:'selectPhn',
                data:'listing_id='+id,
                success:function(responsedata){
                 /*   alert(responsedata)*/
                        var Phone_No = responsedata.split('-');
                
                        var Name     = Phone_No [0]; 
                        var DOB      = Phone_No[1]; 
                        var Address = Phone_No[2]; 
                        var City     = Phone_No[3]; 
                        var Email     = Phone_No[4]; 
/*assign value to textbox*/
$('#Name').val('Phone_No[0]');
$('#DOB').val('Phone_No[1]');
$('#Address').val('Phone_No[2]');
$('#City').val('Phone_No[3]');
$('#Email').val('Phone_No[4]');

/*or you can use .text for placing fetched value to textbox*/
           }
}); 
    </script>    
    
        
<!-- <style>
    body{width:610px;}
    .frmSearch {border: 1px solid #a8d4b1;background-color: #c6f7d0;margin: 2px 0px;padding:40px;border-radius:4px;}
    #country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;}
    #country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
    #country-list li:hover{background:#ece3d2;cursor: pointer;}
    #search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}
    </style> -->
    </head>
    <body>
      
  <h2 style="text-align:center;color:darkmagenta;font-family:Times New Roman, Times, serif;"><b>Customer Visit Form</b></h2>   
        <div style="margin-left:50px; margin-top:20px; padding:50px; border: 1px solid black; margin-right:50px;"> 
        <div class="row">
              <div class="col-sm-8">
                <form action="form.php" method="post">
                        <div class="frmSearch">
                        <input class="text-uppercase" type="text"  name="Phone_No" placeholder=" Phone No: " pattern="^\d{4}\d{2}\d{4}$" id="search-box">
                        <div id="suggesstion-box"></div></div>        
                        <input class="text-uppercase" type="text" id="Name" name="Name"  placeholder=" Name: ">
                  <input class="text-uppercase" type="text" id="datepicker" name="DOB" placeholder=" Date Of Birth  " >
                    <input class="text-uppercase" type="text" id="Address" name="Address" placeholder=" Address: ">
                   <input class="text-uppercase" type="text" id="City" name="City" placeholder=" City: ">
                    <input type="text" id="Email" name="Email" placeholder=" Email: ">
                   <input class="btn btn-default" type="submit" name="Add" value="Add" style="width:20%">   
                  <input class="btn btn-default" type="reset" value="Cancel" style="width:20%" ><br>
                  <a  class="btn btn-default  c1" data-toggle="modal" data-target="#modalContactForm" style="width:20%"  >Message</a> 
                </div>   
                <div class="col-sm-4">
                        <input class="btn btn-default" type="submit" name="ViewDatabase" value=" View Database "><br><br> 
                         <input class="btn btn-default" type="submit" name="Viewreport" value=" View Message Report " style="padding-bottom:50px;" ><br><br>
                        <input class="btn btn-default" type="submit" name="SendMessage" value=" Send Bulk-Message " style="padding-bottom:50px;"><br><br> 
                         <input class="btn btn-default"  type="submit" name="DisplayProfile" value=" Display Profile " style="padding-bottom:50px;"><br><br> 
                   </div>
                     </form>
                   </div>
             </div>
            
              <!-- modal -->
              <div>
                     <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                     <div class="modal-content">
      
                                      <div class="modal-header text-center">
                                          <h4 class="modal-title w-100 font-weight-bold">Custom Message</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
      
                                      <div class="modal-body mx-3">
                                              <form action="modal.php" method="post"> 
                                                  
                                          <div class="md-form mb-5">
                                              <i class="fa fa-user prefix grey-text"></i>
                                              <input type="text" id="form34" name="subject" placeholder="Subject" class="form-control validate">
                                           </div> 
                          
                                          <div class="md-form mb-5">
                                              <i class="fa fa-envelope prefix grey-text"></i>
                                              <input type="number" name="Phoneno" id="Contact Number" placeholder="Contact Number" class="form-control validate">
                                          </div>
                                                            
                                           <div class="md-form">
                                              <i class="fa fa-pencil prefix grey-text"></i>
                                              <textarea type="textarea" id="message" name="Message" placeholder="Your message" class="md-textarea form-control" rows="8"></textarea>
                                          <p>
                                              <span id="remaining"><span><b> 160 </b></span> characters remain </span>
                                              <span id="messages"><span><b> 1 </b></span> message </span>
                                          </p> 
                                          <button name="send" class="btn btn-unique">Send <i class="fa fa-paper-plane-o ml-1"></i></button> 
                                         </div>
      
                                      <!-- <div class="modal-footer d-flex justify-content-center"> 
                                          </div>-->
                                                </form>
                                      </div>
                                  </div>
                           </div>
                   </div> 
               </div> 
              
         </body>
         
        </html>

       
            
             
