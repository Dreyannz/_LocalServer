<?php 
include_once('_config.php');
header("Access-Control-Allow-Origin: *");

if (isset($_GET['q'])) {
  $geocode = $_GET['q'];
}

# Function: get root url
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}
?>
<!doctype html>
  <html lang="en">
  <!-- 
      __                                       
     / _ \_______  _  _____
___  __  __
    / / / / __/ _ \/ / / / _ `/ _ \/ _ \/_  /
   / /_/ / /  /  _/ /_/ / /_/ / / / / / / / / /
  /_____/_/   \___/\__, /\__,_/_/ /_/_/ /_/ /___/
                  /____/                         
       Script Author: Adrian Jann F. Octat
  -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>DA Region 10 | RSBSA</title>
    <meta name="title" content="DA Region 10 | RSBSA">
    <meta name="description" content="Registry System for Basic Sectors in Agriculture | Department of Agriculture Regional Field Office 10">
    <meta name="keywords" content="RSBSA, Ani at Kita, Department of Agriculture, Department of Agriculture Regional Field Office 10, DA, DA RFO 10, Registry System for Basic Sectors in Agriculture">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="DA-RFO 10 | AJ Octat">
    <meta name="google" content="notranslate">
    <link rel="icon" href="../assets/Logo/Logo_DA.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/fontawesome.min.css">
    <script src="../assets/jquery/jquery-3.6.0.js" ></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>
    <style type="text/css">
      @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 300;
        src: local(''),
        url('../assets/fonts/poppins-v19-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('../assets/fonts/poppins-v19-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
      }
      @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        src: local(''),
        url('../assets/fonts/poppins-v19-latin-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('../assets/fonts/poppins-v19-latin-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
      }
      @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        src: local(''),
        url('../assets/fonts/poppins-v19-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('../assets/fonts/poppins-v19-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
      }
      @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        src: local(''),
        url('../assets/fonts/poppins-v19-latin-600.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('../assets/fonts/poppins-v19-latin-600.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
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
      .banner {
        bottom: 0;
        left: 0;
        position: fixed;
        width: 100%;

        align-items: center;
        display: flex;
        justify-content: center;
      }
      .banner__content {
        flex: 1;
      }

      .onSide {
        position: fixed;
        top: 50%;
        z-index: 99; 
        transform: translate(0px, -50%);
        align-items:center;
        display:flex;
        justify-content:center;
        padding:8px;
        position:absolute;
        left:1rem;
        border-radius: 5px;
      }
      @media screen and (max-width: 900px) {
        #title_message {
          visibility: hidden;
          clear: both;
          float: left;
          margin: 10px auto 5px 20px;
          width: 28%;
          display: none;
        }
      }
      table {
        border-collapse: separate;
        margin-top: 10px;
        border-spacing: 0 0px;
      }

      td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
      }

      td:last-child {
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;
      }

      thead input {
        width: 100%;
      }

      .noWrap {
        white-space: nowrap;
      }

      .mypopup1 {
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

      .errorpop {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 99;
        border: none;
        outline: none;
        justify-content: center;
        align-items: center;
        text-align: center;
        opacity: 1;
        color: #fff;
        border-radius: 120px;
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

      .modal-header1 {
        border-bottom: 0px solid #26a042;
        background-color: #26a042;
        color: #fff;
      }
      .modal-header1 button{
        color: #fff;
      }
      .modal-body1 {
        border-bottom: 0px solid #26a042;
        background-color: #26a042;
        color: #fff;
      }
      .enLarge {
        bottom: 10px;
        position: fixed;
        left: 50%;
        width: 75%;
        transform: translate(-50%, 0px);
        z-index: 100;
      }
      .iimg{
        width: 100%;
        height: auto;
      }
      .iembed{
        width: 100%;
        height: 100vh;
      }
      .enLarge {
        bottom: 10px;
        position: fixed;
        left: 50%;
        width: 75%;
        transform: translate(-50%, 0px);
        z-index: 100;
      }
      .bgBox {
        position: fixed;
        bottom: -80px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 99;
        padding: 10px;
        border: none;
        outline: none;
        justify-content: center;
        align-items: center;
        text-align: center;
        opacity: 1;
        color: #fff;
        background: #26a042;
      }
    </style>
  </head>
  <div class="mypopup1" id="loadingPops" style="display: none;">
    <div id="container1">
      <div class="loader"><img class="rounded-circle" src="../assets/Logo/Logo_DA.png" width="180" height="180"></div>
    </div>
  </div>
  <div class="enLarge">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 mControlNo">
      </div>
      <div class="col-4"></div>
    </div>
  </div>
  <body style="background: #ffffff">
    <div class="mr-5 ml-5 mt-5 mb-5" id="header">
      <div class="row">
        <div class="col-1"></div>
        <div class="col" id="results">
        </div>
        <div class="col-1"></div>
      </div>
    </div>
    
    <!-- WEBSITE SCRIPTS-->
    <script type="text/javascript">
      $(document).ready(function() {
        loadingPops();
        $.getJSON('../dlApi.php?q=<?php echo $geocode?>', function(data){
          $('#results').empty();
          html = '';
          for (let index = 0; index < data.length; index++) {
            if (data[index].indexOf('pdf') > -1) {
              html +=  '<embed class="iembed shadow m-3 border border-dark rounded" src="https://ffrs1.da.gov.ph/uploads/rsbsa_form/' + data[index] + '">';
            } else {
              html +=  '<img class="iimg shadow m-3 border border-dark rounded" src="https://ffrs1.da.gov.ph/uploads/rsbsa_form/' + data[index] + '">';
            }
            
            console.log(data[index]);
          }
          $('.mControlNo').append('<h3 class="bgBox"><?php echo $geocode?></h3></button>');
          $('#results').append(html);
          loadingPopsClose();
        })
      });
      function loadingPops() {
        document.getElementById("loadingPops").style.display = 'block';
        $('#database').css({ 'opacity' : 0 });
      }

      function loadingPopsClose() {
        document.getElementById("loadingPops").style.display = 'none';
        $('#database').css({ 'opacity' : 1 });
      }
    </script>
</body>
</html>