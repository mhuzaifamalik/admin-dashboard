<!DOCTYPE html>
<html>

<head>
  <title> Login Dashboard - US Doors Direct </title>
  <meta charset="UTF-8">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
  <?php include 'includes/css-links.php';?>
</head>

<body>
  <section class="login-wrapper">
    <div class="row g-0 align-items-center auth-row">
      <div class="col-lg-6 col-12">
        <div class="featured-content">
          <img class="login-img" src="images/login-img.png" alt="">
          <h3 class="theme-h3">Welcome to US Doors Direct</h3>
          <p class="theme-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="login-content">
          <div class="top-bar">
            <img class="brand img-fluid" src="images/logo.png" alt="">
            <a href="/usdoorsdev/" class="website-link">Back to Website</a>
          </div>
          <div class="form-content">
          <h2 class="theme-h2">Login to your account</h2>
            <form action="" method="POST">
              <div class="row g-4 align-items-center">
                <div class="col-12">
                  <div class="input-field">
                    <h6 class="card-inner-h6">Email Address *</h6>
                    <input name="email" type="email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="input-field">
                    <h6 class="card-inner-h6">Password *</h6>
                    <input name="password" type="password">
                    <button type="button" class="toggle-password"><i class="fa-solid fa-eye"></i></button>
                  </div>
                </div>
                <div class="col-6">
                  <button type="submit" class="theme-btn">Log In</button>
                </div>
                <div class="col-6">
                  <a href="javascript:;" class="forgot-password">Forgot Password?</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'includes/footer.php';?>
  <?php include 'includes/script-links.php';?>
</body>

</html>