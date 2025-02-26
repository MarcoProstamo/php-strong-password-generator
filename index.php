<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <?php
        $passwordLengthIsValid = isset($_GET['passwordLength']) && is_numeric($_GET['passwordLength']) && $_GET['passwordLength'] > 0;
        $passwordLength = $passwordLengthIsValid ? $_GET['passwordLength'] : 0;

        // String of all Possible Characters
        $capitalLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $smallLetters = "abcdefghijklmnopqrstuvwxyz";
        $numbers= "0123456789";
        $specialChars = "!@#$%^&*()_+-=[]{}|;:,.<>?";
        $characters = $capitalLetters . $smallLetters . $numbers . $specialChars;
        $charactersLength = strlen($characters);

        function generatePassword($passwordLength, $characters, $charactersLength){
            $password = '';
            for ($i = 0; $i < $passwordLength; $i++) $password .= $characters[rand(0, $charactersLength - 1)];
            return $password;
        }
    ?>

    <form action="" method="GET">
        <label for="passwordLength">Lunghezza Password</label>
        <input type="number" name="passwordLength" id="passwordLength" placeholder="Enter password length" min="1">
        <button type="submit">Generate Password</button>
    </form>

    <hr>

    <?php
        echo generatePassword($passwordLength, $characters, $charactersLength);
    ?>
</body>
</html>