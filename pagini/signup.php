<section class="signup_form">

    <h2>Sign Up</h2>

    <div class="signup_form_form">
        
    <form action="includes/signup.inc.php" method="post">

        <input type="text" name="uid" placeholder="Username...">
        <input type="text" name="email" placeholder="Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign Up</button>

    </form>

    </div>
    <?php

if(isset($_GET["error"])) {

    if($_GET["error"] == "emptyinput") {

        echo "Pune ba acolo tot!";

    }
    else if($_GET["error"] == "invaliduid") {

        echo "<p>Alege dracu un username bun!</p>";

    }
    else if($_GET["error"] == "invalidemail") {

        echo "<p>Alege dracu un emails bun!</p>";

    }
    else if($_GET["error"] == "passwordsdontmatch") {

        echo "<p>Ai scirs parola gresit nebunule!</p>";

    }
    else if($_GET["error"] == "stmtfailed") {

        echo "<p>Ce dracu s-a intamplat!</p>";

    }
    else if($_GET["error"] == "usernametaken") {

        echo "<p>Ti-a furat numele cinva!</p>";

    }
    else if($_GET["error"] == "none") {

        echo "<p>Ti-ai creat cont pe cel mai bun site din lume!</p>";

    }

}

?>
</section>

