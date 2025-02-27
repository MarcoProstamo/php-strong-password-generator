<?php
    $passwordLengthIsValid = isset($_GET['passwordLength']) && is_numeric($_GET['passwordLength']) && $_GET['passwordLength'] > 0;
    $passwordLength = $passwordLengthIsValid ? $_GET['passwordLength'] : null;

    // String of all Possible Characters
    $capitalLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $smallLetters = "abcdefghijklmnopqrstuvwxyz";
    $numbers= "0123456789";
    $specialChars = "!@#$%^&*()_+-=[]{}|;:,.<>?";

    $characters = "";
    if (isset($_GET["capitalLetters"]) && $_GET["capitalLetters"] === "on") $characters .= $capitalLetters;
    if (isset($_GET["smallLetters"]) && $_GET["smallLetters"] === "on") $characters .= $smallLetters;
    if (isset($_GET["numbers"]) && $_GET["numbers"] === "on") $characters .= $numbers;
    if (isset($_GET["specialCharacters"]) && $_GET["specialCharacters"] === "on") $characters .= $specialChars;
    
    $charactersLength = strlen($characters) ?? 0;

    function generatePassword($passwordLength, $characters, $charactersLength){
        if ($passwordLength && $characters){
            $password = '';
            for ($i = 0; $i < $passwordLength; $i++) $password .= $characters[rand(0, $charactersLength - 1)];
            return $password;
        }
        return null;
    }
?>