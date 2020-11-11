<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <title>Carlier Charlie Rénovation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div id="page">
            <div id="content">
                <?php /* Header */
                    include("header.php");
                ?>
                <?php /* Menu */
                    include("menu.php");
                ?>
                <section class="onglet" id="titlecontact"><h2>Contact</h2></section>
                <section id="contact">
                    <div class="moyencontact"><h3>Mail :</h3>
                        <p>
                            <a href="mailto:carlier.ccb@gmail.com">carlier.ccb@gmail.com</a>
                        </p>
                    </div>
                    <div class="moyencontact"><h3>Téléphone : </h3>
                        <p><a href="tel:+33667870704">06 67 87 07 04</a></p>
                    </div>
                    <div id="iconescontact" class="moyencontact">
                        <a href="https://www.facebook.com/carliercharlierenovationconseil/">
                            <img src="images/IconeFacebook.svg" alt="Facebook">
                        </a>
                        <a href="mailto:carlier.ccb@gmail.com">
                            <img src="images/Iconemail.svg" alt="Mail">
                        </a>
                        <a href="tel:+33667870704">
                            <img src="images/Icone%20t%C3%A9l%C3%A9phone.png" alt="Téléphone">
                        </a>
                    </div>
                </section>
                <section id="posecarrelage"><img src="images/photo%20pose%20carrelage-compressed.jpg" alt="Photo Carlier Charlie"></section>
            </div>
            <?php /* Footer */
                include("footer.php");
            ?>
        </div>
    </body>
</html>