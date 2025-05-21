<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "customers";
$conn = new mysqli($db_server, $db_user, $db_password, $db_name);

// Get user details
$stmt = $conn->prepare("SELECT * FROM customer WHERE id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="color-modes.js"></script>
    <link rel="stylesheet" href="bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile · Employee System</title>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sidebars.css" rel="stylesheet">
    <style>
      /* Include all your styles from index.php here */
      .logo {
        position: absolute;
        left: 240px;
        top: 3px;
        font-size: 20px;
      }
      .normsidebar {
        width: 280px;
        transition: .3s;
      }
      .small-sidebar {
        width: 75px;
      }
      /* ... other styles ... */
    </style>
  </head>
  <body>
    <!-- Include the same sidebar and theme toggle as index.php -->
    <main class="d-flex flex-nowrap">
      <!-- Sidebar (same as index.php) -->
      <div class="b-example-divider b-example-vr"></div>

      <section class="w-100">
        <nav class="mb-2 navbar bg-body-tertiary">
          <div class="container-fluid bg-primary p-2">
            <a style="color: white;" class="navbar-brand ps-4 fs-3"><i>Profile</i></a>
          </div>
        </nav>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="2.jpg" alt="Profile" class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3"><?php echo htmlspecialchars("Abdallah Zayed"); ?></h5>
                  <p class="text-muted mb-1">Administrator</p>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Username</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo htmlspecialchars("Abdallah Zayed" ); ?></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo htmlspecialchars("Elgharbiya" ); ?></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Telephone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo htmlspecialchars("01030308938" ); ?></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Job</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo htmlspecialchars("Administrator" ); ?></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Country</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo htmlspecialchars("Egypt" ); ?></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo htmlspecialchars("Male" ); ?></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Age</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo htmlspecialchars("23" ); ?></p>
                    </div>
                  </div>
                  <hr>

                  
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo htmlspecialchars('abdallahzayed5@gmail.com'); ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Member Since</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo date('21/5/2025'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="sidebars.js"></script>
    <script>
      // Include the same scripts as index.php
      var toggleSideBar = function() {
        sidebar.classList.toggle("small-sidebar");
      }
    </script>
  </body>
</html>