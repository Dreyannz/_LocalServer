<?php 
header('Access-Control-Allow-Origin: *');

if (isset($_GET['q'])) {
  $geocode = $_GET['q'];
  $exist = false;
  if (file_exists('../KYC/'.$geocode.'.json')) {
    $exist = true;
  }
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
    <meta name="google" content="notranslate">
    <meta name="author" content="DA-RFO 10 | AJ Octat">
    <link rel="icon" href="../assets/Logo/Logo_DA.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RSBSA Validation by AJ Octat">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/fontawesome.min.css">

    <script src="../assets/jquery/jquery-3.6.0.js" ></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css"/>
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
        background: #ffffff;
      }
      ::-webkit-scrollbar-thumb {
        background: #26a042;
        border-radius: 3px;
      }
      input[type=text]:focus,select[type=text]:focus,input[type=number]:focus,input[type=password]:focus,textarea[type=text]:focus,button[type=button]:focus{
        border: 1px solid #dc3545;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
      }
      ::-moz-selection {
        color: #FFFFFF;
        background: #26a042;
      }
      ::selection {
        color: #FFFFFF;
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
      .noWrap{
        white-space: nowrap;
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
      #container {
        width: fit-content;
        height: fit-content;
        background: #26a042;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      #clearFilters {
        position: fixed;
        right: 1rem;
        top: 1rem;
        display: block;
        z-index: 99; 
        border: none; 
        outline: none; 
        width: fit-content;
        height: 2.75rem;
        text-align: center;
        opacity: 1;
        color: #FFFFFF;
        background: #26a042;
        border-radius: 5px;
      }
      #clearFilters:hover {
        background-color: #26a042;
        opacity: 0.7;
      }
    </style>
  </head>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mRSBSA"></h5>
          <h5 class="modal-title" id="mSysgen" hidden></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <label class="col-sm-4 col-form-label">Last Name</label>
            <div class="col-sm-8">
              <input type="text" readodnly disabled class="form-control-plaintext" id="mLastname" value="">
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">First Name</label>
            <div class="col-sm-8">
              <input type="text" readodnly disabled class="form-control-plaintext" id="mFirstname" value="">
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Middle Name</label>
            <div class="col-sm-8">
              <input type="text" readodnly disabled class="form-control-plaintext" id="mMiddlename" value="">
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Ext</label>
            <div class="col-sm-8">
              <input type="text" readodnly disabled class="form-control-plaintext" id="mExtname" value="">
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
            <div class="col-sm-6">
              <button class="btn btn-success btn-block mProfile">Open Profile</button>
            </div>
            <div class="col-sm-6">
              <button class="btn btn-success btn-block mDocs">Open Docs</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mypopup" id="popups" style="display: none;">
    <div id="container">
      <div class="loader"><img class="rounded-circle" src="../assets/Logo/Logo_DA.png" width="180" height="180" ></div>
    </div>
  </div>
  <body style="background: #FFFFFF">
    <button class="btn" onclick="home()" id="Home" title="Home"><i class="fas fa-home"></i></button>
    <button class="btn clearFilters" id="clearFilters" title="Clear Filters"><i class="fas fa-eraser"></i> Clear Filters</button>
    <button onclick="topFunction()" id="toTheTop" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <div >
    <!-- 
        ____                                       
       / __ \________  __  ______ _____  ____  ____
      / / / / ___/ _ \/ / / / __ `/ __ \/ __ \/_  /
     / /_/ / /  /  __/ /_/ / /_/ / / / / / / / / /_
    /_____/_/   \___/\__, /\__,_/_/ /_/_/ /_/ /___/
                    /____/                         
         Script Author: Adrian Jann F. Octat
       -->
       <div class="row justify-content-md-center" >
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h2 class="text-center" id="locationLabel"></h2>
          <h4 class="text-center" id="geocodeLabel"></h4>
          <h6 class="text-center" id="dateLabel"></h6>
        </div>
        <div class="col-md-3"></div>
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
       <div id="results" class="justify-content-md-center" style="margin: 20px;display: none;">
        <table id="example" class="table table-borderless table-responsive-sm" style="width:100%;">
          <thead>
            <tr id="headerss">
              <th>RSBSA No.</th>
              <th>SysGen No.</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Ext</th>
              <th>Encoder</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <!-- WEBSITE SCRIPTS-->
      <script type="text/javascript">
        $(document).ready(function() {
          popShow();
          document.getElementById("results").style.display = 'none';
          if ('<?php $exist;?>') {
            //
          }else{
            LocationLabel('<?php echo $geocode;?>');
            popClose();
          }

          $.fn.dataTable.ext.errMode = 'throw';
          $('#example thead tr')
          .clone(true)
          .addClass('filters')
          .appendTo('#example thead');
          var table = $('#example').DataTable({
            orderCellsTop: true,
            "ajax": '../KYC/' + '<?php echo $geocode;?>' + '.json',
            "columns": [{
              "data": "control_no",
              "className": "controlNo dt-nowrap"
            },
            {
              "data": "rsbsa_no",
              "className": "rsbsaNo dt-nowrap"
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
                    var initials = enc_name_firstname[0].charAt(0).toUpperCase() + enc_name_firstname[1].charAt(0).toUpperCase() + enc_name_firstname[2].charAt(0).toUpperCase() + ' ' + enc_name_split[1].toUpperCase();
                  } else {
                    var initials = enc_name_firstname[0].charAt(0).toUpperCase() + enc_name_firstname[1].charAt(0).toUpperCase() + ' ' + enc_name_split[1].toUpperCase();
                  }
                  return initials;
                } else {
                  return 'NFFIS';
                }
              }
            },{
              "data": null,
              "defaultContent": '<i class="far fa-file-alt"></i>',
              "className": 'info',
              "orderable": false
            },{
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
            },
            ],
            "columnDefs": [
              { className: "dt-nowrap", "targets": [ 0,1 ] }
            ],
            "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
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
                    regexr.replace('{search}', '(((' + this.value + ')))') :
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
              LocationLabel('<?php echo $geocode;?>');
              document.getElementById("results").style.display = 'block';
              popClose();
            },
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
          $('#example tbody').on('click', '.info', function() {
            $(this).closest('tr').css({
              'background-color': '#000000',
              'color': '#ffffff',
            }).siblings('tr').css({
              'background-color': '#ffffff',
              'color': '#000000',
            });
            var row = $(this).closest('tr');
            $('#mRSBSA').text(table.row(row).data().control_no);
            $('#mSysgen').text(table.row(row).data().rsbsa_no);
            $('#mLastname').val(table.row(row).data().last_name);
            $('#mFirstname').val(table.row(row).data().first_name);
            $('#mMiddlename').val(table.row(row).data().middle_name);
            $('#mExtname').val(table.row(row).data().ext_name);
            $('#mGender').val(table.row(row).data().sex);
            $('#mBday').val(table.row(row).data().birthday);
            $('#mEncoder').val('['+table.row(row).data().encoder_agency+'] '+table.row(row).data().encoder_fullname);
            $('#mDate').val(formatDate(formatMonth(table.row(row).data().date_created)));
            $('#exampleModalCenter').modal('show');
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
          $(".mProfile").on('click', function(event){
            data = $('#mSysgen').text();
            window.open('https://ffrs1.da.gov.ph/Farmers/view_profile/' + data, '_blank');
          });
          $(".mDocs").on('click', function(event){
            data = $('#mSysgen').text();
            window.open('https://ffrs1.da.gov.ph/View_document/rsbsa_form/' + data, '_blank');
          });
          $(".clearFilters").on('click', function(event){
            var table = $('#example').DataTable();
            table.search( '' ).draw();
            $('#example thead input').val('').change().blur();
          });
        });
function popShow(header, content, button) {
  document.getElementById("popups").style.display = 'block';
}
function LocationLabel(geocode){
  $.getJSON("../muncity.json", function(data){
    $.each(data, function(key, municipal) {
      if (municipal.geocode == geocode) {
        $('#locationLabel').text(municipal.name+' | '+municipal.province);
        $('#geocodeLabel').text(geocode.toUpperCase());
      }
    });
  })
  $.ajax({
    url: '../KYC/' + '<?php echo $geocode;?>' + '.json',
    dataType: 'json',
    success: function( data ) {
      $('#dateLabel').text('data as of '+data.dateCreated);
    },
    error: function( data ) {
      $('#dateLabel').text('No locally saved data found. contact AJ ASAP.');
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
function popClose() {
  document.getElementById("popups").style.display = 'none';
}
function formatMonth(date){
  eday = date.split(" ");
  split_eday = eday[0].split("-");
  emonth = split_eday[1];
  edate = split_eday[2];
  eyear = split_eday[0];
  return emonth+'-'+edate+'-'+eyear+' '+eday[1];
}
function formatDate(date) {
  var d = new Date(date);
  var hh = d.getHours();
  var m = d.getMinutes();
  var s = d.getSeconds();
  var dd = "AM";
  var h = hh;
  if (h >= 12) {
    h = hh - 12;
    dd = "PM";
  }
  if (h == 0) {
    h = 12;
  }
  m = m < 10 ? "0" + m : m;
  s = s < 10 ? "0" + s : s;
  var pattern = new RegExp("0?" + hh + ":" + m + ":" + s);
  var replacement = h + ":" + m;
  replacement += " " + dd;

  return date.replace(pattern, replacement);
}
function home() {
  window.open('../', "_self");
}
</script>
</body>
</html>