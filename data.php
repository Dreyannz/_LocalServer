<?php 
include_once('_config.php');

# Function: get root url
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}
$muncity_file = file_get_contents('muncity.json');
$muncity_json = json_decode($muncity_file, 1);

# Function: filter data with respect to value given
function str_starts_with ( $haystack, $needle ) {
  return strpos( $haystack , $needle ) === 0;
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
    <title>DA Region 10 | RSBSA Data Repository</title>
    <meta name="title" content="DA Region 10 | RSBSA Data Repository">
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
    <meta property="og:url" content="<?php echo url();?>/">
    <meta property="og:title" content="DA Region 10 | RSBSA Data Repository">
    <meta property="og:description" content="Registry System for Basic Sectors in Agriculture | Department of Agriculture Regional Field Office 10">
    <meta property="og:image" content="<?php echo url();?>/assets/img/DA-meta-tags.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo url();?>/">
    <meta property="twitter:title" content="DA Region 10 | RSBSA Data Repository">
    <meta property="twitter:description" content="Registry System for Basic Sectors in Agriculture | Department of Agriculture Regional Field Office 10">
    <meta property="twitter:image" content="<?php echo url();?>/assets/img/DA-meta-tags.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/all.min.css">
    <link rel="stylesheet" href="assets/fontawesome/fontawesome.min.css">
    <script src="assets/jquery/jquery-3.6.0.js" ></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>
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
    </style>
  </head>
  <body style="background: #ffffff">
    <div class="mr-5 ml-5 mb-5 mt-5" id="header">
      <button onclick="topFunction()" id="toTheTop" title="Go to top"><i class="fas fa-chevron-up"></i></button>
      <div class="row">
        <div class="col col-3">
          <div class="card shadow" style="background: #26a042;">
            <img src="assets/Logo/Logo_DA.png" style="width: 80%; height: 80%;" class="card-img-top mx-auto d-block mt-3" alt="Department of Agriculture Logo">
            <div class="card-body">
              <h5 class="card-text text-center font-weight-bold text-white">Department of Agriculture</h5>
              <h5 class="card-text text-center font-weight-bold text-white">Regional Field Office 10</h5>
              <h6 class="card-text text-center text-white">Antonio Luna St., Cagayan de Oro</h6>
            </div>
          </div>
          <div class="input-group mt-3">
            <select class="form-control" type="text" id="select_province" style="border-color: #26a042;background: transparent;color: #000000" onchange="showOpt();">
              <option selected="selected" value="0">All Province</option>
              <option value="13">BUKIDNON</option>
              <option value="18">CAMIGUIN</option>
              <option value="35">LANAO DEL NORTE</option>
              <option value="42">MISAMIS OCCIDENTAL</option>
              <option value="43">MISAMIS ORIENTAL</option>
            </select>
            <div class="input-group-append">

              <button class="btn btn-outline-success genReports" type="button"><i class="fas fa-bug"></i></button>
            </div>
          </div>
          
          <p class="text-center mt-2">Made with 💖</p>

        </div>
        <div class="col-9">
          <div class="card border-success shadow">
            <div class="card-body">
              <h4 class="card-text font-weight-bold">Registry System for Basic Sectors in Agriculture (RSBSA)</h4>
              <h6 class="card-subtitle text-muted">The RSBSA is an electronic compilation of basic information of farmers, farm workers, fishers, and other target agriculture-related beneficiaries of the Department of Agriculture (DA).</h6>
            </div>
          </div>
          <div class="card border-success shadow mt-3" id="cardBukidnon">
            <div class="card-body">
              <h5 class="card-text font-weight-bold">BUKIDNON</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">MUNICIPALITY</th>
                    <th scope="col">GEOCODE</th>
                    <th scope="col">DATA CREATED</th>
                    <th scope="col">COUNT</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($muncity_json as $key) {
                      if(str_starts_with($key['geocode'],'10-13')){
                        if (file_exists('./KYC/'.$key['geocode'].'.json')) {
                          $data_file = file_get_contents('./KYC/'.$key['geocode'].'.json');
                          $data_json = json_decode($data_file, 1);
                          $data_info = $data_json['dateCreated'];
                          $data_total = $data_json['dataTotal'];
                        } else {
                          $data_info = 'No Data Found';
                          $data_total = '0';
                        }
                        echo '<tr style="color: #000000;" id="'.$key['geocode'].'" style="height:0;"><td><p style="white-space:nowrap;height:0">'.strtoupper($key['name']).'</p></td><td><p style="white-space:nowrap;height:0">'.strtoupper($key['geocode']).'</p></td><td><p style="white-space:nowrap;height:0">'.$data_info.'</p></td><td><p style="white-space:nowrap;height:0">'.$data_total.'</p></td><td><a class="btn btn-success " onclick="deleteData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Delete Data Files"><i class="far fa-trash-alt" ></i></a><a class="btn btn-success " onclick="downloadData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Download Data"><i class="fas fa-download"></i> Download</a></td></tr>';
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card border-success shadow mt-3" id="cardCamiguin">
            <div class="card-body">
              <h5 class="card-text font-weight-bold">CAMIGUIN</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">MUNICIPALITY</th>
                    <th scope="col">GEOCODE</th>
                    <th scope="col">DATA CREATED</th>
                    <th scope="col">COUNT</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($muncity_json as $key) {
                      if(str_starts_with($key['geocode'],'10-18')){
                        if (file_exists('./KYC/'.$key['geocode'].'.json')) {
                          $data_file = file_get_contents('./KYC/'.$key['geocode'].'.json');
                          $data_json = json_decode($data_file, 1);
                          $data_info = $data_json['dateCreated'];
                          $data_total = $data_json['dataTotal'];
                        } else {
                          $data_info = 'No Data Found';
                          $data_total = '0';
                        }
                        echo '<tr style="color: #000000;" id="'.$key['geocode'].'" style="height:0;"><td><p style="white-space:nowrap;height:0">'.strtoupper($key['name']).'</p></td><td><p style="white-space:nowrap;height:0">'.strtoupper($key['geocode']).'</p></td><td><p style="white-space:nowrap;height:0">'.$data_info.'</p></td><td><p style="white-space:nowrap;height:0">'.$data_total.'</p></td><td><a class="btn btn-success " onclick="deleteData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Delete Data Files"><i class="far fa-trash-alt" ></i></a><a class="btn btn-success " onclick="downloadData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Download Data"><i class="fas fa-download"></i> Download</a></td></tr>';
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card border-success shadow mt-3" id="cardLanaoDelNorte">
            <div class="card-body">
              <h5 class="card-text font-weight-bold">LANAO DEL NORTE</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">MUNICIPALITY</th>
                    <th scope="col">GEOCODE</th>
                    <th scope="col">DATA CREATED</th>
                    <th scope="col">COUNT</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($muncity_json as $key) {
                      if(str_starts_with($key['geocode'],'10-35')){
                        if (file_exists('./KYC/'.$key['geocode'].'.json')) {
                          $data_file = file_get_contents('./KYC/'.$key['geocode'].'.json');
                          $data_json = json_decode($data_file, 1);
                          $data_info = $data_json['dateCreated'];
                          $data_total = $data_json['dataTotal'];
                        } else {
                          $data_info = 'No Data Found';
                          $data_total = '0';
                        }
                        echo '<tr style="color: #000000;" id="'.$key['geocode'].'" style="height:0;"><td><p style="white-space:nowrap;height:0">'.strtoupper($key['name']).'</p></td><td><p style="white-space:nowrap;height:0">'.strtoupper($key['geocode']).'</p></td><td><p style="white-space:nowrap;height:0">'.$data_info.'</p></td><td><p style="white-space:nowrap;height:0">'.$data_total.'</p></td><td><a class="btn btn-success " onclick="deleteData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Delete Data Files"><i class="far fa-trash-alt" ></i></a><a class="btn btn-success " onclick="downloadData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Download Data"><i class="fas fa-download"></i> Download</a></td></tr>';
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card border-success shadow mt-3" id="cardMisamisOccidental">
            <div class="card-body">
              <h5 class="card-text font-weight-bold">MISAMIS OCCIDENTAL</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">MUNICIPALITY</th>
                    <th scope="col">GEOCODE</th>
                    <th scope="col">DATA CREATED</th>
                    <th scope="col">COUNT</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($muncity_json as $key) {
                      if(str_starts_with($key['geocode'],'10-42')){
                        if (file_exists('./KYC/'.$key['geocode'].'.json')) {
                          $data_file = file_get_contents('./KYC/'.$key['geocode'].'.json');
                          $data_json = json_decode($data_file, 1);
                          $data_info = $data_json['dateCreated'];
                          $data_total = $data_json['dataTotal'];
                        } else {
                          $data_info = 'No Data Found';
                          $data_total = '0';
                        }
                        echo '<tr style="color: #000000;" id="'.$key['geocode'].'" style="height:0;"><td><p style="white-space:nowrap;height:0">'.strtoupper($key['name']).'</p></td><td><p style="white-space:nowrap;height:0">'.strtoupper($key['geocode']).'</p></td><td><p style="white-space:nowrap;height:0">'.$data_info.'</p></td><td><p style="white-space:nowrap;height:0">'.$data_total.'</p></td><td><a class="btn btn-success " onclick="deleteData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Delete Data Files"><i class="far fa-trash-alt" ></i></a><a class="btn btn-success " onclick="downloadData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Download Data"><i class="fas fa-download"></i> Download</a></td></tr>';
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card border-success shadow mt-3" id="cardMisamisOriental">
            <div class="card-body">
              <h5 class="card-text font-weight-bold">MISAMIS ORIENTAL</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">MUNICIPALITY</th>
                    <th scope="col">GEOCODE</th>
                    <th scope="col">DATA CREATED</th>
                    <th scope="col">COUNT</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($muncity_json as $key) {
                      if(str_starts_with($key['geocode'],'10-43')){
                        if (file_exists('./KYC/'.$key['geocode'].'.json')) {
                          $data_file = file_get_contents('./KYC/'.$key['geocode'].'.json');
                          $data_json = json_decode($data_file, 1);
                          $data_info = $data_json['dateCreated'];
                          $data_total = $data_json['dataTotal'];
                        } else {
                          $data_info = 'No Data Found';
                          $data_total = '0';
                        }
                        echo '<tr style="color: #000000;" id="'.$key['geocode'].'" style="height:0;"><td><p style="white-space:nowrap;height:0">'.strtoupper($key['name']).'</p></td><td><p style="white-space:nowrap;height:0">'.strtoupper($key['geocode']).'</p></td><td><p style="white-space:nowrap;height:0">'.$data_info.'</p></td><td><p style="white-space:nowrap;height:0">'.$data_total.'</p></td><td><a class="btn btn-success " onclick="deleteData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Delete Data Files"><i class="far fa-trash-alt" ></i></a><a class="btn btn-success " onclick="downloadData(this)" type="button" data-toggle="tooltip" data-placement="top" title="Download Data"><i class="fas fa-download"></i> Download</a></td></tr>';
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- WEBSITE SCRIPTS-->
    <script type="text/javascript">
      $(document).ready(function(){
        $(".genReports").on('click', function(event) {
          window.open('reportsApi', '_blank');
        });
      });
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

      function showOpt(){
        var select_province = $('#select_province option:selected').val();
          $("#cardBukidnon").hide();
          $("#cardCamiguin").hide();
          $("#cardLanaoDelNorte").hide();
          $("#cardMisamisOccidental").hide();
          $("#cardMisamisOriental").hide();
        if (select_province==0) {
          $("#cardBukidnon").show();
          $("#cardCamiguin").show();
          $("#cardLanaoDelNorte").show();
          $("#cardMisamisOccidental").show();
          $("#cardMisamisOriental").show();
        }else if (select_province==13){
          $("#cardBukidnon").show();
        }else if (select_province==18){
          $("#cardCamiguin").show();
        }else if (select_province==35){
          $("#cardLanaoDelNorte").show();
        }else if (select_province==42){
          $("#cardMisamisOccidental").show();
        }else if (select_province==43){
          $("#cardMisamisOriental").show();
        }
      }
</script>
</body>
</html>