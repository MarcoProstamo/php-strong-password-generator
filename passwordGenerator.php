<?php
    $passwordLengthIsValid = isset($_GET['passwordLength']) && is_numeric($_GET['passwordLength']) && $_GET['passwordLength'] > 0;
    $passwordLength = $passwordLengthIsValid ? $_GET['passwordLength'] : null;

    // String of all Possible Characters
    $capitalLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $smallLetters = "abcdefghijklmnopqrstuvwxyz";
    $numbers= "0123456789";
    $specialChars = "!@#$%^&*()_+-=[]{}|;:,.<>?";
    $characters = $capitalLetters . $smallLetters . $numbers . $specialChars;
    $charactersLength = strlen($characters);

    function generatePassword($passwordLength, $characters, $charactersLength){
        if ($passwordLength){
            $password = '';
            for ($i = 0; $i < $passwordLength; $i++) $password .= $characters[rand(0, $charactersLength - 1)];
            return $password;
        }
        return null;
    }
?>