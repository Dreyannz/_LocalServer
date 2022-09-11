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
      
    </style>
  </head>
  <div class="mypopup" id="popups" style="display: none;">
    <div id="container1">
      <div class="loader"><img class="rounded-circle" src="assets/Logo/Logo_DA.png" width="180" height="180" ></div>
    </div>
  </div>
  <body style="background: #ffffff">
    <button class="btn" onclick="home()" id="Home" title="Home"><i class="fas fa-home"></i></button>
    <div  id="container">
      <button onclick="topFunction()" id="toTheTop" title="Go to top"><i class="fas fa-chevron-up"></i></button>
      <div class="row justify-content-md-center mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-3 ">
          <div class="position-fixed">
            <div class="card shadow">
              <div class="card-body">
                <h6 class="card-title">Filters</h6>
                <div class="form-group">
                  <select class="form-control" type="text" id="select_encoder">
                    <option disabled="disabled" selected="selected" value="0">Select Encoder</option>
                    <optgroup label="REGIONAL OFFICE">
                      <option value="JEAN DAVE V. ALEMANIO">JEAN DAVE V. ALEMANIO</option>
                      <option value="JEAN JACQUES A. AGBON">JEAN JACQUES A. AGBON</option>
                      <option value="JOYCE ANNE N. ANORA">JOYCE ANNE N. ANORA</option>
                      <option value="LEOJ LIANDRE Q. GARCES">LEOJ LIANDRE Q. GARCES</option>
                      <option value="FAIZAH A. MACABAYAO">FAIZAH A. MACABAYAO</option>
                      <option value="CHARITY MAE V. OBIAL">CHARITY MAE V. OBIAL</option>
                      <option value="ADRIAN JANN F. OCTAT">ADRIAN JANN F. OCTAT</option>
                      <option value="MARK JOVANI O. SALILI">MARK JOVANI O. SALILI</option>
                      <option value="HONEY S. SALUGSUGAN">HONEY S. SALUGSUGAN</option>
                      <option value="ALEJO JASON L. SALVANI III">ALEJO JASON L. SALVANI III</option>
                      <option value="KATE ABEGAIL D. TAAL">KATE ABEGAIL D. TAAL</option>
                      <option value="JOYZA MARIAN B. TADLAS">JOYZA MARIAN B. TADLAS</option>
                      <option value="KARL CHRISTIAN O. WONG">KARL CHRISTIAN O. WONG</option>
                    </optgroup>
                    <optgroup label="BUKIDNON">
                      <option value="KETHYL MAE L. MUANA">KETHYL MAE L. MUANA</option>
                      <option value="SYLVIA JANE M. NAMBATAC">SYLVIA JANE M. NAMBATAC</option>
                      <option value="NICOLA ISABEL H. ROSAL">NICOLA ISABEL H. ROSAL</option>
                      <option value="JOHN JEFFREY L. SAB">JOHN JEFFREY L. SAB</option>
                      <option value="JAYHAZE A. SABLAYAN">JAYHAZE A. SABLAYAN</option>
                      <option value="MARK ANJOREY S. TORRES">MARK ANJOREY S. TORRES</option>
                    </optgroup>
                    <optgroup label="MISAMIS OCCIDENTAL">
                      <option value="LOURENE V. AGUINALDO">LOURENE V. AGUINALDO</option>
                      <option value="KYLE GLADYS L. GULANG">KYLE GLADYS L. GULANG</option>
                      <option value="JOSCEL N. TAMAYO">JOSCEL N. TAMAYO</option>
                    </optgroup>
                    <optgroup label="MISAMIS ORIENTAL">
                      <option value="GERALDINE MAE H. CABIGTING">GERALDINE MAE H. CABIGTING</option>
                      <option value="REAHDEL H. LUMIHAY">REAHDEL H. LUMIHAY</option>
                      <option value="QUINNIE G. MAGDALE">QUINNIE G. MAGDALE</option>
                      <option value="KIM ANDRE S. OBSIOMA">KIM ANDRE S. OBSIOMA</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" type="text" id="select_month">
                    <option disabled="disabled" selected="selected" value="0">Select Month</option>
                    <option value="01">JANUARY 2022</option>
                    <option value="02">FEBRUARY 2022</option>
                    <option value="03">MARCH 2022</option>
                    <option value="04">APRIL 2022</option>
                    <option value="05">MAY 2022</option>
                    <option value="06">JUNE 2022</option>
                    <option value="07">JULY 2022</option>
                    <option value="08">AUGUST 2022</option>
                    <option value="09">SEPTEMBER 2022</option>
                    <option value="10">OCTOBER 2022</option>
                    <option value="11">NOVEMBER 2022</option>
                    <option value="12">DECEMBER 2022</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" type="text" id="select_month_type">
                    <option disabled="disabled" selected="selected" value="0">Select Month Type</option>
                    <option value="0">FULL</option>
                    <option value="1">1st QUINCENA</option>
                    <option value="2">2nd QUINCENA</option>
                  </select>
                </div>
                <div class="form-group">
                  <button  class="btn btn-outline-success btn-block" type="button" id="search" onclick="searchEncoded();"><i class="far fa-folder-open"></i> Generate</button>
                </div>
              </div>
            </div>
            <p class="text-center mt-2">Made with 💖</p>
          </div>

        </div>
        <div class="col-md-7">
          <div class="card shadow mb-5">
            <div class="card-body">
              <h6 class="card-title">Results</h6>
              <p class="card-text" id="results">No data to show.</p>

            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
    <!-- WEBSITE SCRIPTS-->
    <script type="text/javascript">
      $(document).ready(function(){
        
      });
      function home() {
        window.open('./', "_self");
      }
      function searchEncoded(){
        var select_encoder = $("#select_encoder").val();
        var select_month = $("#select_month").val();
        var select_month_type = $("#select_month_type").val();
        $('#results').empty();
        $('#results').append("Loading data...");
        $.getJSON('myOutputApi?e='+select_encoder+'&m='+select_month+'&t='+select_month_type, function(data){
          html = '';
          console.log(data['data']);
          if (data['dataTotal']!=0) {
            $.each(data['data'], function(key, value) {
              html += value['control_no']+' '+value['fullname']+'<br>';
            });
            $('#results').empty();
            $('#results').append(html);
          }else{
            $('#results').empty();
            $('#results').append("No data to show.");
          }
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