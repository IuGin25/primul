<html>
    <head>
        <title>Ionut_e_BO$$</title>
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/about.css" />
        <link rel="stylesheet" href="css/home.css" />
    </head>
    <body>
        <div class="container">
            <div class="menu" id = "menu">
                <table class="tabel_menu">
                    <tr>
                        <td class="about"><a href="index.php?p=about" class="text_menu">About</a></td>
                        <td class="home"><a href="index.php?p=home" class="text_menu">Home</a></td>
                        <td rowspan=2><a href="http://localhost/primul/"><img src='poze/Screenshot_62.png' class="logo" onmouseover="titlu.style.color='cornflowerblue'" onmouseout="titlu.style.color = 'white'"/></a></td>
                        <td class="shop"><a href="index.php?p=shop" class="text_menu">Shop</a></td>
                        <td class="contact"><a href="index.php?p=contact" class = "text_menu">Contact</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="logo_text"><a href = "http://localhost/primul/" class="logo_menu_text" id="titlu" onmouseover="this.style.color ='cornflowerblue'" onmouseout="this.style.color ='white'">Dizonaurii lu Gica</a></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>

            <div class="main">
                
                <!-- Aicia nu faceti nimic va jucati cu restul ca asta e important si vine facut cu php (specificat special pt Ionut si Jeff hackerul si Maria curva. Futu-ti mortii ma-tii Jeff daca citesti)--> 
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