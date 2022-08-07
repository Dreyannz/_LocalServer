<?php 
include_once('_config.php');
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
    <title>DA Region 10 | RSBSA</title>
    <meta name="title" content="DA Region 10 | RSBSA">
    <meta name="description" content="Registry System for Basic Sectors in Agriculture | Department of Agriculture Regional Field Office 10">
    <meta name="keywords" content="RSBSA, Ani at Kita, Department of Agriculture, Department of Agriculture Regional Field Office 10, DA, DA RFO 10, Registry System for Basic Sectors in Agriculture">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="DA-RFO 10 | AJ Octat">
    <meta name="google" content="notranslate">
    <link rel="icon" href="assets/Logo/Logo_DA.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo url();?>">
    <meta property="og:title" content="DA Region 10 | RSBSA">
    <meta property="og:description" content="Registry System for Basic Sectors in Agriculture | Department of Agriculture Regional Field Office 10">
    <meta property="og:image" content="<?php echo url();?>assets/img/DA-meta-tags.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo url();?>">
    <meta property="twitter:title" content="DA Region 10 | RSBSA">
    <meta property="twitter:description" content="Registry System for Basic Sectors in Agriculture | Department of Agriculture Regional Field Office 10">
    <meta property="twitter:image" content="<?php echo url();?>assets/img/DA-meta-tags.png">

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
      .rsbsaTeam {
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
      .rsbsaOutput {
        position: fixed;
        right: 4rem;
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
      .rsbsaData {
        position: fixed;
        right: 7rem;
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
    </style>
  </head>
  <?php 
  $message_file = file_get_contents('message.json');
  $message_json = json_decode($message_file, 1);
  if ($message_json['status']=="true") {
    echo '<div class="banner">';
    echo '<div class="banner__content">';
    echo '<marquee behavior="scroll" direction="left" scrollamount="10"><h5>'.$message_json['message'].'</h5></marquee>';
    echo '</div>';
    echo '</div>';
  }else{
    $quote_message_file = file_get_contents('https://api.quotable.io/random');
    $quote_message_json = json_decode($quote_message_file, 1);
    echo '<div class="banner">';
    echo '<div class="banner__content">';
    echo '<marquee behavior="scroll" direction="left" scrollamount="10"><h5>'.$quote_message_json['content'].' -'.$quote_message_json['author'].'</h5></marquee>';
    echo '</div>';
    echo '</div>';
    
  }
  ?>
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div style="background: #26a042;" class="modal-content">
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
  <body style="background: #FFFFFF;">
    <button class="btn rsbsaTeam" title="RSBSA Team"><i class="fas fa-users"></i></button>
    <button class="btn rsbsaOutput" title="Encoder Output"><i class="fas fa-keyboard"></i></button>
    <button class="btn rsbsaData" title="RSBSA Repository"><i class="fas fa-database"></i></button>
    
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
       <div class="row justify-content-md-center" style="margin-top: 40px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" id="Keyword" autocomplete="off" placeholder="Keyword/Geocode" style="border-color: #26a042;background: transparent;color: #000000;">
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="input-group mb-3 ">
                <select class="form-control" type="text" id="select_province" style="border-color: #26a042;background: transparent;color: #000000" onchange="changeMunicipality();showOpt();">
                  <option style="background: #FFFFFF;" selected="selected" value="0">Select Province</option>
                  <option style="background: #FFFFFF;" value="BUKIDNON">BUKIDNON [13]</option>
                  <option style="background: #FFFFFF; ?>;" value="CAMIGUIN">CAMIGUIN [18]</option>
                  <option style="background: #FFFFFF; ?>;" value="LANAO DEL NORTE">LANAO DEL NORTE [35]</option>
                  <option style="background: #FFFFFF; ?>;" value="MISAMIS OCCIDENTAL">MISAMIS OCCIDENTAL [42]</option>
                  <option style="background: #FFFFFF; ?>;" value="MISAMIS ORIENTAL">MISAMIS ORIENTAL [43]</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group mb-3 ">
                <select class="select form-control" type="text" id="select_municipality" onchange="changeBarangay();showOpt();" style="border-color: #26a042;background: transparent;color: #000000">
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group mb-3 ">
                  <select class="select form-control" type="text" id="select_barangay" onchange="showOpt();" style="border-color: #26a042;background: transparent;color: #000000;">
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <select class="form-control" type="text" id="select_source" style="border-color: #26a042;background: transparent;color: #000000">
                  <option style="background: #FFFFFF;" selected="selected" value="0">FFRS Data [Validation]</option>
                  <option style="background: #FFFFFF;" value="1">FFRS Data [Data Check]</option>
                  <option style="background: #FFFFFF;" value="2">Locally Saved Data</option>
                </select>
              </div>
            </div>
            <button class="btn btn-success btn-block generateData">Generate Data</button>
            <span>Note: Locally Saved Data does not reflect realtime information. The information stored varies from the date and time it was saved. Please ask Adrian for more info.</span>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
    <!-- WEBSITE SCRIPTS-->
    <script type="text/javascript">
      $(document).ready(function(){
        var banner = Boolean(<?php echo $dataPrivacyBanner ?>);
        if (banner) {
          $('#modal').modal('show');
        }
        $(".rsbsaTeam").on('click', function(event){
            window.open('/rsbsa','_blank');
          });
        $(".rsbsaOutput").on('click', function(event){
            window.open('/output','_blank');
          });
        $(".rsbsaData").on('click', function(event){
            window.open('/data','_blank');
          });
        $(".generateData").on('click', function(event){
          data = $('#Keyword').val();
          source = $('#select_source option:selected').val();
          if (source!=2) {
            if (data.length!=0) {
              window.open('/ffrs/'+source+'/'+data, '_self');
            }
          }else{
            if ($('#select_province option:selected').val()!=0&&$('#select_municipality option:selected').val()!=0) {
              if (data.length>8) {
                window.open('/local/'+data.substring(0,8), '_self');
              }else{
                window.open('/local/'+data, '_self');
              }
            }
          }
        });
      });
      
      function changeMunicipality(){
        var select_province = $("#select_province").val();
        $('#select_municipality').empty();
        $('#select_barangay').empty();
        if (select_province != '0') {
          $('#select_municipality').append('<option style="background: #FFFFFF" selected="selected" value="0">Select Municipality</option>');
        }
        $.getJSON("assets/data/municipalities.json", function(data){
          $.each(data, function(key, municipal) {
            if (municipal.province.toUpperCase() == select_province.toUpperCase()) {
              $('#select_municipality').append('<option style="background: #FFFFFF" value="'+ municipal.name.toUpperCase() +'">'+municipal.name.toUpperCase()+' ['+municipal.mcode.toString().substring(4, 6)+']</option>');
            }
          });
        })
      }
      function changeBarangay(){
        var select_province = $("#select_province").val();
        if (select_province == "BUKIDNON") {
          var select_province_geocode = '1013';
        }else if (select_province == "CAMIGUIN") {
          var select_province_geocode = '1018';
        }else if (select_province == "LANAO DEL NORTE") {
          var select_province_geocode = '1035';
        }else if (select_province == "MISAMIS OCCIDENTAL") {
          var select_province_geocode = '1042';
        }else if (select_province == "MISAMIS ORIENTAL") {
          var select_province_geocode = '1043';
        }
        var select_municipality = $("#select_municipality").val();
        $('#select_barangay').empty();
        if (select_municipality != '0') {
          $('#select_barangay').append('<option style="background: #FFFFFF" selected="selected" value="0">Select Barangay</option>');
        }
        $.getJSON("assets/data/barangays.json", function(data){
          $.each(data, function(key, barangay) {
            if(barangay.code.toString().includes(select_province_geocode)) {
              if (barangay.citymun.toUpperCase().includes(select_municipality.toUpperCase())) {
                $('#select_barangay').append('<option style="background: #FFFFFF" value="'+ barangay.code +'">'+barangay.name.toUpperCase()+' ['+barangay.code.toString().substring(6, 9)+']</option>');
              }else if(barangay.citymun.toUpperCase().includes(select_municipality.toUpperCase().replace('-',' '))){
                $('#select_barangay').append('<option style="background: #FFFFFF" value="'+ barangay.code +'">'+barangay.name.toUpperCase()+' ['+barangay.code.toString().substring(6, 9)+']</option>');
              }
            }
          });
        })
      }
      function showOpt(){
        var select_barangay = $('#select_barangay option:selected').val();
        var select_municipality = $('#select_municipality option:selected').val();
        var select_province = $('#select_province option:selected').val();
        if (select_province == 0) {
        // No Geocode produced
      }else if ((select_province != null || select_province != 0) && select_municipality == 0 && select_barangay == null) {
        // Geocode of Province produced
        var code_region = '10';
        var code_province = $("#select_province").val();
        var code_provincex = '';
        if (code_province == 'BUKIDNON') {
          code_provincex = '13';
        }else if (code_province == 'CAMIGUIN') {
          code_provincex = '18';
        }else if (code_province == 'LANAO DEL NORTE') {
          code_provincex = '35';
        }else if (code_province == 'MISAMIS OCCIDENTAL') {
          code_provincex = '42';
        }else{
          code_provincex = '43';
        }
        $('#Keyword').val(code_region+'-'+code_provincex);
      }else if((select_province != null || select_province != 0) && select_municipality != 0 && select_barangay == 0){
        $.getJSON("assets/data/municipalities.json", function(data1){
          $.each(data1, function(key, municipall) {
            if (municipall.province.toUpperCase() == select_province && municipall.name.toUpperCase() == select_municipality) {
              var codex = municipall.mcode.toString();
              var code_region = codex.slice(0, 2);
              var code_province = codex.slice(2, 4);
              var code_municipality = codex.slice(4, 6);
              $('#Keyword').val(code_region+'-'+code_province+'-'+code_municipality);
            }
          });
        })
      }else{
        var code_region = select_barangay.slice(0, 2);
        var code_province = select_barangay.slice(2, 4);
        var code_municipality = select_barangay.slice(4, 6);
        var code_barangay = select_barangay.slice(6, 9);
        $('#Keyword').val(code_region+'-'+code_province+'-'+code_municipality+'-'+code_barangay);
      }
    }
    var toTheTopBotton = document.getElementById("toTheTop");
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