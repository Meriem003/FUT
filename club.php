<!doctype html>
<html lang="en">
<head>
  <?php
  include('./config.php');
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="../src/output.css" rel="stylesheet">
  <style>
    .Gk-joueur {
      display: none;
    }
    h1{
      text-align: center;
    }
  </style>
  <title>Dashboard</title>
</head>
<body class="bg-gray-100">
  <div class="flex flex-col md:flex-row h-screen">
    <!-- Sidebar -->
    <aside class="bg-blue-900 text-white w-full md:w-64 flex flex-col">
      <div class="p-4 text-center font-bold text-xl border-b border-blue-700">Dashboard</div>
      <nav class="flex-1 mt-4">
        <ul class="space-y-2">
          <li><a href="./index.php" class="block py-2 px-4 hover:bg-blue-700">Add Player</a></li>
          <li><a href="./edit.php" class="block py-2 px-4 hover:bg-blue-700">Edit Player</a></li>
          <li><a href="./afficher.php" class="block py-2 px-4 hover:bg-blue-700">affichage</a></li>
          <li><a href="./stati.php" class="block py-2 px-4 hover:bg-blue-700">Statistiques</a></li>
          <li><a href="./Nationalite.php" class="block py-2 px-4 hover:bg-blue-700">add Nationalité</a></li>
          <li><a href="./club.php" class="block py-2 px-4 hover:bg-blue-700">add clup</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 h-max-[100vh] overflow-y-auto">
      <section class="mb-6">
        <h1 class="text-3xl font-bold">Ajouté un nouveau club</h1>
      </section>
      <section id="userForm" class="mb-8">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
        <form id="player-form" method="POST">
        <div class="mb-4">
            <label for="club" class="block text-sm font-medium text-gray-700">club</label>
            <input type="text" id="club" name="rating" placeholder="add club" min="1" max="100" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <button type="submit" class="w-full px-4 py-2 bg-indigo-500 text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">clique</button>
        </div>
        </form>
        </div>
        </section>
        <section id="userInfoRow" class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto mt-8 h-auto">
          <div>
          <h1 class="text-2xl font-bold mb-4">Liste des Joueurs</h1>
<table id="players-table" class="table-auto border-collapse border border-gray-300 w-full text-sm">
  <thead>
    <tr class="bg-gray-200">
      <th class="border border-gray-300 px-4 py-2">Photo</th>
      <th class="border border-gray-300 px-4 py-2">Nom</th>
    </tr>
  </thead>
  <tbody>
<?php
// Correction de la requête SQL : ajouter les colonnes manquantes
$sql = "SELECT club.id_club, club.club_name AS nom, club.url_club AS photo 
        FROM club";
$result = $connection->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><img src='" . $row['photo'] . "' alt='Club Image' width='50' height='30'></td>";
    echo "<td>" .$row['nom'] . "</td>";
    echo "</tr>";
}
    ?>
</tbody>
</table>
</div>
</div>
</section>
  <script src="../src/scripts/sendRequest.js?v=<?php echo time(); ?>"></script>
  <script src="../src/scripts/deletplayer.js?v=<?php echo time(); ?>"></script>
</body>
</html>