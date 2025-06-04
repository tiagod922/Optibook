<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Créer un compte - OptiBook</title>
    <style>
        body {
            margin: 0;
            background-color: #0d0d0d;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 50px;
        }

        .register-box {
            background: #111;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px #ff0000;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #ff0000;
            margin-bottom: 25px;
            text-shadow: 0 0 10px #ff0000;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 6px;
            border: none;
            font-size: 16px;
            background: #222;
            color: #fff;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #ff0000;
            color: #000;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #ff0000;
        }

        .message {
            margin-top: 15px;
            color: #ff0000;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #ff0000;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="register-box">
        <h2>Créer un compte</h2>
        <form method="POST" action="reserv.php">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Créer le compte</button>
        </form>
    </div>
</body>

</html>