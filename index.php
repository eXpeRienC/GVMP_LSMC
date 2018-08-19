<?php
/*************************************************************************************************/
/*                                                                                               */
/*    LSMC Verwaltung                                                                            */
/*    - in den kommenden Dokumenten befindet sich der Quellcode für die Verwaltung des LSMC      */
/*    - Es wird möglich sein dich als Benutzer einzuloggen                                       */
/*    - Benutzergruppen bestimmter Art zu bestimmen                                              */
/*    - Neue Benutzer hinzuzufügen                                                               */
/*    - Berechnungen für Beförderungen                                                           */
/*                                                                                               */
/*************************************************************************************************/

session_start(['cookie_lifetime' => 86400]);
// Überprüfe ob Loginsession existiert, wenn nicht erstelle sie mit false
// Dadurch kommt man automatisch zum Login
if(!isset($_SESSION['login'])){
    $_SESSION['login'] = false;
}

include("php/abfrage.php");

// Übergebe ob Benutzer vll. schon eingeloggt
$login = $_SESSION['login'];
if(!$login) $title = "Login";

?>
<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="authot" content="Michael Frantsits">

        <title>LSMC - <?php echo $title; ?></title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custon style for this Website -->
        <?php if(!$login) { ?>
        <link href="../css/style.css" rel="stylesheet"> 
        <?php } else { ?>
        <link href="../css/content.css" rel="stylesheet"> 
        <?php } ?>
    </head>
    <body>
        <?php
        if(!$login){
            include("login.php");
        } else {

            include("header.php");
            include("footer.php");
        }
        ?>
    </body>
</html>