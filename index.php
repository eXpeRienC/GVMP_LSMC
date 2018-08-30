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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

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

            switch($site){
                case 'member':
                include("member.php");
                break;
                case 'member_add':
                if($user['rang'] > 9) {
                    include("member_add.php");
                } else {
                    $arr = array('error' => 'Code04',
                                'site' => 'member');
                    redirect_post("../index.php", $arr);
                }
				break;
				case 'member_edit':
				if($user['rang'] >9) {
					include("member_edit.php");
				} else {
					$arr = array('error' => 'Code04',
								'site' => 'member');
					redirect_post("../index.php", $arr);
				}
				break;
				case 'verwaltung':
				include("verwaltung.php");
                break;
                case 'fst_add':
                    include("fst_add.php");
                break;
            }

            include("footer.php");
        }
        ?>
        <!-- Bootstrap core JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="..../js/jquery-slim.min.js"><\/script>')</script>
        <script languag="javascript" type="text/javascript" src="../js/popper.min.js"></script>
        <script languag="javascript" type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    </body>
</html>