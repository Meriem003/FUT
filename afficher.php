<!doctype html>
<html lang="en">
<?php
include('./config.php');
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="../src/output.css" rel="stylesheet">
  <title>Dashboard</title>
</head>
<body class="bg-gray-100 h-auto">
  <div class="flex flex-col md:flex-row h-auto">
    <!-- Sidebar -->
    <aside class="bg-blue-900 text-white w-full md:w-64 flex flex-col">
      <div class="p-4 text-center font-bold text-xl border-b border-blue-700">Dashboard</div>
      <nav class="flex-1 mt-4">
      <ul class="space-y-2">
            <li><a href="./index.php" class="block py-2 px-4 hover:bg-blue-700">Add Player</a></li>
          <li><a href="./pages/editplayer.php" class="block py-2 px-4 hover:bg-blue-700">Edit Player</a></li>
          <li><a href="./afficher.php" class="block py-2 px-4 hover:bg-blue-700">affichage</a></li>
          <li><a href="./stati.php" class="block py-2 px-4 hover:bg-blue-700">Statistiques</a></li>
        </ul>
      </nav>
    </aside>
</section>
      <section id="userInfoRow" class="bg-white p-6 rounded-lg shadow-lg max-w-6xl mx-auto mt-8 h-auto">
          <div>
          <h1 class="text-2xl font-bold mb-4">Liste des Joueurs</h1>
<table id="players-table" class="table-auto border-collapse border border-gray-300 w-full text-sm">
  <thead>
    <tr class="bg-gray-200">
      <th class="border border-gray-300 px-4 py-2">Photo</th>
      <th class="border border-gray-300 px-4 py-2">Nom</th>
      <th class="border border-gray-300 px-4 py-2">Position</th>
      <th class="border border-gray-300 px-4 py-2">Nationalité</th>
      <th class="border border-gray-300 px-4 py-2">Club</th>
      <th class="border border-gray-300 px-4 py-2">Rating</th>
      <th class="border border-gray-300 px-4 py-2">Pac\Div</th>
      <th class="border border-gray-300 px-4 py-2">Sho\Han</th>
      <th class="border border-gray-300 px-4 py-2">Pas\Kic</th>
      <th class="border border-gray-300 px-4 py-2">Dri\Ref</th>
      <th class="border border-gray-300 px-4 py-2">Def\Spe</th>
      <th class="border border-gray-300 px-4 py-2">Phy\Pos</th>
      <th class="border border-gray-300 px-4 py-2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT players.id, players.nom, players.photo, players.position, flag.flag_name, club.club_name, players.rating, 
    players.pace, players.shooting, players.passing, players.dribbling, players.defending, players.physical, 
    players.diving, players.handling, players.kicking, players.reflexes, players.speed, players.positioning
        FROM players
        JOIN flag ON players.id_flag = flag.id_flag
        JOIN club ON players.id_club = club.id_club";


    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><img src='" . $row['photo'] . "' alt='Player Image'></td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['position'] . "</td>";
            echo "<td>" . $row['flag_name'] . "</td>";
            echo "<td>" . $row['club_name'] . "</td>";
            echo "<td>" . $row['rating'] . "</td>";
            echo "<td>" . $row['pace'],$row['diving'] . "</td>";
            echo "<td>" . $row['shooting'],$row['handling'] . "</td>";
            echo "<td>" . $row['passing'],$row['kicking'] . "</td>";
            echo "<td>" . $row['dribbling'],$row['reflexes'] . "</td>";
            echo "<td>" . $row['defending'],$row['speed'] . "</td>";
            echo "<td>" . $row['physical'],$row['positioning'] . "</td>";
            echo "<td>";
            echo "<a href='afficher.php?id=" . $row['id'] . "' class='edit'>✏️</a>";
            echo "<a href='afficher.php?id=" . $row['id'] . "' class='delete-btn'>❌</a>";                
            echo "</td>";
            echo "</tr>";
        }
    }
    // Check if 'id' is set in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM players WHERE id = $id";
        if ($connection->query($sql) === TRUE) {
            echo "Le joueur a été supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression du joueur : " . $connection->error;
        }
    } else {
        echo "ID de joueur manquant.";
    }

?>
  </tbody>
</table>
</div>
</div>
</section>