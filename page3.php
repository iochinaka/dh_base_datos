<!DOCTYPE html>

<?php
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$utm_campaign = $_GET["utm_campaign"];
$utm_term = $_GET["utm_term"];
$utm_source = $_GET["utm_source"];
$utm_medium = $_GET["utm_medium"];
$utm_content = $_GET["utm_content"];
?>

<html>
    <head>
        <meta charset="utf-8">
        <Title>Mainpage</Title>
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        
    </head>
    <body>
        <div class="container">
            <header class="header">
                <nav class="logo">
                    <a href="">logo</a>
                </nav>
                <nav class="login">
                    login
                </nav>
                <nav class="navigation">
                    <ul>
                        <li><a href="index.php">index</a></li>
                        <li><a href="page2.php">página 2</a></li>
                        <li><a href="page3.php">página 3</a></li>
                        <li><a href="page4.php">página 4</a></li>
                    </ul>
                </nav> <!--class="navigation"-->
            </header> <!--class="header"-->
            <section class="cuerpo">
                <article class="titulo">
                    <h1>Título</h1>
                </article><!--class="titulo"-->
                <article class="carrousel">
                    Carrousel
                </article> <!--class="carrousel"-->
                <article class="banner">
                    banner
                </article><!--class="banner"-->
                <article class="bloque-izq">
                    bloque-izq
                </article> <!--class="texto"-->
                <article class="bloque-der">
                    Hola! <?php echo $firstname; ?>
                </article> <!--class="texto"-->
            </section> <!--class="cuerpo"-->
            <footer class="footer">
                footer
            </footer> <!--class="footer"-->
        </div> <!-- class="container"-->
    </body>
</html>