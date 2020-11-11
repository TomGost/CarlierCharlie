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
                <h1 id="telephone">Carlier Charlie - <span class="bold bigtext">06 67 87 07 04</span></h1>
                <section id="renovationmaison"></section>
                <section id="DevisGarantie">
                    <p class="devis">Devis Gratuit</p>
                    <p class="garantie">Garantie décennale</p>
                </section>
                <section id="servicesligne1" class="services">
                    <p><img src="images/plomberie.svg" alt="Plomberie"><br>Plomberie </p>
                    <p><img src="images/shower.svg" alt="Salle de bain"><br>Aménagement salle de bain</p>
                    <p><img src="images/kitchen.svg" alt="cuisine"><br>Aménagement cuisine</p>
                    <p><img src="images/carrelage.svg" alt="Carrelage"><br>Carrelage</p>
                </section>
                <section id="servicesligne2" class="services">
                    <p><img src="images/parquet.svg" alt="Parquet"><br>Parquet</p>
                    <p><img src="images/spatule.svg" alt="Placo"><br>Placoplatre</p>
                </section>
            </div>
            <?php /* Footer */
                include("footer.php");
            ?>
        </div>
    </body>
</html>