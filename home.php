<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fut Champ</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Arial', sans-serif;
      color: #fff;
      background-color: #0b0d17;
    }

    nav {
      background-color: rgba(0, 0, 0, 0.129);
      padding: 15px 20px;
      display: flex;
      align-items: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.266);
    }
    nav img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 15px;
      object-fit: cover;
    }
    nav h3 {
      font-size: 26px;
      font-weight: bold;
      color: #4CAF50;
      margin: 0;
    }
    

    .container {
      position: relative;
      height: calc(100vh - 70px);
      background-image: url('./img/téléchargement\ \(26\).jpg');
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .buttons {
      background-color: rgba(0, 0, 0, 0.481);
      padding: 40px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
      max-width: 600px;
    }

    .buttons p {
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 20px;
      color: #c9d1d9;
    }
    .buttons button {
      background-color: #3e844072;
      color: #fff;
      border: none;
      padding: 15px 35px;
      margin: 10px;
      border-radius: 30px;
      cursor: pointer;
      font-size: 18px;
      font-weight: bold;
      transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }
    .buttons button:hover {
      background-color: #3E8E41;
      transform: translateY(-4px);
      box-shadow: 0 8px 12px rgba(205, 184, 184, 0.4);
    }
    .buttons button:active {
      transform: translateY(2px);
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  <nav>
    <img src="./img/Sticker terrain de foot.jpg" alt="Logo de Fut Champ">
    <h3>FUT CHAMP</h3>
  </nav>
  <div class="container">
    <div class="buttons">
      <p>
        Bienvenue sur Fut Champ! Connectez-vous en tant qu'administrateur pour gérer la plateforme ou en tant qu'utilisateur pour accéder aux fonctionnalités exclusives.
      </p>
      <button><a href="./index.php">Admin</a></button>
      <button><a href="./utilisateur.php">Utilisateur</a></button>
    </div>
  </div>
</body>
</html>
