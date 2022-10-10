<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE['connected'])) {
            echo "Vous n'êtes pas connecté";
        } else {
            echo "Vous êtes connecté<br>";
            echo "Le token est: " . $_COOKIE['connected'] . "<br>";
        }
        ?>
        <a href="/admin">Retour</a>
    </body>
</html>
