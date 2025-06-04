<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réservation - OptiBook</title>
    <style>
        body {
            background: #0d0d0d;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
        }
        .form-container {
            background: #111;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px #ff0000;
            width: 100%;
            max-width: 500px;
        }
        h2 {
            text-align: center;
            color: #ff0000;
            text-shadow: 0 0 10px #ff0000;
            margin-bottom: 25px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
        }
        input, select, button {
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
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
            background: #ff0000;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Réservez une ressource</h2>
        <form action="confirmation.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="date">Date :</label>
            <input type="date" id="date" name="date" required>

            <label for="heure">Heure :</label>
            <input type="time" id="heure" name="heure" required>

            <label for="ressource">Ressource :</label>
            <select id="ressource" name="ressource" required>
                <option value="">-- Choisissez --</option>
                <option value="Salle A">Salle A</option>
                <option value="Salle B">Salle B</option>
                <option value="Vidéo projecteur">Vidéo projecteur</option>
                <option value="Ordinateur portable">Ordinateur portable</option>
            </select>

            <button type="submit">Réserver</button>
        </form>
    </div>
</body>
</html>
