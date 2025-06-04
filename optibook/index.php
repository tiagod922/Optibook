<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil | OptiBook</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #000;
      color: white;
      font-family: 'Segoe UI', sans-serif;
      overflow: hidden;
    }
 
    .hero {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
 
    h1 {
      font-size: 4em;
      color: #ff0000;
      text-shadow: 0 0 10px #ff0000, 0 0 30px #ff0000;
      animation: glow 2s ease-in-out infinite alternate;
    }
 
    @keyframes glow {
      from {
        text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
      }
      to {
        text-shadow: 0 0 20px #ff0000, 0 0 40px #ff0000;
      }
    }
 
    .btn-tech {
      background: linear-gradient(to right, #ff0000, #ff0000);
      color: black;
      font-weight: bold;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      font-size: 1.1em;
      margin: 10px;
      transition: 0.3s;
    }
 
    .btn-tech:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px #ff0000;
    }
 
    .background-tech {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at center, rgba(255, 204, 0, 0.03), transparent);
      animation: pulse 6s infinite;
      z-index: -1;
    }
 
    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 0.1; }
      50% { transform: scale(1.1); opacity: 0.3; }
    }
 
    .subtitle {
      font-size: 1.3em;
      color: #ccc;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <div class="background-tech"></div>
 
  <div class="hero">
    <h1>OptiBook</h1>
    <p class="subtitle">Optimisez vos réservations de salles et de matériel en toute simplicité</p>
 
    <div>
      <a href="login.php" class="btn btn-tech">Connexion Admin</a>
      <a href="register.php" class="btn btn-tech">Créer un compte</a>
    </div>
  </div>
</body>
</html>
