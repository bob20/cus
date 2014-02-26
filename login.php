<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 26.02.14
 * Time: 10:34
 */

include_once 'include/db_connect.php';
include_once 'include/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secure Login: Log In</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/form.js"></script>
</head>
<body>
<?php
if (isset($_GET['error'])) {
    echo '<p class="error">Error Logging In!</p>';
}
?>
<img src="pic/cus.jpg" alt=""/>

<form action="include/process_login.php" method="post" name="login_form">
    Email: <input type="text" name="email" />
    Password: <input type="password"
                     name="password"
                     id="password"/>
    <input class="btn-default btn-success" type="button"
           value="Login"
           onclick="formhash(this.form, this.form.password);" />
</form>

<p>If you are done, please <a href="include/logout.php">log out</a>.</p>
<p>You are currently logged <?php echo $logged ?>.</p>
</body>
</html>