<html>
    <head>
    <link rel="stylesheet" href="reset-password.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('img/login_bg3.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
<img src="img/logo.png" alt="Habitracker" height="50">
<div class="loginbox">
        <h1>Reset your password</h1>
        <p>An e-mail will be send to you with instructions on how to reset your password.</p>
        <form action="includes/reset-request.inc.php" method="post">
            <input type="text" name="email" placeholder="Enter your e-mail address...">
            <button type="submit" name="reset-request-submit">Receive new password by e-mail</button>
        </form>
        <?php
            if (isset($_GET["reset"])){
                If ($_GET["reset"] == "success"){
                    echo '<p>Check your e-mail</p>';
                }
            }
        ?>
    </div>
</body>
<?php
    require "footer.php";
?>