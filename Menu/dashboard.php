<?php  
//Header 
session_start();
include '../Server/connection.php'; //Database Connection
include 'time.php'; //Menentukan Waktu
include 'source.php'; //URL DATA JSON
if (!isset($_SESSION['PHPSESSID'])) {
  header('location: /Menu');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Poco Queue Dashboard</title>
    
    <link rel="stylesheet" href="/Assets/css/google-font_family.css">
    <link rel="stylesheet" href="/Assets/css/icon.css">
    <link rel="stylesheet" href="/Assets/css/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="/Assets/css/dashboard.css">
    <link rel="stylesheet" href="/Assets/css/bootstrap.min.css">
    <script src="/Assets/js/bootstrap.min.js"></script>
    <script src="/Assets/js/jquery.min.js"></script>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <!--  START HEADER MENU -->
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Bridging Lokadok Omnicare</span>
        </div>
      </header>
      <!--  END HEADER MENU -->
      
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <!--  START HEADER PROFILE -->
        <header class="demo-drawer-header">
          <img src="/Assets/img/poco_logo.png" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php echo $_SESSION['user_active']; ?></span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item"><i class="material-icons">logout</i><a href="logout">Log Out</a></li>
            </ul>
          </div>
        </header>
        <!--  END HEADER PROFILE -->
        <!--  START HEADER MENU -->
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>User Account</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Forums</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Pengaturan</a>
        </nav>
      </div>
      <!--  END HEADER MENU -->
      <main class="mdl-layout__content mdl-color--grey-100" >
        <div class="mdl-grid demo-content" >
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid" style="border-radius: 50px; border: 5px solid #73AD21;">
            <svg  height="50px" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <?php include 'info_pasien.php'; ?>
            </svg>
          </div>
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid" style="border-radius: 50px;">
            <svg  height="50px" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <?php include 'panel_pasien.php'; ?>
            </svg>
          </div>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script>
  var button = document.createElement('button');
  var textNode = document.createTextNode('Click Me!');
  button.appendChild(textNode);
  button.className = 'mdl-button mdl-js-button mdl-js-ripple-effect';
  componentHandler.upgradeElement(button);
  document.getElementById('container').appendChild(button);
</script>
</body>
</html>