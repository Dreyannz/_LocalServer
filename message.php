<!doctype html>
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
    <title>DA Region 10 | Message Board</title>
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
      #Home:hover {
        background-color: #26a042;
        opacity: 0.7;
      }
    </style>
  </head>
  <div class="banner">
    <div class="banner__content">
      <marquee behavior="scroll" direction="left" scrollamount="10"><h5 id="sampler">🎈 🎂 🎉 Happy Birthday Kate Abegail Taal 🎉 🎂 🎈</h5></marquee>
    </div>
  </div>
  <body style="background: #FFFFFF;">
    <button class="btn" onclick="home()" id="Home" title="Home"><i class="fas fa-home"></i></button>
    <div class="container mb-5 mt-5" id="container">
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
       <div class="row justify-content-md-center" style="margin-top: 40px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="form-group">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch1">
              <label class="custom-control-label" for="customSwitch1">Post Message on Homepage</label>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="message" placeholder="Message" style="border-color: #26a042;background: transparent;color: #000000;">
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
    <!-- WEBSITE SCRIPTS-->
    <script type="text/javascript">
      var typingTimer;
      var doneTypingInterval = 5000;
      $(document).ready(function(){
        readValue();
        $('#customSwitch1').change(function(){
          clearTimeout(typingTimer);
          changeValue($('#customSwitch1').is(':checked'),$('#message').val());
        });
        $("#message").keyup(function() {
            clearTimeout(typingTimer);
            if ($('#message').val()) {
              typingTimer = setTimeout(doneTyping, doneTypingInterval);
            }
        });
      });
      function doneTyping () {
        changeValue($('#customSwitch1').is(':checked'),$('#message').val());
      }
      function changeValue(status,message){
        $.getJSON('messageApi?f=w&s='+status+'&m='+message, function(data){
          if (data.status=="true"){
            $("#sampler").text(data.message);
          }else{
            $("#sampler").text("No message to be shown on homepage | "+data.message);
          }
        });
      }
      function readValue() {
        $.getJSON('messageApi?f=r', function(data){
          $('#message').val(data.message);
          if (data.status=="false") {
            $("#customSwitch1").attr("checked", false);
            $("#sampler").text("No message to be shown on homepage | "+data.message);
          }else{
            $("#customSwitch1").attr("checked", true);
            $("#sampler").text(data.message);
          }
        });
      }
      function home() {
        window.open('/', "_self");
      }
  </script>
</body>
</html>