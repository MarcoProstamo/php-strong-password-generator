<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Password Generator</title>
</head>
<body class="text-bg-dark">

    <div class="container p-3">
        <div class="border border-light p-3">
            <form action="" method="GET">
                <div class="pb-3">
                    <label class="form-label" for="passwordLength">Lunghezza Password</label>
                    <input class="form-control" type="number" name="passwordLength" id="passwordLength" placeholder="Enter password length" min="1">
                </div>
                <div class="pb-3 form-check">
                    <label class="form-check-label" for="capitalLetters">Capital Letters</label>
                    <input class="form-check-input" type="checkbox" name="capitalLetters" id="capitalLetters">
                </div>
                <div class="pb-3 form-check">
                    <label class="form-check-label" for="smallLetters">Small Letters</label>
                    <input class="form-check-input" type="checkbox" name="smallLetters" id="smallLetters">
                </div>
                <div class="pb-3 form-check">
                    <label class="form-check-label" for="numbers">Numbers</label>
                    <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                </div>
                <div class="pb-3 form-check">
                    <label class="form-check-label" for="specialCharacters">Special Characters</label>
                    <input class="form-check-input" type="checkbox" name="specialCharacters" id="specialCharacters">
                </div>
                <button class="btn btn-primary" type="submit">Generate Password</button>
            </form>
        </div>
    </div>
    <?php
        require_once "./passwordGenerator.php";
        session_start();
        $generatedPassword = generatePassword($passwordLength, $characters, $charactersLength);
        $_SESSION['password'] = $generatedPassword;
        if (isset($_SESSION['password'])) header("Location: ./result.php");
    ?>
</body>
</html>