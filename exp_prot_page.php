<?php
/**
 * Created by PhpStorm.
 * User: Boris
 * Date: 26.02.14
 * Time: 10:39
 */
include_once 'include/db_connect.php';
include_once 'include/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Secure Login: Protected Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/form.js"></script>
</head>
<body>
<?php if (login_check($mysqli) == true) : ?>
    <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
    <p>
        This is an example protected page.  To access this page, users
        must be logged in.  At some stage, we'll also check the role of
        the user, so pages will be able to determine the type of user
        authorised to access the page.
    </p>
    <p>Return to <a href="login.php">login page</a></p>
<?php else : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
    </p>
<?php endif; ?>
</body>
</html>