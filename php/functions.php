<?php

// Weise Variable zu
function check_var($var){
    if(!isset($_POST[$var])){
        return "";
    } else {
        return $_POST[$var];
    }
    return "";
}

// Überprüfe Login
function check_login($db, $icname, $password){
    $db->select('mitarbeiter', 'password', null, 'icname="'.$icname.'"');
    if($db->numRows() == 1){
        if(md5(check_var('inputpassword')) == $db->getResult()[0]['password']){
            $arr = array('error' => 'Code00',
                         'site' => 'Uebersicht',
                         'icname' => md5($icname));
                         $_SESSION['icname'] = $icname;
            redirect_post("../index.php", $arr);
        } else {
            $arr = array('error' => 'Code02');
            redirect_post("../index.php", $arr);
        }
    } else {
        $arr = array('error' => 'Code01');
        redirect_post("../index.php", $arr);
    }
}

// Überprüfe welcher User unter dem Hash läuft
function check_user($db, $icname){
    $db->select("mitarbeiter", "*", null, 'icname="'.$icname.'"');
    $fetch = $db->getResult();
    if($db->numRows() != 0) {
        return $fetch[0];
    } else {
        return "";
    }
}

// Sende Daten als Post auf die neue Seite
function redirect_post($url, array $data)
{
    ?>
    <!doctype html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript">
            function closethisasap() {
                document.forms["redirectpost"].submit();
            }
        </script>
    </head>
    <body onload="closethisasap();">
    <form name="redirectpost" method="post" action="<?php echo $url; ?>">
        <?php
        if ( !is_null($data) ) {
            foreach ($data as $k => $v) {
                echo '<input type="hidden" name="' . $k . '" value="' . $v . '"> ';
            }
        }
        ?>
    </form>
    </body>
    </html>
    <?php
    exit;
}

?>