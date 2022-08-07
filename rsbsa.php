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
  <title>DA Region 10 | RSBSA Team</title>
  <meta name="google" content="notranslate">
  <meta name="author" content="DA-RFO 10 | AJ Octat">
  <link rel="icon" href="./assets/Logo/Logo_DA.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="RSBSA Validation by AJ Octat">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/fontawesome/all.min.css">
  <link rel="stylesheet" href="./assets/fontawesome/fontawesome.min.css">
  <script src="./assets/jquery/jquery-3.6.0.js" ></script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
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
        left: 10px;
        bottom: 10px;
        font-size: 18px;
        color: #FFF;
        text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        font-weight: bold;
        transition: all linear 0.25s;
      }

      .profile-card-2 .profile-roles {
        position: absolute;
        top: 5px;
        left: 10px;
        font-size: 14px;
        color: #FFF;
        transition: all linear 0.25s;
      }
      .profile-card-2 .profile-station {
        position: absolute;
        left: 10px;
        bottom: -20px;
        font-size: 14px;
        color: #FFF;
        text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        font-weight: bold;
        transition: all linear 0.25s;
      }

      .profile-card-2:hover img {
        filter: blur(5px);
      }

      .profile-card-2:hover .profile-name {
        bottom: 30px;
      }

      .profile-card-2:hover .profile-station {
        bottom: 10px;
      }
  </style>
</head>
<div class="mypopup" id="popups" style="display: none;">
  <center>
    <h3 id="notif_header"></h3>
    <p id="notif_content"></p>
    <button id="notif_button" type="button" style="display: none;" class="btn btn-danger btn-sm" onclick="popClose();"><i class="fas fa-times"></i> Close</button>
  </center>
</div>
<body style="background: #ffffff">
  <button class="btn" onclick="home()" id="Home" title="Home"><i class="fas fa-home"></i></button>
  <div class="container mb-5 mt-5" id="container">
    <button onclick="topFunction()" id="toTheTop" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <div class="row justify-content-md-center">
      <div class="col-md">
        <center>
          <img class="rounded-circle" src="./assets/Logo/Logo_DA.png" width="250" height="250" style="margin-top: 40px;">
          <h1 style="margin-top: 30px;color:#000000">Department of Agriculture - Regional Field Office 10</h1>
          <h3 style="margin-top: 30px;color:#000000">Registry System for Basic Sectors in Agriculture</h3>
        </center>
      </div>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-4" style="margin-top: 30px;">
      <?php 
        $json = file_get_contents('rsbsa.json');
        $json_data = json_decode($json,true);
        foreach ($json_data['supervisory'] as $value) {
          if ($value['office'] == "ORED") {
            echo '<div class="profile-card-2"><img src="assets/img/'.$value['image'].'.jpg" class="img img-responsive">';
            echo '<div class="profile-name">'.$value['name'].'</div>';
            echo '<div class="profile-roles">';
            foreach($value['roles'] as $roles){
                echo '<span class="badge badge-pill badge-regulars">'.$roles.'</span>';
            };
            echo '</div></div>';
          }
        }
      ?>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-4" style="margin-top: 30px;">
      <?php 
        foreach ($json_data['supervisory'] as $value) {
          if ($value['office'] == "PMED") {
            echo '<div class="profile-card-2"><img src="assets/img/'.$value['image'].'.jpg" class="img img-responsive">';
            echo '<div class="profile-name">'.$value['name'].'</div>';
            echo '<div class="profile-roles">';
            foreach($value['roles'] as $roles){
                echo '<span class="badge badge-pill badge-regulars">'.$roles.'</span>';
            };
            echo '</div></div>';
          }
        }
      ?>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md">
        <center>
          <h4 style="margin-top: 30px;color:#000000">RSBSA | Admin Assistant I (Encoder)</h4>
        </center>
      </div>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-4" style="margin-top: 30px;">
      <?php 
        shuffle($json_data['staff']);
        foreach ($json_data['staff'] as $value) {
          if ($value['designation']=="AdminAssistantI_Encoder"||$value['designation']=="AdminAideVI") {
            echo '<div class="profile-card-2"><img src="assets/img/'.$value['image'].'.jpg" class="img img-responsive">';
            echo '<div class="profile-name">'.$value['name'].'</div>';
            echo '<div class="profile-roles">';
            foreach($value['roles'] as $roles){
              if($roles == "💻Encoder"||$roles == "💻Chief Encoder"||$roles == "👩‍💼Admin Aide") {
                echo '<span class="badge badge-pill badge-encoder">'.$roles.'</span>';
              }elseif($roles == "🔎Chief Validator"||$roles == "🔎Validator"||$roles == "✔️KYC") {
                echo '<span class="badge badge-pill badge-validator">'.$roles.'</span>';
              }elseif($roles == "📝Chief Processor"||$roles == "📝Processor") {
                echo '<span class="badge badge-pill badge-processor">'.$roles.'</span>';
              }elseif($roles == "👑Team Leader"||$roles == "📑Receiver") {
                echo '<span class="badge badge-pill badge-receiver">'.$roles.'</span>';
              }else{
                echo '<span class="badge badge-pill badge-regulars">'.$roles.'</span>';
              }
            };
            echo '</div>';
            echo '<div class="profile-station">';
            echo '<span class="badge badge-pill badge-regulars">'.$value['station'].'</span>';
            echo '</div></div>';
          }
        }
      ?>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md">
        <center>
          <h4 style="margin-top: 30px;color:#000000">RSBSA | Project Development Assistant I (Geotagger)</h4>
        </center>
      </div>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-4" style="margin-top: 30px;">
      <?php 
        foreach ($json_data['staff'] as $value) {
          if ($value['designation']=="ProjectDevelopmentAssistantI_Geotagger") {
            echo '<div class="profile-card-2"><img src="assets/img/'.$value['image'].'.jpg" class="img img-responsive">';
            echo '<div class="profile-name">'.$value['name'].'</div>';
            echo '<div class="profile-roles">';
            if ($value['station']=="📍Malaybalay City") {
              echo '<span class="badge badge-pill badge-encoder">'.$value['station'].'</span>';
            }else{
              echo '<span class="badge badge-pill badge-validator">'.$value['station'].'</span>';
            }
            echo '</div></div>';
          }
        }
      ?>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md">
        <center>
          <h4 style="margin-top: 30px;color:#000000">RSBSA | Project Development Assistant I (Enumerator)</h4>
        </center>
      </div>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-4" style="margin-top: 30px;">
      <?php 
        foreach ($json_data['staff'] as $value) {
          if ($value['designation']=="ProjectDevelopmentAssistantI_Enumerator") {
            echo '<div class="profile-card-2"><img src="assets/img/'.$value['image'].'.jpg" class="img img-responsive">';
            echo '<div class="profile-name">'.$value['name'].'</div>';
            echo '<div class="profile-roles">';
            echo '<span class="badge badge-pill badge-encoder">'.$value['station'].'</span>';
            echo '</div></div>';
          }
        }
      ?>
    </div>
  </div>
    
  <!-- WEBSITE SCRIPTS-->
  <script type="text/javascript">
    $(document).ready(function(){
      
    });
    function home() {
      window.open('./', "_self");
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
  </script>
</body>
</html>