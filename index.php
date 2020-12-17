<?php
    session_start();
?>

<html>
    <head>
        <title>Ionut_e_BO$$</title>
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/about.css" />
        <link rel="stylesheet" href="css/home.css" />
        <link rel="stylesheet" href="css/signup.css" />
        <link rel="stylesheet" href="css/shop.css" />
    </head>
    <body>
        <div class="container">
        <div class="header_wrapper">
            <div class="account_bar">
                <div class="text_right">
                    <p class="text_account_bar">
                        <?php

                        if(isset($_SESSION["useruid"])) {

                            echo "<a href='index.php?p=profile' >Profile Page </a>";
                            echo "&#149 ";
                            echo "<a href='includes/logout.inc.php' >Log Out </a>";
                        }
                        else {

                            echo "<a href='index.php?p=login'>Log in </a>";
                            echo "&#149 ";
                            echo "<a href='index.php?p=signup'>Create Account </a>";
                        }

                        ?>
                    </p>
                </div>
            </div>
            <header class="banner" role="banner">
                <div class="links">
                    <ul class="navigator">
                        <li class="logo" style="float:left"><a href="#"><img src="#" alt="logo"/></a></li>
                        <li><a href="index.php?p=home">Home</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="index.php?p=about">About</a></li>
                        <li><a href="index.php?p=shop">Shop</a></li>
                    </ul>
                </div>
            </header>
        </div>

            <div class="main">
                
                <!-- Aicia nu faceti nimic va jucati cu restul ca asta e important si vine 
                facut cu php (specificat special pt Ionut si Jeff hackerul si Maria curva. Futu-ti mortii ma-tii Jeff daca citesti)(Sa ma pis pe voi de neexperimentati)--> 
                <?php 
                    if(isset($_GET['p']))
                        switch ($_GET['p']){
                            case 'home':
                                require("pagini/home.php");
                            break;

                            case 'shop':
                                require("pagini/shop.php");
                            break;

                            case 'about':
                                require("pagini/about.php");
                                
                            break;

                            case 'contact':
                                require("pagini/contact.php");

                            break;

                            case 'signup':
                                require("pagini/signup.php");

                            break;

                            case 'login':
                                require("pagini/login.php");
                                

                        }
                    else
                        require("pagini/home.php");
                ?>
            </div>
            
            <div class="down">
                <table class="about_down">
                    <tr class="about_title">
                        <td>Magazin</td>
                        <td>Informatii</td>
                        <td>Ajutor</td>
                    </tr>
                    <tr class="about_link">
                        <td>
                            <a href="#"></a>
                        </td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr class="about_link">
                        <td>
                            <a href="#"></a>
                        </td>
                        <td><a href="#"></a></td>
                    </tr>
                    <tr class="about_link">
                        <td>
                            <a href="#"></a>
                        </td>
                    </tr>
                </table>
                <p class="disclaimer">In case of injury, harm, fire, murders, infections, robots atack, death, fatal injury and Elena Luta we don't take responsability, in the 100000 pages of terms and servicies it is mentiond that you will deal whit it on your own, we will sue if you trie to pin it on us</p>
            </div>
        </div>
        <script type="text/javascript" src="js/script.js" ></script>
    </body>
</html>