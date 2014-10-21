<?php
/**
 * Created by PhpStorm.
 * User: Pam
 * Date: 9/28/14
 * Time: 2:34 PM
 */
$words = file('wordlist.txt', FILE_IGNORE_NEW_LINES);

$symbols = Array('~','!','@','#','$','%','^','&','*','(',')','+','{','}',
                '[',']','<','>','?','/');

if (isset($_GET['numword'])) {
for ($i=1;$i <= $_GET['numword']; $i++){
    $newword = $words[rand(0, count($words)-1)];

    if ($_GET['case'] == 'camel') {
        $newword = ucfirst($newword);
    }
    elseif ($_GET['case'] == "snake") {
        if ($i < $_GET['numword']) {
            $newword = strtolower($newword)."-";
        }
        else $newword = strtolower($newword);
    }
    else {
        $newword = strtolower($newword).'&nbsp';
    }
    echo $newword;
}
if (isset($_GET["symbol"])) {

    echo $symbols[rand(0, count($symbols)-1)];
}
if (isset($_GET["num"])) {
    echo rand(10,99);
}
}