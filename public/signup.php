<?php

// Initialization
require_once('../private/initialize.php');

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['admin'];
  $admin = new Admin($args);
  $result = $admin->save();

  if($result === true) {
    $session->login($admin);
    $session->message('Congratulations on becoming an honarary member of WNC Birds. You may now edit the list of birds.');
    redirect_to(url_for('/bird-staff/index.php'));
  } else {
    // show errors
  }

} else {
  // display the form
  $admin = new Admin;
}

?>

<?php $page_title = 'Sign Up'; ?>
<?php include(SHARED_PATH . '/bird-staff-header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Fill out the form below to become a member.</h2>
    </div>

    <?php echo display_errors($admin->errors); ?>

    <form action="<?php echo url_for('/signup.php'); ?>" method="post">
      <dl>
        <dt>First name</dt>
        <dd><input type="text" name="admin[first_name]" value="<?php echo h($admin->first_name); ?>" /></dd>
      </dl>

      <dl>
        <dt>Last name</dt>
        <dd><input type="text" name="admin[last_name]" value="<?php echo h($admin->last_name); ?>" /></dd>
      </dl>

      <dl>
        <dt>Email</dt>
        <dd><input type="text" name="admin[email]" value="<?php echo h($admin->email); ?>" /></dd>
      </dl>

      <dl>
        <dt>Username</dt>
        <dd><input type="text" name="admin[username]" value="<?php echo h($admin->username); ?>" /></dd>
      </dl>

      <dl>
        <dt>Password</dt>
        <dd><input type="password" name="admin[password]" value="" /></dd>
      </dl>

      <dl>
        <dt>Confirm Password</dt>
        <dd><input type="password" name="admin[confirm_password]" value="" /></dd>
      </dl>

      <div id="operations">
        <input type="submit" value="Become a Member" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
