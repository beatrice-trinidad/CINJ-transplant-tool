<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>VillageMED</title>
    <!-- Stylesheets -->
      <link rel="stylesheet" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



  </head>

      <body>

          <nav class="navbar navbar-expand-sm navbar-light bg-white mb-5 shadow-sm">
            <div class="navbar-collapse collapse w-100 order-1 order-sm-0 dual-collapse2">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link back" href="javascript:history.back()"><i class="fa fa-chevron-left mr-2" aria-hidden="true"></i>Back</a>
                </li>
              </ul>
            </div>
            <div class="mx-auto order-0">
            <a href="/ht/public/staff/index.php"><img class="navbar-brand mx-auto" src="<?php echo url_for('/images/vMedLogo.png'); ?>" alt="logo" /></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                  <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle settings" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog mr-2" aria-hidden="true"></i>Settings
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/ht/public/settings.php">Account Settings</a>
                    <a class="dropdown-item" href="/ht/public/staff/pages/statistics.php">Statistics</a>
                    <a class="dropdown-item" href="/ht/public/redirect.php?type=lang"><b><i class="fa fa-commenting-o" aria-hidden="true"></i> Chanje Lang</b></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/ht/public/redirect.php?type=logout">Logout</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
