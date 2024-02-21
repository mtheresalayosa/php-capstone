<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Mart: Get your daily needs online!</title>

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/home-furnish-small-icon.ico')?>" type="image/x-icon">

    <script src="<?php echo base_url('assets/js/vendor/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/bootstrap-select.min.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/bootstrap-select.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom/global.css')?>">
    <script src="<?php echo base_url('assets/js/global/dashboard.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom/signup.css')?>">
</head>
<script>
    $(document).ready(function() {
        $("input[name=email]").focus();
        $("form").submit(function(event) {
            event.preventDefault();
            return false;
        });
        /* prototype add */
        $(".login_btn").click(function() {
            window.location.href = "catalogue.html";
        });
    });
</script>
<body>
    <div class="wrapper">
        <a href="/"><img src="../assets/images/home_furnish_logo_text.svg" alt="Home Furnish Store"></a>
        <form action="../process/process.php" method="post" class="login_form">
            <h2>Member Login</h2>
            <a href="signup">New Member? Register here.</a>
            <ul>
                <li>
                    <input type="text" name="email">
                    <label>Email</label>
                </li>
                <li>
                    <input type="password" name="password">
                    <label>Password</label>
                </li>
            </ul>
            <button type="submit" class="login_btn">Login</button>
            <input type="hidden" name="action" value="login">
        </form>
    </div>
</body>
</html>
