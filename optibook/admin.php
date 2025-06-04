<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - OptiBook</title>
    <style>
        body {
            background: #0d0d0d;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            padding: 20px;
        }

        .admin-box {
            background: #111;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 25px #ff0000;
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #ff0000;
            text-shadow: 0 0 10px #ff0000;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #333;
            text-align: center;
        }

        th {
            background: #222;
        }

        a.btn, button {
            padding: 8px 16px;
            background: #ff0000;
            color: #000;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
        }

        a.btn:hover, button:hover {
            background: #ff0000;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"] {
            background: #222;
            color: #fff;
            border: 1px solid #444;
            border-radius: 5px;
            padding: 5px;
            width: 100%;
        }

        .nav {
            text-align: center;
            margin-bottom: 20px;
        }

        .nav a {
            margin: 0 10px;
        }
    </style>
</head>
<body>
<div class="admin-box">
    <h1>Espace Administration - Gestion des Réservations</h1>
    <div class="nav">
        <a class="btn" href="dashboard.php">Voir les réservations (utilisateur)</a>
        <a class="btn" href="utilisateur.php">Gestion des utilisateurs</a> <!-- Ajout ici -->
        <a class="btn" href="logout.php">Se déconnecter</a>
    </div>

    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($reservations as $res): ?>
            <?php if (isset($_GET['edit']) && $_GET['edit'] == $res['id']): ?>
                <tr>
                    <form method="post">
                        <td><input type="text" name="nom" value="<?=htmlspecialchars($res['nom'])?>"></td>
                        <td><input type="text" name="prenom" value="<?=htmlspecialchars($res['prenom'])?>"></td>
                        <td><input type="email" name="email" value="<?=htmlspecialchars($res['email'])?>"></td>
                        <td><input type="date" name="date" value="<?=htmlspecialchars($res['date'])?>"></td>
                        <td><input type="time" name="heure" value="<?=htmlspecialchars($res['heure'])?>"></td>
                        <td><input type="text" name="message" value="<?=htmlspecialchars($res['message'])?>"></td>
                        <td>
                            <input type="hidden" name="id" value="<?= $res['id'] ?>">
                        </td>
                    </form>
                </tr>
            <?php else: ?>
                <tr>
                    <td><?=htmlspecialchars($res['nom'])?></td>
                    <td><?=htmlspecialchars($res['prenom'])?></td>
                    <td><?=htmlspecialchars($res['email'])?></td>
                    <td><?=htmlspecialchars($res['date'])?></td>
                    <td><?=htmlspecialchars($res['heure'])?></td>
                    <td><?=htmlspecialchars($res['message'])?></td>
                    <td>
                        <a class="btn" href="admin.php?delete=<?= $res['id'] ?>" onclick="return confirm('Supprimer cette réservation ?')">Supprimer</a>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>


