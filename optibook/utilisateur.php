<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
try {
    $conn = new PDO('mysql:host=localhost;dbname=ton_db', 'root', '');
   
 
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $stmt = $conn->
   
 
?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Gestion des utilisateurs</title>
    <style>
        body {
            background-color: #000;
            color: rgb(255, 0, 0);
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            padding: 20px;
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        th, td {
            border: 1px solid #444;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #111;
        }
        tr:hover {
            background-color: #222;
        }
        .btn {
            padding: 8px 16px;
            color: #000;
            font-weight: bold;
            background-color: rgb(255, 0, 0);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.2s ease, background 0.3s ease;
        }
        .btn:hover {
            background-color:rgb(255, 0, 0);
            transform: scale(1.05);
        }
        .form-container {
            background-color: #111;
            padding: 20px;
            width: 50%;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 10px rgb(255, 0, 0);
            margin-bottom: 40px;
        }
        input {
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            border-radius: 6px;
            border: none;
        }
        label {
            color: rgb(255, 0, 0);
        }
        p.no-data {
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>
 
<h1>Gestion des Utilisateurs</h1>
 
<?php if (empty($users)): ?>
    <p class="no-data">Aucun utilisateur trouvé.</p>
<?php else: ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= ($user['']) ?></td>
            <td><?=($user['']) ?></td>
            <td><?= htmlspecialchars($user['prenom']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td>
                <a href="?edit=<?= $user['id'] ?>" class="btn">Modifier</a>
                <a href="?delete=<?= $user['id'] ?>" class="btn" onclick="return confirm('Confirmer la suppression ?')">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php endif; ?>
 
<?php
 
if (isset($_GET['edit'])):
    $id = $_GET['edit'];
    $stmt = $conn
    if ($editUser):
?>
<div class="form-container">
    <h2>Modifier l'utilisateur</h2>
    <form method="POST">
        <input type="hidden" name="id" value="">
        <label>Nom</label>
        <input type="text" name="nom" value="" required>
        <label>Prénom</label>
        <input type="text" name="prenom" value="" required>
        <label>Email</label>
        <input type="email" name="email" value="" required>
        <button type="submit" name="update" class="btn">Enregistrer</button>
    </form>
</div>
<?php endif; endif; ?>
</body>
</html>


