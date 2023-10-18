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
        <div id="liste-oeuvres">
          
            <!--  Début factorisation -->
            <?php include('oeuvres.php');  
            foreach($oeuvres as $oeuvre) {
                echo "<article class='oeuvre'>";
                echo "<a href='oeuvre.php?id=$oeuvre[id]'>";
                echo "<img src={$oeuvre['image']} alt={$oeuvre['alt']}>"; 
                echo "<h2> {$oeuvre['titre']} </h2>";
                echo "<p class='description'> {$oeuvre['artiste']}</p>";
                echo '</a>';
                echo "</article>";
            }
            ?>
            <!-- Fin factorisation -->
          
        </div>
    </main>

    <?php include('footer.php'); ?>
</body>
</html>