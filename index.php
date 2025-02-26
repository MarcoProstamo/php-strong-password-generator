<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form action="" method="GET">
        <label for="passwordLength">Lunghezza Password</label>
        <input type="number" name="passwordLength" id="passwordLength" placeholder="Enter password length" min="1">
        <button type="submit">Generate Password</button>
    </form>

    <hr>

    <?php
        require_once "./passwordGenerator.php";
        session_start();
        $generatedPassword = generatePassword($passwordLength, $characters, $charactersLength);
        $_SESSION['password'] = $generatedPassword;
        if (isset($_SESSION['password'])) header("Location: ./result.php");
    ?>
</body>
</html>