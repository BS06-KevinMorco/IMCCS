<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.26/sweetalert2.all.min.js"></script>
<?php include_once('database/config.php'); ?>
<?php session_start() ?>
<?php
include_once('query/login-registration-page/login-query.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#800000">

    <title>IMCCS</title>
    <!-- ====== Header Elements ====== -->
    <?php
    include_once('templates/header.php');
    ?>
    <!-- ====== Header Header Elements End ====== -->
</head>

<body>
    <!-- ====== Header Navigation Bar ====== -->
    <?php
    include_once('templates/navbar.php');
    ?>
    <?php
    include_once('modal/register-student.php');
    ?>
<?php
    include_once('modal/register-institution.html');
    ?>
    <!-- PHP CODE USED FOR LOADING DYNAMICALLY PAGES WITHOUT RELOADING THE WHOLE ROUTE-->

    <?php
    @$page = $_GET['page'];

    if ($page != '') {
        if ($page == "login") {
            include("section-pages/login.php");
        } else if ($page == "forgot-password") {
            include("section-pages/forgot-password/forgot-password.php");
        } else if ($page == "forgot-password-change") {
            include("section-pages/forgot-password/forgot-password.php");
        }
    } else {
        include("section-pages/start-page.php");
        include('templates/footer.php');
    }
    ?>

    <?php include("templates/footer-elements.php"); ?>


    <SCript>
        $(document).ready(function() {
            $('#check').click(function() {
                $(this).is(':checked') ? $('#user-add-password').attr('type', 'text') : $('#user-add-password').attr('type', 'password');
            });
        });

        var togglePassword = document.querySelector("#toggle-password");
        var toggleConfirmPassword = document.querySelector("#toggle-confirm-password");
        var password = document.querySelector("#user-add-password");
        var confirmPassword = document.querySelector("#user-add-confirmpassword");

        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            var type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("fa-eye");
        });

        toggleConfirmPassword.addEventListener("click", function() {
            // toggle the type attribute
            var type = confirmPassword.getAttribute("type") === "password" ? "text" : "password";
            confirmPassword.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("fa-eye");
        });
    </SCript>


</body>

</html>