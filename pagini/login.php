<section class="signup_form">

    <h2>Log In</h2>

    <div class="signup_form_form">
        
    <form action="includes/login.inc.php" method="post">

        <input type="text" name="uid" placeholder="Email/Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Log In</button>

    </form>

    </div>
    <?php

if(isset($_GET["error"])) {

    if($_GET["error"] == "emptyinput") {

        echo "Pune ba acolo tot!";

    }
    else if($_GET["error"] == "wronglogin") {

        echo "<p>Te-ai logat prost, bravo!</p>";

    }

}

?>

</section>