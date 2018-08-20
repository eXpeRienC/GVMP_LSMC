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
    case 'Code04':
        $error_txt = "Kein Zugang zu dieser Seite!";
        $error_style = "alert-danger";
    break;
    case 'Code05':
        $error_txt = "Ungültige Eingabe!";
        $error_style = "alert-danger";
    break;
    case 'Code06':
        $error_txt = "Neuer Mitarbeiter wurde erfolgreich eingestellt!";
        $error_style = "alert-success";
    break;
    case 'Code07':
        $error_txt = "Bei der Beförderung ist etwas schief gelaufen!";
        $error_style = "alert-danger";
    break;
    case 'Code08':
        $error_txt = $_POST['mitarbeiter'] . " wurde erfolgreich befördert!";
        $error_style = "alert-success";
    break;
    case 'Code09':
        $error_txt = "Bei der Degradierung ist etwas schief gelaufen!";
        $error_style = "alert-danger";
    break;
    case 'Code10':
        $error_txt = $_POST['mitarbeiter'] . " wurde erfolgreich degradiert!";
        $error_style = "alert-success";
    break;
    default:
        $error_txt = "";
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
    case 'invite':
        $title = "Invite";        
        $arr = array('error' => 'Code05', 'site' => 'member_add');
        $arr += $_POST;
        // Überprüfe auf sämtliche Felder die falsch sein können
        if(is_numeric($_POST['inputid'])){
            if(is_numeric($_POST['inputtelefon'])){
                if(filter_var($_POST['inputemail'], FILTER_VALIDATE_EMAIL)){
                    $insert = array('ID' => $_POST['inputid'], 'icname' => $_POST['inputicname'], 'forumname' => $_POST['inputforumname'], 'telefon' => $_POST['inputtelefon'], 'info' => $_POST['inputinfo'], 'rang' => $_POST['inputrang'], 'email' => $_POST['inputemail'], 'beitritt' => date("Y-m-d"));
                    $db->insert("mitarbeiter", $insert);
                    $arr = array('error' => 'Code06', 'site' => 'member_add');
                    redirect_post("../index.php", $arr);
                } else {
                    redirect_post("../index.php", $arr);
                }
            } else {
                redirect_post("../index.php", $arr);
            }
        } else {
            redirect_post("../index.php", $arr);
        }
    break;
    case 'rankup':
        $title = "Beförderung";
        $db->select("mitarbeiter","rang,icname",null,"ID=".$_POST['playerid']);
        $rang = $db->getResult();
        $icname = $rang[0]['icname'];
        $rang = $rang[0]['rang'];
        if($rang < $user['rang']){
            $rang += 1;
            $arr = array('rang' => ($rang));
            $db->update('mitarbeiter',$arr,"ID=".$_POST['playerid']);
            $arr = array('error' => 'Code08', 'site' => 'verwaltung', 'mitarbeiter' => $icname);
            redirect_post("../index.php", $arr);
        } else {
            $arr = array('error' => 'Code07', 'site' => 'verwaltung');
            redirect_post("../index.php", $arr);
        }
    break;
    case 'rankdown':
        $title = "Degradierung";
        $db->select("mitarbeiter","rang,icname",null,"ID=".$_POST['playerid']);
        $rang = $db->getResult();
        $icname = $rang[0]['icname'];
        $rang = $rang[0]['rang'];
        if($rang < $user['rang']){
            $rang -= 1;
            $arr = array('rang' => ($rang));
            $db->update('mitarbeiter',$arr,"ID=".$_POST['playerid']);
            $arr = array('error' => 'Code10', 'site' => 'verwaltung', 'mitarbeiter' => $icname);
            redirect_post("../index.php", $arr);
        } else {
            $arr = array('error' => 'Code09', 'site' => 'verwaltung');
            redirect_post("../index.php", $arr);
        }
    break;
    case 'member_add':
        $title = "Mitarbeiter hinzuf&uuml;gen";
        $inputid = ""; $inputicname = ""; $inputforumname = ""; $inputtelefon = ""; $inputrang = ""; $inputemail = ""; $inputinfo = "";
        if(isset($_POST['inputid'])){
            $inputid = $_POST['inputid'];
            $inputicname = $_POST['inputicname'];
            $inputforumname = $_POST['inputforumname'];
            $inputtelefon = $_POST['inputtelefon'];
            $inputrang  = $_POST['inputrang'];
            $inputemail  = $_POST['inputemail'];
            $inputinfo = $_POST['inputinfo'];
        }
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