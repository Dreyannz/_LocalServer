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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>DA Region 10 | Encoder Output</title>
    <meta name="google" content="notranslate">
    <meta name="author" content="DA-RFO 10 | AJ Octat">
    <link rel="icon" href="assets/Logo/Logo_DA.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RSBSA Validation by AJ Octat">

    <!-- Bootstrap CSS -->
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
      .badge-regulars{
        color: black;
        background-color: white;
      }
      .badge-processor{
        color: black;
        background-color: yellow;
      }
      .badge-encoder{
        color: white;
        background-color: forestgreen;
      }
      .badge-validator{
        color: white;
        background-color: blue;
      }
      .badge-receiver{
        color: white;
        background-color: red;
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
        padding-left: 55px;
        padding-right: 55px;
        padding-top: 55px;
        padding-bottom: 55px;
        justify-content: center;
        align-items: center;
        text-align: center;
        opacity: 1;
        color: #fff;
        background: #26a042;
        border-radius: 120px;
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
      .loader {
        position: relative;
        width: 120px;
        height: 120px;
        font-size: 24px;
        color: #fff;
        letter-spacing: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .loader::after {
        content: '';
        position: absolute;
        top: -40px;
        left: -40px;
        right: -40px;
        bottom: -40px;
        border-radius: 50%;
        border-top: 12px solid rgba(255, 255, 255, 0.2);
        border-right: 12px solid rgba(255, 255, 255, 0.2);
        border-bottom: 12px solid rgba(255, 255, 255, 0.2);
        border-left: 12px solid #fff;
        transform: translateZ(0);
        animation: load 1.2s infinite linear;
      }
      @keyframes load {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }
      #container1 {
        width: fit-content;
        height: fit-content;
        background: #26a042;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .profile-card-2 {
        max-width: 250px;
        max-height: 250px;
        background-color: #FFF;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        background-position: center;
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        border-radius: 10px;
      }

      .profile-card-2 img {
        width: 250px;
        height: 250px;
        transition: all linear 0.25s;
      }

      .profile-card-2 .profile-name {
        position: absolute;
        left: 20px;
        bottom: 30px;
        font-size: 15px;
        color: #FFF;
        text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        font-weight: bold;
        transition: all linear 0.25s;
      }

      .profile-card-2 .profile-encoded {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #FFF;
        font-size: 20px;
        transition: all linear 0.25s;
      }

      .profile-card-2 .profile-icons .fa {
        margin: 5px;
      }

      .profile-card-2:hover img {
        filter: blur(5px);
      }

      .profile-card-2:hover .profile-name {
        bottom: 40px;
      }
    </style>
  </head>
  <div class="mypopup" id="popups" style="display: none;">
    <div id="container1">
      <div class="loader"><img class="rounded-circle" src="assets/Logo/Logo_DA.png" width="180" height="180" ></div>
    </div>
  </div>
  <body style="background: #ffffff">
    <button class="btn" onclick="home()" id="Home" title="Home"><i class="fas fa-home"></i></button>
    <div class="container mb-5 mt-5" id="container">
      <button onclick="topFunction()" id="toTheTop" title="Go to top"><i class="fas fa-chevron-up"></i></button>
      <div class="row justify-content-center row-cols-2 row-cols-md-4" id="encoded_container" style="margin-top: 30px; display: none">
        <div class="card" style="margin:10px">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Total Encoded Today:</h6>
            <p class="card-text" id="encoded_today">0</p>
          </div>
        </div>
        <div class="card" style="margin:10px">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Total Encoded This Month:</h6>
            <p class="card-text" id="encoded_month">0</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center row-cols-2 row-cols-md-4" style="margin-top: 30px;" id="containerOutput"></div>
    </div>
    
    <!-- WEBSITE SCRIPTS-->
    <script type="text/javascript">
      $(document).ready(function(){
        popShow();
        getOutput();
        setInterval(function(){ 
          getOutput();
        }, 120000);
      });
      function home() {
        window.open('./', "_self");
      }
      function getOutput(){
        var d = new Date();
        var n = d.toLocaleTimeString();
        encoded_today = 0;
        encoded_month = 0;
        $.getJSON("outputApi.php", function(data){
          $('#containerOutput').empty();
          $.each(data, function(key, value) {
            html = '';
            if (value['output']!=null) {
              html += '<div class="profile-card-2"><img src="assets/img/'+value['image']+'" class="img img-responsive">';
              html += '<div class="profile-name">'+value['name']+'</div>';
              html += '<div class="profile-encoded"><span class="badge badge-pill badge-encoder">'+value['output']+' | '+value['outputTotal']+'</span></div>';
              html += '</div>';
              encoded_today += parseInt(value['output']);
            }
            encoded_month += parseInt(value['outputTotal']);
            $('#containerOutput').append(html);
            $('#encoded_today').text(encoded_today);
            $('#encoded_month').text(encoded_month);
            document.getElementById("encoded_container").style.display = 'block';
          });
          console.log(n+" | Encoded Today: "+encoded_today+" | Encoded This Month: "+encoded_month);
          popClose();
        })
      }
      var toTheTopBotton = document.getElementById("toTheTop");
      var toHome = document.getElementById("Home");
      var toChangeTheme = document.getElementById("ChangeTheme");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          toTheTopBotton.style.display = "block";
        } else {
          toTheTopBotton.style.display = "none";
        }
      }
      function topFunction() {
        jQuery('html,body').animate({scrollTop:0},1000);
      }
      function popShow() {
        document.getElementById("popups").style.display = 'block';
      }
      function popClose() {
        document.getElementById("popups").style.display = 'none';
      }
    </script>
  </body>
  </html>