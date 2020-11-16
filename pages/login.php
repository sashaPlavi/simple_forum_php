<?php
require '../partials/header.php';

?>
<main>
  <div class="container">

    <h1>Log in</h1>
    <div class="container  ">

      <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>

          <input id="icon_prefix" type="text" name="username" class="validate" placeholder="Enter Username">

          <label for="icon_prefix">Username</label>
          <div class="error">
            <?php echo $errors['username'] ?? '';  ?>
            <?php echo $errors['dbsearch'] ?? '';  ?>
          </div>
        </div>



        <div class="input-field">
          <i class="material-icons prefix">lock_outline</i>

          <input id="icon_prefix" type="password" name="password" class="validate" placeholder="Enter Password">

          <label for="icon_prefix">Password</label>
          <div class="error">
            <?php echo $errors['password'] ?? '';  ?>
            <?php echo $errors['password_match'] ?? '';  ?>
          </div>
        </div>

        <div class="input-field">



          <div class="error">
            <?php echo $errors['re-password'] ?? '';  ?>
            <?php echo $errors['password_match'] ?? '';  ?>
          </div>
        </div>
        <div class="center">

          <button class="btn waves-effect waves-light" type="submit" name="signup-submit">Signup</button>
        </div>
      </form>
    </div>



  </div>
</main>

<?php
require '../partials/footer.php';
