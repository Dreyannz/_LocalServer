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
      <meta property="og:url" content="<?php echo url();?>/">
      <meta property="og:title" content="DA Region 10 | RSBSA">
      <meta property="og:description" content="Registry System for Basic Sectors in Agriculture | Department of Agriculture Regional Field Office 10">
      <meta property="og:image" content="<?php echo url();?>/assets/img/DA-meta-tags.png">

      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="<?php echo url();?>/">
      <meta property="twitter:title" content="DA Region 10 | RSBSA">
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
    <button class="btn" onclick="home()" id="Home" title="Home" style="display:none"><i class="fas fa-home" ></i></button>
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div style="background: #26a042;" class="modal-content">
          <div class="modal-header modal-header1" >
            <h3 class="modal-title" >DATA PRIVACY POLICY</h3>
            <button type="button" class="btn btn-success btn-sm close" data-dismiss="modal" aria-label="Close" ><i class="fas fa-times"></i></button>
          </div>
          <div class="modal-body modal-body1">
            <p  class="text-justify">The collection of personal information is for documentation, planning, reporting and processing purposes in availing agricultural related interventions. Processed data shall only be shared to partner agencies for planning, reporting and other use in accordance to the mandate of the agency. You have the right to ask for a copy of your personal data that we hold about you as well as to ask for it to be corrected if you think it is wrong.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="media mt-3">
              <div class="align-self-center mr-3">
                <div class="text-center">
                  <img class="rounded-circle shadow" id="mImg" width="200" height="200">
                </div>
                <input type="text" readodnly disabled class="form-control-plaintext text-center font-weight-bold mt-2" id="mRSBSA" value="">
              </div>
              <div class="media-body">
                <div class="row">
                  <label class="col-sm-4 col-form-label">Full Name</label>
                  <div class="col-sm-8">
                    <input type="text" readodnly disabled class="form-control-plaintext" id="mFullname" value="">
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-4 col-form-label">Gender</label>
                  <div class="col-sm-8">
                    <input type="text" readodnly disabled class="form-control-plaintext" id="mGender" value="">
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-4 col-form-label">Birthdate</label>
                  <div class="col-sm-8">
                    <input type="text" readodnly disabled class="form-control-plaintext" id="mBday" value="">
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-4 col-form-label">Encoder</label>
                  <div class="col-sm-8">
                    <input type="text" readodnly disabled class="form-control-plaintext" id="mEncoder" value="">
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-4 col-form-label">Date Encoded</label>
                  <div class="col-sm-8">
                    <input type="text" readodnly disabled class="form-control-plaintext" id="mDate" value="">
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-4 col-form-label">Updated By</label>
                  <div class="col-sm-8">
                    <input type="text" readodnly disabled class="form-control-plaintext" id="mUpdater" value="">
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-4 col-form-label">Date Updated</label>
                  <div class="col-sm-8">
                    <input type="text" readodnly disabled class="form-control-plaintext" id="mDateUpdated" value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-5">
                <button class="btn btn-success btn-block mProfile"><i class="far fa-user-circle"></i> Open Profile</button>
              </div>
              <div class="col-sm-5">
                <button class="btn btn-success btn-block mDocs"><i class="far fa-file-image"></i> Open Docs</button>
              </div>
              <div class="col-sm-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mypopup1" id="loadingPops" style="display: none;">
      <div id="container1">
        <div class="loader"><img class="rounded-circle" src="assets/Logo/Logo_DA.png" width="180" height="180"></div>
      </div>
    </div>
    <div class="errorpop" id="errorPops" onclick="errorPopsClose();" style="display: none;">
      <div>
        <img  src="assets/Logo/error.png" width="180" height="180">
        <h2 style="color:#000000">FFRS Server Down.</h2>
      </div>
    </div>
    <body style="background: #ffffff">
      <div class="mr-5 ml-5 mb-5 mt-5" id="header">
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
            <p class="text-center mt-2">Made with 💖</p>
          </div>
          <div class="col-9">
            <div class="card border-success shadow">
              <div class="card-body">
                <h4 class="card-text font-weight-bold">Registry System for Basic Sectors in Agriculture (RSBSA)</h4>
                <h6 class="card-subtitle text-muted">The RSBSA is an electronic compilation of basic information of farmers, farm workers, fishers, and other target agriculture-related beneficiaries of the Department of Agriculture (DA).</h6>
              </div>
            </div>
            <div class="card border-success shadow mt-3">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="text-truncate">TOTAL</h6>
                    <h4 class="font-weight-bold count" id="countTotal">0</h4>
                  </div>
                  <div class="col">
                    <h6 class="text-truncate">BUKIDNON</h6>
                    <h4 class="font-weight-bold count" id="countBukidnon">0</h4>
                  </div>
                  <div class="col">
                    <h6 class="text-truncate">CAMIGUIN</h6>
                    <h4 class="font-weight-bold count" id="countCamiguin">0</h4>
                  </div>
                  <div class="col">
                    <h6 class="text-truncate">LANAO DEL NORTE</h6>
                    <h4 class="font-weight-bold count" id="countLanaoDelNorte">0</h4>
                  </div>
                  <div class="col">
                    <h6 class="text-truncate">MISAMIS OCCIDENTAL</h6>
                    <h4 class="font-weight-bold count" id="countMisamisOccidental">0</h4>
                  </div>
                  <div class="col">
                    <h6 class="text-truncate">MISAMIS ORIENTAL</h6>
                    <h4 class="font-weight-bold count" id="countMisamisOriental">0</h4>
                  </div>
                </div>
                <p class="card-subtitle text-muted text-right rsbsaData" id="dateStamp">~</p>
              </div>
            </div>
            <div class="card border-success shadow mt-3">
              <div class="card-body" id="messageBody">

              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <button type="button" style="color:black;" class="btn btn-outline-success btn-block shadow farmerDatabase"><i class="fas fa-tractor"></i> Farmer Database</button>
                <button type="button mt-3" style="color:black;" class="btn btn-outline-success btn-block shadow deduplication"><i class="fas fa-clone"></i> Deduplication</button>
              </div>
              <div class="col">
                <button type="button" style="color:black;" class="btn btn-outline-success btn-block shadow rsbsaTeam"><i class="fas fa-users"></i> RSBSA Team</button>
                <div class="row">
                  <div class="col mt-2">
                    <button type="button" style="color:black;" class="btn btn-outline-success btn-block shadow rsbsaOutput"><i class="fas fa-keyboard"></i> Encoders' Output</button>
                  </div>
                  <div class="col mt-2">
                    <button type="button" style="color:black;" class="btn btn-outline-success btn-block shadow outputIndividual"><i class="fas fa-keyboard"></i> Encoded List</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="database" style="display: none;">
        <button onclick="topFunction()" id="toTheTop" title="Go to top"><i class="fas fa-chevron-up"></i></button>
        <div class="row justify-content-md-center mt-5">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row justify-content-md-center">
              <div class="col-md-9">
                <div class="form-group">
                  <input type="text" class="form-control" id="Keyword" autocomplete="off" placeholder="Keyword/Geocode" style="border-color: #26a042;background: transparent;color: #000000;">
                </div>
              </div>
              <div class="col-md-3">
                <button class="btn btn-success btn-block generateData" id="generateData">Generate Data</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md">
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
              <div class="col-md">
                <div class="input-group mb-3 ">
                  <select class="select form-control" type="text" id="select_municipality" onchange="changeBarangay();showOpt();" style="border-color: #26a042;background: transparent;color: #000000">
                  </select>
                </div>
              </div>
              <div class="col-md">
                <div class="input-group mb-3 ">
                  <select class="select form-control" type="text" id="select_barangay" onchange="showOpt();" style="border-color: #26a042;background: transparent;color: #000000;">
                  </select>
                </div>
              </div>
              <div class="col-md">
                <select class="form-control" type="text" id="select_source" style="border-color: #26a042;background: transparent;color: #000000">
                  <option style="background: #FFFFFF;" value="0" disabled>FFRS Data [Validation]</option>
                  <option style="background: #FFFFFF;" selected="selected" value="1">FFRS Data [Data Check]</option>
                  <option style="background: #FFFFFF;" value="2">Locally Saved Data</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
        <div id="results" class="justify-content-md-center mt-2 ml-2 mr-2 mb-2" style="display: none;">
          <table id="example" class="table table-borderless table-responsive-sm mt-5" style="width:100%;">
            <thead>
              <tr id="headerss">
                <th class="noWrap">RSBSA No.</th>
                <th class="noWrap">SysGen No.</th>
                <th></th>
                <th class="noWrap">Last Name</th>
                <th class="noWrap">First Name</th>
                <th class="noWrap">Middle Name</th>
                <th class="noWrap">Ext</th>
                <th class="noWrap">Encoder</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <!-- WEBSITE SCRIPTS-->
      <script type="text/javascript">
        $(document).ready(function(){
          loadReports();
          loadMessage();
          $(".deduplication").on('click', function(event){
            window.open('dedup','_blank');
          });
          $(".rsbsaTeam").on('click', function(event){
            window.open('rsbsa','_blank');
          });
          $(".rsbsaOutput").on('click', function(event){
            window.open('output','_blank');
          });
          $(".rsbsaData").on('click', function(event){
            window.open('data','_blank');
          });
          $(".outputIndividual").on('click', function(event){
            window.open('myOutput','_blank');
          });
          $(".generateData").on('click', function(event){
            filterData();
          });

          $('#example thead tr')
          .clone(true)
          .addClass('filters')
          .appendTo('#example thead');
          $('#example tbody').on('click', '.info', function() {
            $(this).closest('tr').css({
              'background-color': '#000000',
              'color': '#ffffff',
            }).siblings('tr').css({
              'background-color': '#ffffff',
              'color': '#000000',
            });
            var row = $(this).closest('tr');
            $('#mRSBSA').val(table.row(row).data().rsbsa_no);
            $("#mImg").attr("src",'https://ffrs1.da.gov.ph/uploads/photo/'+table.row(row).data().img);
            $('#mFullname').val(table.row(row).data().fullname);
            $('#mGender').val(table.row(row).data().sex);
            $('#mBday').val(table.row(row).data().birthday);
            if(table.row(row).data().encoder_fullname!=null){
              $('#mEncoder').val('[' + table.row(row).data().encoder_agency + '] ' + table.row(row).data().encoder_fullname);
            }else{
              $('#mEncoder').val('[' + table.row(row).data().encoder_agency + '] NFFIS');
            }
            $('#mDate').val(table.row(row).data().date_created);
            $('#mUpdater').val(table.row(row).data().encoder_fullname_updated);
            $('#mDateUpdated').val(table.row(row).data().date_updated);
            $('#exampleModalCenter').modal('show');
          });

          $('#example tbody').on('click', '.controlNo', function() {
           $(this).closest('tr').css({
            'background-color': '#000000',
            'color': '#ffffff',
          }).siblings('tr').css({
            'background-color': '#ffffff',
            'color': '#000000',
          });
          var row = $(this).closest('tr');
          var data = table.row(row).data().control_no;
          copyToClipboard(data);
        });
          $('#example tbody').on('click', '.rsbsaNo', function() {
           $(this).closest('tr').css({
            'background-color': '#000000',
            'color': '#ffffff',
          }).siblings('tr').css({
            'background-color': '#ffffff',
            'color': '#000000',
          });
          var row = $(this).closest('tr');
          var data = table.row(row).data().rsbsa_no;
          copyToClipboard(data);
        });
          $('#example tbody').on('click', '.profile', function() {
            $(this).closest('tr').css({
              'background-color': '#000000',
              'color': '#ffffff',
            }).siblings('tr').css({
              'background-color': '#ffffff',
              'color': '#000000',
            });
            var row = $(this).closest('tr');
            var data = table.row(row).data().rsbsa_no;
            window.open('https://ffrs1.da.gov.ph/Farmers/view_profile/' + data, '_blank');
          });
          $('#example tbody').on('click', '.getDuped', function() {
           $(this).closest('tr').css({
            'background-color': '#000000',
            'color': '#ffffff',
          }).siblings('tr').css({
            'background-color': '#ffffff',
            'color': '#000000',
          });
          var row = $(this).closest('tr');
          var data = table.row(row).data().rsbsa_no;
          $.getJSON('dedupFind?q='+data, function(data){
            for (let index = 0; index < data.duplicates.length; index++) {
              window.open('https://ffrs1.da.gov.ph/Farmers/view_profile/' + data.duplicates[index], '_blank');
            }
          })
        });
          $('#example tbody').on('click', '.getFiles', function() {
           $(this).closest('tr').css({
            'background-color': '#000000',
            'color': '#ffffff',
          }).siblings('tr').css({
            'background-color': '#ffffff',
            'color': '#000000',
          });
          var row = $(this).closest('tr');
          var data = table.row(row).data().rsbsa_no;
          $.getJSON('dedupFind?q='+data, function(data){
            for (let index = 0; index < data.duplicates.length; index++) {
              window.open('https://ffrs1.da.gov.ph/View_document/rsbsa_form/' + data.duplicates[index], '_blank');
            }
          })
        });
          $('#example tbody').on('click', '.docs', function() {
            $(this).closest('tr').css({
              'background-color': '#000000',
              'color': '#ffffff',
            }).siblings('tr').css({
              'background-color': '#ffffff',
              'color': '#000000',
            });
            var row = $(this).closest('tr');
            var data = table.row(row).data().rsbsa_no;
            window.open('https://ffrs1.da.gov.ph/View_document/rsbsa_form/' + data, '_blank');
          });
          $(".mProfile").on('click', function(event) {
            data = $('#mSysgen').text();
            window.open('https://ffrs1.da.gov.ph/Farmers/view_profile/' + data, '_blank');
          });
          $(".mDocs").on('click', function(event) {
            data = $('#mSysgen').text();
            window.open('https://ffrs1.da.gov.ph/View_document/rsbsa_form/' + data, '_blank');
          });
          $(".farmerDatabase").on('click', function(event) {
            $("#header").hide();
            $("#database").show();
            $("#Home").show();
            var banner = Boolean(<?php echo $dataPrivacyBanner;?>);
            if (banner) {
              $('#modal').modal('show');
            }
          });
        });
function loadMessage() {
  $.getJSON("message.json", function(data){
    console.log(data.status);
    if (data.status=="true") {
      $('#messageBody').empty().append(data.message);
    }else{
      $.getJSON("https://api.quotable.io/random", function(data){
        $('#messageBody').empty().append('<div><h6 class="card-text text-center font-italic">"'+data.content+'"</h6><h6 class="text-center">-'+data.author+'</h6></div');
      });
    }
  })
}
function filterData(){
  loadingPops();
  document.getElementById("results").style.display = 'none';
  lockForms();
  codex = $('#Keyword').val();
  source = $('#select_source option:selected').val();
  table = $('#example').DataTable({
    "destroy": true,
    "orderCellsTop": true,
    "ajax": {
      "url": './api',
      "data" : {
        "q" : codex,
        "m": source,
      },
      "dataSrc": function(data) {
        if (data.data == null||data.data.length == 0) {
          loadingPopsClose();
          errorPops();
          return [];
        } else {
          document.getElementById("results").style.display = 'block';
          loadingPopsClose();
          unlockForms();
          return data.data;
        }
      }

    },
    "columns": [{
      "data": "control_no",
      "className": "controlNo dt-nowrap"
    },
    {
      "data": "rsbsa_no",
      "className": "rsbsaNo dt-nowrap"
    },
    {
      "data": "rffa2_cashout",
      render: function(data, type, full, meta) {
        if (data == "Verified") {
          return '<i class="fas fa-user-check" value="1"></i>';
        }else{
          return ' ';
        }
      }
    },
    {
      "data": "last_name"
    },
    {
      "data": "first_name"
    },
    {
      "data": "middle_name"
    },
    {
      "data": "ext_name"
    },
    {
      "data": "encoder_fullname",
      render: function(data, type, full, meta) {
        if (data != null) {
          var enc_name = data;
          var enc_name_split = enc_name.split(". ");
          var enc_name_firstname = enc_name_split[0].split(" ");
          if (enc_name_firstname.length > 2) {
            var initials = enc_name_firstname[0].charAt(0).toUpperCase() +
            enc_name_firstname[1].charAt(0).toUpperCase() +
            enc_name_firstname[2].charAt(0).toUpperCase() + ' ' +
            enc_name_split[1].toUpperCase();
          } else {
            var initials = enc_name_firstname[0].charAt(0).toUpperCase() +
            enc_name_firstname[1].charAt(0).toUpperCase() + ' ' +
            enc_name_split[1].toUpperCase();
          }
          return initials;
        } else {
          return 'NFFIS';
        }
      }
    },
    {
      "data": null,
      "defaultContent": '<i class="far fa-file-alt"></i>',
      "className": 'info',
      "orderable": false
    }, {
      "data": null,
      "defaultContent": '<i class="far fa-user-circle"/>',
      "className": 'profile',
      "orderable": false
    },
    {
      "data": null,
      "defaultContent": '<i class="far fa-file-image"/>',
      "className": 'docs',
      "orderable": false
    }
    ],
    "columnDefs": [{
      className: "dt-nowrap",
      "targets": [0, 1]
    }],
    "lengthMenu": [
    [15, 25, 50, 100, 300, -1],
    [15, 25, 50, 100, 300, "All"]
    ],
    initComplete: function() {
      var api = this.api();
      api
      .columns()
      .eq(0)
      .each(function(colIdx) {
        var cell = $('.filters th').eq(
          $(api.column(colIdx).header()).index()
          );
        var title = $(cell).text();
        if (title != "") {
          $(cell).html('<input type="text" placeholder="' + title + '" />');
        }
        $(
          'input',
          $('.filters th').eq($(api.column(colIdx).header()).index())
          )
        .off('keyup change')
        .on('keyup change', function(e) {
          e.stopPropagation();

          $(this).attr('title', $(this).val());
          var regexr = '({search})';
          var cursorPosition = this.selectionStart;
          api
          .column(colIdx)
          .search(
            this.value != '' ?
            regexr.replace('{search}', '(((' + this.value +
              ')))') :
            '',
            this.value != '',
            this.value == ''
            )
          .draw();
          $(this)
          .focus()[0]
          .setSelectionRange(cursorPosition, cursorPosition);
        });
      });
    }
  });
}
var toTheTopBotton = document.getElementById("toTheTop");
var toHome = document.getElementById("Home");
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

function popClose(){
  document.getElementById("popups").style.display = 'none';
  $('#database').css({ 'opacity' : 1 });
  $('#notif_header').empty();
  $('#notif_content').empty();
}

function copyToClipboard(text) {
  const elem = document.createElement('textarea');
  elem.value = text;
  document.body.appendChild(elem);
  elem.select();
  document.execCommand('copy');
  document.body.removeChild(elem);
}

function loadingPops() {
  document.getElementById("loadingPops").style.display = 'block';
  $('#database').css({ 'opacity' : 0 });
}

function loadingPopsClose() {
  document.getElementById("loadingPops").style.display = 'none';
  $('#database').css({ 'opacity' : 1 });
}

function errorPops() {
  document.getElementById("errorPops").style.display = 'block';
  $('#database').css({ 'opacity' : 0 });
  unlockForms();
}

function errorPopsClose() {
  document.getElementById("errorPops").style.display = 'none';
  $('#database').css({ 'opacity' : 1 });
}

function lockForms(){
  $("#Keyword").prop('disabled', true);
  $("#generateData").prop('disabled', true);
  $("#select_province").prop('disabled', true);
  $("#select_municipality").prop('disabled', true);
  $("#select_barangay").prop('disabled', true);
  $("#select_source").prop('disabled', true);
}

function unlockForms(){
  $("#Keyword").prop('disabled', false);
  $("#generateData").prop('disabled', false);
  $("#select_province").prop('disabled', false);
  $("#select_municipality").prop('disabled', false);
  $("#select_barangay").prop('disabled', false);
  $("#select_source").prop('disabled', false);
}

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
  }else if ((select_province != null || select_province != 0) && select_municipality == 0 && select_barangay == null) {
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

function loadReports(){
  $.getJSON("reports.json", function(result){
    $('#countTotal').text(result.dataTotal.toLocaleString());
    $('#countBukidnon').text(result.data.bukidnon.toLocaleString());
    $('#countCamiguin').text(result.data.camiguin.toLocaleString());
    $('#countLanaoDelNorte').text(result.data.lanaodelnorte.toLocaleString());
    $('#countMisamisOccidental').text(result.data.misamisoccidental.toLocaleString());
    $('#countMisamisOriental').text(result.data.misamisoriental.toLocaleString());
    $('#dateStamp').text("data as of "+result.dateCreated);
  });
}

function home() {
  $("#header").show();
  $("#database").hide();
  $("#Home").hide();
}
</script>
</body>
</html>