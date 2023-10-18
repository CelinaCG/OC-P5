<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>The ArtBox</title>
    </head>
    <body>

        <?php include('header.php'); ?>
        <main>
            <?php 
            include('oeuvres.php');
            if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id']<=15)  {
               
                foreach($oeuvres as $oeuvre){
                    if ($oeuvre['id'] == $_GET['id']){
                        echo "<article id='detail-oeuvre'>";
                        echo "<div id='img-oeuvre'> <img src={$oeuvre['image']} alt={$oeuvre['alt']}> </div>";
                        echo "<div id='contenu-oeuvre'>"; 
                        echo "<h1> {$oeuvre['titre']} </h1>";
                        echo "<p class='description'> {$oeuvre['artiste']}</p>";
                        echo "<p class='description-complete'> {$oeuvre['description']}</p>";
                        echo "</div>";
                        echo "</article>";
                    }   
                }
            }         
            ?>
        </main>
        <?php include('footer.php'); ?>

    </body>
</html>



