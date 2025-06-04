<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin - OptiBook</title>
    <style>
        body {
            background: #0d0d0d;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: #111;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px #ff0000;
            width: 100%;
            max-width: 400px;
        }
        h2 {
            color: #ff0000;
            text-align: center;
            text-shadow: 0 0 10px #ff0000;
            margin-bottom: 20px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 6px;
            background: #222;
            color: #fff;
        }
        button {
            background: #ff0000;
            color: #000;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background:  #ff0000;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Connexion Admin</h2>
        <form method="GET" action="admin.php?">
            <input placeholder="Identifiant" required>
            <input placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>


