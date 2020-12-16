<!doctype html>

<html lang="en">
  <head>
    <!--
      XSS -- Cross-site Scripting Prevention
      Notice the h() function in the PHP echo statment. This function wraps the PHP function 
      htmlspecialchars() around the $page_title. This prevents XSS (Cross-site Scripting).
      This function is in the functions.php file
    -->
    <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>

    <header>
      <h1>
        <!-- 
          the url_for function is a utility function that Mr. Skoglund built.
          It is in the functions.php file. 
        -->
        <a href="<?php echo url_for('/index.php'); ?>">
          <img class="bike-icon" src="<?php echo url_for('/images/tufted-titmouse.jpg') ?>" /><br />
          WNC Birds
        </a>
      </h1>
      <p style="display: inline-block; font-size: 1.25rem;"><a style="color: #000;" href="<?php echo url_for('/bird-staff/login.php'); ?>">Login</a></p>
      <p style="display: inline-block; margin-left: 1rem; font-size: 1.25rem;"><a style="color: #000;" href="<?php echo url_for('/signup.php'); ?>">Sign Up</a></p>

    </header>
