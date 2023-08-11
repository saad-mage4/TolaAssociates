<?php
$check = '';
if (isset($_GET['demo'])) {
  $check = $_GET['demo'];
}

if ($check != 'yes') {
  header('Location: register.php');
}
include_once 'includes/header.php';
include_once 'includes/aside.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-4">
          <div class="site-logo">
            <img src="img/tola_logo.png" alt="tola" class="image-md mx-auto">
          </div>
        </div><!-- /.col -->
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content p-lg-5">
    <div class="container" data-container="1">
      <!-- Main row -->
      <div class="row">
        <div class="col-12 text-center mb-3">
          <h3 class="h1 font-weight-bold">Good evening! Welcome to <?=$title?></h3>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-lg-7 col-md-12 mx-auto">
              <div class="top-heading d-flex flex-column align-items-center border border-2 rounded border-danger p-3">
                <h3 class="font-weight-bold">Your account has been successfully created.</h3>
                <h5 class="font-weight-bold">Few things for your information</h5>
                <ul class="list-unstyled info-list">
                  <li><img src="img/yes.png" class="circle-yes" alt="yes">Your data is private & we intent to keep it that way. We do not share it with anyone</li>
                  <li><img src="img/yes.png" class="circle-yes" alt="yes">You can resume from where you left anytime even after logout</li>
                  <li><img src="img/yes.png" class="circle-yes" alt="yes">You can ask any question from our support through chat or email</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mx-auto my-5">
          <div class="row justify-content-center text-center">
            <div class="col-12">
              <h2 class="font-weight-bold">Let's get acquainted</h2>
              <p class="h5">You know our name, but we don't know yours. Lets change that</p>
              <form action="" class="first-step">
                <div class="form-group">
                  <label for="username">May we know your good name?</label>
                  <input type="text" autocomplete="false" name="username" class="form-control rounded" id="username">
                </div>
                <div class="form-group">
                  <label for="cnic">National Identity Card No. (CNIC)</label>
                  <input type="text" autocomplete="false" name="cnic" class="form-control rounded" id="cnic">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-12 text-right mb-5">
          <a href="#!" class="btn btn-danger next">Continue</a>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container -->

    <div class="container d-none" data-container="2">
      <!-- Main row -->
      <div class="row">
        <div class="col-12">
          <div class="grid-boxes">

            <a href="#!" id="tax-filing">
              <div class="box">
                <div class="logo">
                  <img src="img/citizen_tax_filing.png" alt="logo_img">
                </div>
                <h4>Personal Tax Filing</h4>
              </div>

              <a href="#!" id="ntn-reg">
                <div class="box">
                  <div class="logo">
                    <img src="img/ntn_registration.png" alt="logo_img">
                  </div>
                  <h4>NTN Registration</h4>
                </div>
              </a>

              <a href="#!">
                <div class="box">
                  <div class="logo">
                    <img src="img/family_tax_filing.png" alt="logo_img">
                  </div>
                  <h4>Family Tax Filing</h4>
                </div>
              </a>


              <a href="#!">
                <div class="box">
                  <div class="logo">
                    <img src="img/ntn_finder.png" alt="logo_img">
                  </div>
                  <h4>NTN Finder</h4>
                </div>
              </a>

              <a href="#!">
                <div class="box">
                  <div class="logo">
                    <img src="img/atl_status_finder.png" alt="logo_img">
                  </div>
                  <h4>ATL Status Finder</h4>
                </div>
              </a>

              <a href="#!">
                <div class="box">
                  <div class="logo">
                    <img src="img/iris_profile_update.png" alt="logo_img">
                  </div>
                  <h4>IRIS Profile Update</h4>
                </div>
              </a>

              <a href="#!">
                <div class="box">
                  <div class="logo">
                    <img src="img/business_services.png" alt="logo_img">
                  </div>
                  <h4>Business Incorporation</h4>
                </div>
              </a>

              <a href="#!">
                <div class="box">
                  <div class="logo">
                    <img src="img/sales_tax_filing.png" alt="logo_img">
                  </div>
                  <h4>GST Registration</h4>
                </div>
              </a>

              <a href="#!">
                <div class="box">
                  <div class="logo">
                    <img src="img/service_charges.png" alt="logo_img">
                  </div>
                  <h4>Service Charges</h4>
                </div>
              </a>

          </div>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container -->

    <div class="container render-data" data-container="3">

    </div>
  </section>
  <!-- /.content -->
</div></a>


<?php
include_once 'includes/footer.php';
?>