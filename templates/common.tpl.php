<?php declare(strict_types = 1); ?>

<?php function drawHeader() { ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>My Website</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header>
      <h1><a href="/">My Website</a></h1>
      <?php 
        if (isset($_SESSION['id'])) drawLogoutForm($_SESSION['name']);
      ?>
    </header>
  
    <main>
<?php } ?>

<?php function drawFooter() { ?>
    </main>

    <footer>
      My Website &copy; 2023
    </footer>
  </body>
</html>
<?php } ?>

<?php function drawLoginForm() { ?>
  <div class="login-container">
    <form action="action_login.php" method="post" class="login-form">
      <h2>Login</h2>
      <div class="input-group">
        <label for="Email">Email</label>
        <input type="email" id="email" name="email" placeholder="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
<?php } ?>

<?php function drawLogoutForm(string $name) { ?>
  <form action="action_logout.php" method="post" class="logout-form">
    <?=$name?>
    <button type="submit">Logout</button>
  </form>
<?php } ?>