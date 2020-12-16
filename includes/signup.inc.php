<?php

if(isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInputsSignup($username, $email, $pwd, $pwdrepeat) !== false) {

        header("location: ../index.php?p=signup?error=emptyinput");

        exit();
    }

    if(invalidUid($username) !== false) {

        header("location: ../index.php?p=signup?error=invaliduid");

        exit();
    }

    if(invalidEmail($email) !== false) {

        header("location: ../index.php?p=signup?error=invalidemail");

        exit();
    }

    if(pwdMatch($pwd, $pwdrepeat) !== false) {

        header("location: ../index.php?p=signup?error=pwddontmatch");

        exit();
    }

    if(uidExists($conn, $username, $email) !== false) {

        header("location: ../index.php?p=signup?error=usernametaken");

        exit();
    }

    createUser($conn, $username, $email, $pwd);

}
else {

    header("location: ../index.php?p=signup");
    exit();
}
