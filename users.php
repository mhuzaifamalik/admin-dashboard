<!DOCTYPE html>
<html>

<head>
    <title> Dashboard Users - US Doors Direct </title>
  <meta charset="UTF-8">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
  <?php include 'includes/css-links.php';?>
</head>

<body>
  <main>
    <div class="dashboard-wrapper">
      <?php include 'includes/sidebar.php';?>
      <div class="dashboard-content">
        <div class="dashboard-card mt-3">
          <h5 class="theme-h5">All Users</h5>
          <table class="table dashboard-table user-table">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>Admin</td>
                <td>US Doors</td>
                <td>admin@usdoorsdirect.com</td>
                <td>Administrator</td>
              </tr>
              
              <tr>
                <td>Customer</td>
                <td>US Doors</td>
                <td>customer@admin.com</td>
                <td>Customer</td>
              </tr>
              
              <tr>
                <td>Benjamin</td>
                <td>Smith</td>
                <td>testuser@test.com</td>
                <td>Customer</td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
  <?php include 'includes/footer.php';?>
  <?php include 'includes/script-links.php';?>
  <script>

  </script>
</body>

</html>