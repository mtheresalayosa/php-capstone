<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Shop: Let’s order fresh items for you.</title>

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
        $("form").submit(function(event) {
            event.preventDefault();
            return false;
        });
        /* prototype add */
        $(".signup_btn").click(function() {
            window.location.href = "catalogue.html";
        });
    });
</script>
<body>
    <div class="wrapper">
        <a href="/"><img src="../assets/images/home_furnish_logo_text.svg" alt="Home Furnish Store"></a>
        <form action="process.php" method="post">
            <h2>Signup to order</h2>
            <a href="login">Already a member? Login here.</a>
            <ul>
                <li>
                    <input type="text" name="first_name">
                    <label>First Name</label>
                </li>
                <li>
                    <input type="text" name="last_name">
                    <label>Last Name</label>
                </li>
                <li>
                    <input type="email" name="email">
                    <label>Email</label>
                </li>
                <li>
                    <input type="password" name="password">
                    <label>Password</label>
                </li>
                <li>
                    <input type="password" name="confirm_password">
                    <label>Confirm Password</label>
                </li>
            </ul>
            <button class="signup_btn" type="submit">Signup</button>
            <input type="hidden" name="action" value="signup">
        </form>
    </div>
</body>
</html>
