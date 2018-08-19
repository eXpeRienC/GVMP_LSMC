<?php
// Setzen fürs debuggen und Ausgeben bestimmter Fehlermeldungen
if(isset($_GET['debug']) && $_GET['debug']){
    $debug = true;
} else {
    $debug = false;
}



// Binde die Datenbank ein
include("database.php");
include('functions.php');

//Initialisieren der Datenbank
$db = new Database();
$db->connect();

if($debug == true){
echo "Ausgabe SESSIONS: "; print_r($_SESSION); echo "<br/>";
echo "Ausgabe POST: "; print_r($_POST); echo "<br/>";
echo "Ausgabe GET: "; print_r($_GET);
}

$error = check_var('error');
if(isset($_SESSION['icname']) && $_SESSION['icname'] != "") {
    $icname = $_SESSION['icname'];
} else {
    $icname = "";
}
$user = check_user($db, $icname);

if(isset($_GET['site']) && $_GET['site']){
    $site = $_GET['site'];
} else {
    $site = check_var('site');
}

// Gebe die richtigen Fehler aus
switch($error){
    //Login erfolgreich
    case 'Code00':
        $error_txt = "User gefunden, aber Login geht noch nicht!";
        $error_style = "alert-success";
        $_SESSION['login'] = true;
        $_SESSION['icname'] = $icname;
    break;
    case 'Code01':
        $error_txt = "Kein User mit diesem Namen gefunden!";
        $error_style = "alert-danger";
    break;
    case 'Code02':
        $error_txt = "Passwort stimmt nicht überein!";
        $error_style = "alert-danger";
    break;
    case 'Code03':
        $error_txt = "Erfolgreich ausgeloggt!";
        $error_style = "alert-success";
    break;
    default:
        $error_txt = "Derzeit ist der Login ohne Funktion!";
        $error_style = "alert-primary";
    break;
}

// Logge den Spieler aus
if(isset($_GET['logout']) && $_GET['logout'] == true){
    unset($_SESSION['login']);
    unset($_SESSION['icname']);
    $_SESSION['login'] = false;
    $arr = array('error' => 'Code03');
    redirect_post("../index.php", $arr);
}

// Weise die richtige Seitenfunktionen zu
switch($site){
    case 'login':
        check_login($db, $_POST['inputicname'], $_POST['inputpassword']);
    break;
    case 'Uebersicht':
        $title = "&Uuml;bersicht";
    break;
    default:
        if(!check_var('login')){
            $title = "Login";
        } else {
            $title = "&Uuml;bersicht";
        }
    break;
}
?>