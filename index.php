<?php
include_once 'configs/app_config.php';
session_start();
require_once("configs/db_config.php");
if (isset($_SESSION["uid"])) header("location:home");
//require_once("library/classes/system_log.class.php");

if (isset($_POST["btnSignIn"])) {

  $username = trim($_POST["txtUsername"]);
  $password = trim($_POST["txtPassword"]);



  //echo $username," ",$password;
  //$result=$db->query("select u.id,u.username,r.name from {$tx}users u,{$tx}roles r where r.id=u.role_id and u.username='$username' and u.password='$password'");
  $result = $db->query("select u.id,u.name,u.password,u.email,u.photo,u.phone,u.role_id,r.name role from users u, roles r where r.id=u.role_id and u.username='$username'");

  $user = $result->fetch_object();
  if ($user && password_verify($password, $user->password)) {

    $_SESSION["uid"] = $user->id;
    $_SESSION["uname"] = $user->name;
    $_SESSION["uphoto"] = $user->photo;
    $_SESSION["email"] = $user->email;
    $_SESSION["phone"] = $user->phone;
    $_SESSION["role_id"] = $user->role_id;
    $_SESSION["urole"] = $user->role;

    header("location:home");
  } else {
    echo "Incorrect username or password";
  }



  //  $now=date("Y-m-d H:i:s");
  //  $log=new System_log("","LOGIN","Successfully logged in user : $uid-$_username",$now);
  //  $log->save();



}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Kanakku - Invoice and Billing Management Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Kanakku is a Sales, Invoices & Accounts Admin template for Accountant or Companies/Offices with various features for all your needs. Try Demo and Buy Now.">
  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
  <meta name="author" content="Dreams Technologies">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= $base_url ?>/assets/img/favicon.png">

  <!-- Apple Touch Icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $base_url ?>/assets/img/apple-touch-icon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">

  <!-- Tabler Icon CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/plugins/tabler-icons/tabler-icons.min.css">

  <!-- Iconsax CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/iconsax.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css">

</head>

<body class="bg-white">

  <!-- Begin Wrapper -->
  <div class="main-wrapper auth-bg">

    <!-- Start Content -->
    <div class="container-fuild">
      <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">

        <!-- start row -->
        <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
          <div class="col-lg-4 mx-auto">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="d-flex justify-content-center align-items-center">
              <div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
                <div class=" mx-auto mb-5 text-center">
                  <img src="<?= $base_url ?>/assets/img/logo.svg" class="img-fluid" alt="Logo">
                </div>
                <div class="card border-0 p-lg-3 shadow-lg">
                  <div class="card-body">
                    <div class="text-center mb-3">
                      <h5 class="mb-2">Sign In</h5>
                      <p class="mb-0">Please enter below details to access the dashboard</p>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Username</label>
                      <div class="input-group">
                        <span class="input-group-text border-end-0">
                          <i class="isax isax-sms-notification"></i>
                        </span>
                        <input type="text" value="" name="txtUsername" class="form-control border-start-0 ps-0" placeholder="Enter Email Address">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <div class="pass-group input-group">
                        <span class="input-group-text border-end-0">
                          <i class="isax isax-lock"></i>
                        </span>
                        <span class="isax toggle-password isax-eye-slash"></span>
                        <input type="password" class="pass-inputs form-control border-start-0 ps-0" name="txtPassword" placeholder="****************">
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-md mb-0">
                          <input class="form-check-input" id="remember_me" type="checkbox">
                          <label for="remember_me" class="form-check-label mt-0">Remember Me</label>
                        </div>
                      </div>
                      <div class="text-end">
                        <a href="forgot-password.html">Forgot Password</a>
                      </div>
                    </div>
                    <div class="mb-1">
                      <button type="submit" name="btnSignIn" class="btn bg-primary-gradient text-white w-100">Sign In</button>
                    </div>
                    <div class="login-or">
                      <span class="span-or">Or</span>
                    </div>
                    <div class="mb-3">
                      <div class="d-flex align-items-center justify-content-center flex-wrap">
                        <div class="text-center me-2 flex-fill">
                          <a href="javascript:void(0);"
                            class="br-10 p-1 btn btn-light d-flex align-items-center justify-content-center">
                            <img class="img-fluid m-1" src="<?= $base_url ?>/assets/img/icons/facebook-logo.svg" alt="Facebook">
                          </a>
                        </div>
                        <div class="text-center me-2 flex-fill">
                          <a href="javascript:void(0);"
                            class="br-10 p-1 btn btn-light d-flex align-items-center justify-content-center">
                            <img class="img-fluid m-1" src="<?= $base_url ?>/assets/img/icons/google-logo.svg" alt="Google">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <h6 class="fw-normal fs-14 text-dark mb-0">Don’t have an account yet?
                        <a href="register.html" class="hover-a"> Register</a>
                      </h6>
                    </div>
                  </div><!-- end card body -->
                </div><!-- end card -->
              </div>
            </form>
          </div><!-- end col -->
        </div>
        <!-- end row -->

      </div>
    </div>
    <!-- End Content -->

  </div>
  <!-- End Wrapper -->

  <!-- jQuery -->
  <script src="<?= $base_url ?>/assets/js/jquery-3.7.1.min.js" type="caacf155406506f346067969-text/javascript"></script>

  <!-- Bootstrap Core JS -->
  <script src="<?= $base_url ?>/assets/js/bootstrap.bundle.min.js" type="caacf155406506f346067969-text/javascript"></script>

  <!-- Custom JS -->
  <script src="<?= $base_url ?>/assets/js/script.js" type="caacf155406506f346067969-text/javascript"></script>

  <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="caacf155406506f346067969-|49" defer></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9850bdebfae9ba50","version":"2025.9.1","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

</html>