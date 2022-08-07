<!DOCTYPE html>
<html lang="en">
<!-- 
    ____                                       
   / __ \________  __  ______ _____  ____  ____
  / / / / ___/ _ \/ / / / __ `/ __ \/ __ \/_  /
 / /_/ / /  /  __/ /_/ / /_/ / / / / / / / / /_
/_____/_/   \___/\__, /\__,_/_/ /_/_/ /_/ /___/
                /____/                         
     Script Author: Adrian Jann F. Octat
-->
<head>
  <!-- BASIC DATA -->
  <meta charset="utf-8">
  <title>DA Region 10 | RSBSA Data Repository</title>
  <meta name="google" content="notranslate">
  <meta name="author" content="DA-RFO 10 | AJ Octat">
  <link rel="icon" href="assets/Logo/Logo_DA.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="RSBSA Validation by AJ Octat">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/all.min.css">
  <link rel="stylesheet" href="assets/fontawesome/fontawesome.min.css">
  <script src="assets/jquery/jquery-3.6.0.js" ></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
      @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 300;
        src: local(''),
        url('assets/fonts/poppins-v19-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('assets/fonts/poppins-v19-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
      }
      @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        src: local(''),
        url('assets/fonts/poppins-v19-latin-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('assets/fonts/poppins-v19-latin-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
      }
      @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        src: local(''),
        url('assets/fonts/poppins-v19-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('assets/fonts/poppins-v19-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
      }
      @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        src: local(''),
        url('assets/fonts/poppins-v19-latin-600.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('assets/fonts/poppins-v19-latin-600.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
      }
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        overflow: scroll;
        overflow-x: hidden;
      }
      ::-webkit-scrollbar {
        height: 6px; 
        width: 6px;  
        background: transparent;  
      }
      ::-webkit-scrollbar-track {
        background: #FFFFFF;
      }
      ::-webkit-scrollbar-thumb {
        background: #26a042;
        border-radius: 3px;
      }
      input[type=text]:focus,select[type=text]:focus,input[type=number]:focus,input[type=password]:focus,textarea[type=text]:focus,button[type=button]:focus{
        border: 1px solid #26a042;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
      }
      #toTheTop {
        position: fixed;
        right: 1rem;
        bottom: 1rem;
        display: none;
        z-index: 99; 
        border: none; 
        outline: none; 
        width: 2.75rem;
        height: 2.75rem;
        text-align: center;
        opacity: 0.5;
        color: #fff;
        background: #26a042;
        border-radius: 5px;
      }
      #toTheTop:hover {
        background-color: #26a042;
        opacity: 1;
      }
      ::-moz-selection {
        color: #ffffff;
        background: #26a042;
      }
      ::selection {
        color: #ffffff;
        background: #26a042;
      }
      .mypopup{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 99; 
        border: none; 
        outline: none; 
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        justify-content: center;
        align-items: center;
        text-align: center;
        opacity: 1;
        color: #fff;
        background: #26a042;
        border-radius: 5px;
      }
      .modal-header {
        border-bottom: 0px solid #26a042;
        background-color: #26a042;
        color: #fff;
      }
      .modal-header button{
        color: #fff;
      }
      .modal-body {
        border-bottom: 0px solid #26a042;
        background-color: #26a042;
        color: #fff;
      }
      #ChangeTheme {
        position: fixed;
        right: 1rem;
        top: 1rem;
        display: block;
        z-index: 99; 
        border: none; 
        outline: none; 
        width: 2.75rem;
        height: 2.75rem;
        text-align: center;
        opacity: 1;
        color: #FFFFFF;
        background: #26a042;
        border-radius: 5px;
      }
      #Home {
        position: fixed;
        left: 1rem;
        top: 1rem;
        display: block;
        z-index: 99; 
        border: none; 
        outline: none; 
        width: 2.75rem;
        height: 2.75rem;
        text-align: center;
        opacity: 1;
        color: #FFFFFF;
        background: #26a042;
        border-radius: 5px;
      }
    </style>
</head>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div style="background: #dc3545;" class="modal-content">
      <div class="modal-header" >
        <h3 class="modal-title" >DATA PRIVACY POLICY</h3>
        <button type="button" class="btn btn-success btn-sm close" data-dismiss="modal" aria-label="Close" ><i class="fas fa-times"></i></button>
      </div>
      <div class="modal-body">
        <p  class="text-justify">The collection of personal information is for documentation, planning, reporting and processing purposes in availing agricultural related interventions. Processed data shall only be shared to partner agencies for planning, reporting and other use in accordance to the mandate of the agency. You have the right to ask for a copy of your personal data that we hold about you as well as to ask for it to be corrected if you think it is wrong.</p>
      </div>
    </div>
  </div>
</div>
<div class="mypopup" id="popups" style="display: none;">
  <center>
    <h3 id="notif_header"></h3>
    <p id="notif_content"></p>
    <button id="notif_button" type="button" style="display: none;" class="btn btn-success btn-sm" onclick="popClose();"><i class="fas fa-times"></i> Close</button>
  </center>
</div>
<body style="background: #ffffff;">
  <button class="btn" onclick="home()" id="Home" title="Home"><i class="fas fa-home"></i></button>
  <div class="container mb-5 mt-5" id="container">
    <button onclick="topFunction()" id="toTheTop" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <!-- 
        ____                                       
       / __ \________  __  ______ _____  ____  ____
      / / / / ___/ _ \/ / / / __ `/ __ \/ __ \/_  /
     / /_/ / /  /  __/ /_/ / /_/ / / / / / / / / /_
    /_____/_/   \___/\__, /\__,_/_/ /_/_/ /_/ /___/
                    /____/                         
         Script Author: Adrian Jann F. Octat
    -->
    <div class="row justify-content-md-center">
      <div class="col-md">
        <center>
          <a href="https://ffrs1.da.gov.ph/"  target="_blank">
            <img class="rounded-circle" src="assets/Logo/Logo_DA.png" width="250" height="250" style="margin-top: 40px;">
          </a>
        </center>
      </div>
    </div>
    <!-- 
        ____                                       
       / __ \________  __  ______ _____  ____  ____
      / / / / ___/ _ \/ / / / __ `/ __ \/ __ \/_  /
     / /_/ / /  /  __/ /_/ / /_/ / / / / / / / / /_
    /_____/_/   \___/\__, /\__,_/_/ /_/_/ /_/ /___/
                    /____/                         
         Script Author: Adrian Jann F. Octat
    -->
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="filter" name="filter" placeholder="Filter Data" style="border-color: #dc3545;background: transparent;color: #000000;" >
        </div>
      </div>
    <table class="table table-borderless table-responsive-md" style="margin-top: 20px;">
        <thead>
          <tr>
            <th scope="col" class="h6" style="white-space:nowrap;color: #000000;"><b>PROVINCE</b></th>
            <th scope="col" class="h6" style="white-space:nowrap;color: #000000;"><b>MUNICIPALITY/CITY</b></th>
            <th scope="col" class="h6" style="white-space:nowrap;color: #000000;"><b>DATA CREATED</b></th>
            <th scope="col" class="h6" style="white-space:nowrap;color: #000000;"><b>DATA TOTAL</b></th>
            <th scope="col" class="h6" style="white-space:nowrap;color: #000000;"><b>ACTIONS</b></th>
          </tr>
        </thead>
        <tbody id="tbBody">
          <?php 
          $muncity_file = file_get_contents('muncity.json');
          $muncity_json = json_decode($muncity_file, 1);
          $test = '##DATE CREATED##';
          foreach ($muncity_json as $key) {

            if (file_exists('./KYC/'.$key['geocode'].'.json')) {
              $data_file = file_get_contents('./KYC/'.$key['geocode'].'.json');
              $data_json = json_decode($data_file, 1);
              $data_info = $data_json['dateCreated'];
              $data_total = $data_json['dataTotal'];
            } else {
              $data_info = 'No Data Found';
              $data_total = '0';
            }
            echo '<tr style="color: #000000;" id="'.$key['geocode'].'" style="height:0;"><td><p style="white-space:nowrap;height:0">'.strtoupper($key['province']).'</p></td><td><p style="white-space:nowrap;height:0">'.strtoupper($key['name']).'</p></td><td><p style="white-space:nowrap;height:0">'.$data_info.'</p></td><td><p style="white-space:nowrap;height:0">'.$data_total.'</p></td><td><a class="btn btn-success " onclick="deleteData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Delete Data Files"><i class="far fa-trash-alt" ></i></a><a class="btn btn-success " onclick="downloadData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Download Data"><i class="fas fa-download"></i></a><a class="btn btn-success " onclick="redirectData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Redirect to Data"><i class="fas fa-external-link-alt"></i></a></td></tr>';
          }
          ?>
        </tbody>
      </table>
  </div>
    <!-- 
        ____                                       
       / __ \________  __  ______ _____  ____  ____
      / / / / ___/ _ \/ / / / __ `/ __ \/ __ \/_  /
     / /_/ / /  /  __/ /_/ / /_/ / / / / / / / / /_
    /_____/_/   \___/\__, /\__,_/_/ /_/_/ /_/ /___/
                    /____/                         
         Script Author: Adrian Jann F. Octat
    -->
  <!-- WEBSITE SCRIPTS-->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#modal').modal('show');
      $("#filter").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tbBody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    function home() {
      window.open('./', "_self");
    }
    
    function deleteData(elem){
      id = $(elem).closest('tr').attr('id');
      $(elem).closest('tr').css({
        'background-color': '#000000',
        'color': '#ffffff',
      }).siblings('tr').css({
        'background-color': '#ffffff',
        'color': '#000000',
      });
      $.getJSON('deleteData?q='+id, function( json ) {
        if (json.result==true) {
          $(elem).closest('tr').find("td:eq(2)").text('No Data Found');
          $(elem).closest('tr').find("td:eq(3)").text('0');
        }else{
          //
        }
      });
    }
    function downloadData(elem){
      id = $(elem).closest('tr').attr('id');
      $(elem).closest('tr').css({
        'background-color': '#000000',
        'color': '#ffffff',
      }).siblings('tr').css({
        'background-color': '#ffffff',
        'color': '#000000',
      });
      $.getJSON('downloadData?q='+id, function( json ) {
        if (json.dataTotal>0) {
          $(elem).closest('tr').find("td:eq(2)").text(json.dateCreated);
          $(elem).closest('tr').find("td:eq(3)").text(json.dataTotal);
        }
      });
    }
    function redirectData(elem){
      id = $(elem).closest('tr').attr('id');
      $(elem).closest('tr').css({
        'background-color': '#000000',
        'color': '#ffffff',
      }).siblings('tr').css({
        'background-color': '#ffffff',
        'color': '#000000',
      });
      window.open('./local/'+id, '_blank');
    }
    var toTheTopBotton = document.getElementById("toTheTop");
    var toHome = document.getElementById("Home");
    var toChangeTheme = document.getElementById("ChangeTheme");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        toTheTopBotton.style.display = "block";
        toHome.style.display = "none";
      } else {
        toTheTopBotton.style.display = "none";
        toHome.style.display = "block";
      }
    }
    function topFunction() {
      jQuery('html,body').animate({scrollTop:0},1000);
    }
    function popShow(header,content,button){
      document.getElementById("popups").style.display = 'block';
      $('#container').css({ 'opacity' : 0.2 });
      $('#notif_header').text(header);
      $('#notif_content').text(content);
      if(button){
        document.getElementById("notif_button").style.display = 'block';
      }else{
        document.getElementById("notif_button").style.display = 'none';
      }
    }
    function popClose(){
      document.getElementById("popups").style.display = 'none';
      $('#container').css({ 'opacity' : 1 });
      $('#notif_header').empty();
      $('#notif_content').empty();
    }
  </script>
</body>
</html>