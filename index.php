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
        <h1 class="text-3xl font-bold">Welcome to the Dashboard</h1>
      </section>

      <!-- User Registration Form -->
      <section id="userForm" class="mb-8">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
        <form id="player-form" method="POST">
  <!-- Nom du joueur -->
  <div class="mb-4">
    <label for="player_name" class="block text-sm font-medium text-gray-700">Nom du joueur</label>
    <select id="player_name" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      <option value="Lionel Messi">Lionel Messi</option>
      <option value="Cristiano Ronaldo">Cristiano Ronaldo</option>
      <option value="Kylian Mbappé">Kylian Mbappé</option>
      <option value="Erling Haaland">Erling Haaland</option>
      <option value="Neymar Jr">Neymar Jr</option>
      <option value="Achraf Hakimi">Achraf Hakimi</option>
      <option value="Kevin De Bruyne">Kevin De Bruyne</option>
      <option value="Robert Lewandowski">Robert Lewandowski</option>
      <option value="Mohamed Salah">Mohamed Salah</option>
      <option value="Karim Benzema">Karim Benzema</option>
      <option value="Luka Modric">Luka Modric</option>
    </select>
  </div>

<!-- Nationalité -->
<div class="mb-4">
  <label for="nationality" class="block text-sm font-medium text-gray-700">Nationalité</label>
  <select id="nationality" name="nationality" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    <option value="Argentine">Argentine</option>
    <option value="Portugal">Portugal</option>
    <option value="France">France</option>
    <option value="Brésil">Brésil</option>
    <option value="Norvège">Norvège</option>
    <option value="Maroc">Maroc</option>
    <option value="Belgique">Belgique</option>
    <option value="Pologne">Pologne</option>
    <option value="Égypte">Égypte</option>
    <option value="Croatie">Croatie</option>
  </select>
</div>

<!-- Club -->
<div class="mb-4">
  <label for="club" class="block text-sm font-medium text-gray-700">Club</label>
  <select id="club" name="club" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    <option value="Paris Saint-Germain">Paris Saint-Germain</option>
    <option value="Real Madrid">Real Madrid</option>
    <option value="FC Barcelona">FC Barcelona</option>
    <option value="Manchester City">Manchester City</option>
    <option value="Bayern Munich">Bayern Munich</option>
    <option value="Juventus">Juventus</option>
    <option value="Chelsea">Chelsea</option>
    <option value="AC Milan">AC Milan</option>
    <option value="Liverpool">Liverpool</option>
    <option value="Arsenal">Arsenal</option>
  </select>
</div>


  <!-- Position -->
  <div class="mb-4">
    <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
    <select id="position" name="position" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      <option value="CM">CM</option>
      <option value="LCM">LCM</option>
      <option value="RCM">RCM</option>
      <option value="LB">LB</option>
      <option value="RB">RB</option>
      <option value="RCB">RCB</option>
      <option value="LCB">LCB</option>
      <option value="GK">GK</option>
      <option value="LW">LW</option>
      <option value="RW">RW</option>
      <option value="ST">ST</option>
    </select>
  </div>

  <!-- Rating -->
  <div class="mb-4">
    <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
    <input type="number" id="rating" name="rating" placeholder="Entrez le rating" min="1" max="100" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
  </div>

  <!-- Statistiques générales -->
  <div class="mb-4">
    <div id="stats-group"class="grid grid-cols-2 gap-4">
      <div class="form-group">
        <label for="pace">Pace</label>
        <input type="number" id="pace" name="pace" placeholder="Entrez pace" min="1" max="100" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>
      <div class="form-group">
        <label for="shooting">Shooting</label>
        <input type="number" id="shooting" name="shooting" placeholder="Entrez shooting" min="1" max="100" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>
      <div class="form-group">
        <label for="passing">Passing</label>
        <input type="number" id="passing" name="passing" placeholder="Entrez passing" min="1" max="100" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>
      <div class="form-group">
        <label for="dribbling">Dribbling</label>
        <input type="number" id="dribbling" name="dribbling" placeholder="Entrez dribbling" min="1" max="100" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>
      <div class="form-group">
        <label for="defending">Defending</label>
        <input type="number" id="defending" name="defending" placeholder="Entrez defending" min="1" max="100" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>
      <div class="form-group">
        <label for="physical">Physical</label>
        <input type="number" id="physical" name="physical" placeholder="Entrez physical" min="1" max="100" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      </div>
    </div>
  </div>

  <!-- Statistiques du gardien de but -->
<div class="mb-4">
  <div id="GK-stats" class="grid grid-cols-2 gap-4">
    <div class="form-group" style="display: none;">
      <label for="diving">Diving</label>
      <input type="number" id="diving" name="diving" placeholder="Entrez diving" min="1" max="100" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="form-group" style="display: none;">
      <label for="handling">Handling</label>
      <input type="number" id="handling" name="handling" placeholder="Entrez handling" min="1" max="100" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="form-group" style="display: none;">
      <label for="kicking">Kicking</label>
      <input type="number" id="kicking" name="kicking" placeholder="Entrez kicking" min="1" max="100" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="form-group" style="display: none;">
      <label for="reflexes">Reflexes</label>
      <input type="number" id="reflexes" name="reflexes" placeholder="Entrez reflexes" min="1" max="100" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="form-group" style="display: none;">
      <label for="speed">Speed</label>
      <input type="number" id="speed" name="speed" placeholder="Entrez speed" min="1" max="100" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="form-group" style="display: none;">
      <label for="positioning">Positioning</label>
      <input type="number" id="positioning" name="positioning" placeholder="Entrez positioning" min="1" max="100" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>
  </div>
</div>
  <!-- Photo -->
  <div class="mb-4">
    <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
    <select id="photo" name="photo" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
      <option value="https://cdn.sofifa.net/players/231/747/25_120.png">Lionel Messi</option>
      <option value="https://cdn.sofifa.net/players/209/981/25_120.png">Cristiano Ronaldo</option>
    </select>
  </div>

  <!-- Submit Button -->
  <div class="mb-4">
    <button type="submit" class="w-full px-4 py-2 bg-indigo-500 text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">Submit</button>
  </div>
</form>
</div>
</section>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['name'])) {
      $nom = $_POST['name'];
      $photo = $_POST['photo'];
      $position = $_POST['position'];
      $rating = $_POST['rating'];
      $pace = $_POST['pace'];
      $shooting = $_POST['shooting'];
      $passing = $_POST['passing'];
      $dribbling = $_POST['dribbling'];
      $defending = $_POST['defending'];
      $physical = $_POST['physical'];
      $nationality = $_POST['nationality'];
      $club = $_POST['club'];

      $sql_flag = "SELECT id_flag FROM flag WHERE flag_name = '$nationality'";
      $result_flag = $connection->query($sql_flag);
      $id_flag = $result_flag->num_rows > 0 ? $result_flag->fetch_assoc()['id_flag'] : null;

      $sql_club = "SELECT id_club FROM club WHERE club_name = '$club'";
      $result_club = $connection->query($sql_club);
      $id_club = $result_club->num_rows > 0 ? $result_club->fetch_assoc()['id_club'] : null;

      if ($id_flag && $id_club) {
          $sql = "INSERT INTO players (nom, photo, position, id_flag, id_club, rating, pace, shooting, passing, dribbling, defending, physical) 
                  VALUES ('$nom', '$photo', '$position', '$id_flag', '$id_club', '$rating', '$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical')";
                          if ($connection->query($sql) === TRUE) {
                              echo "Le joueur a été ajouter avec succès.";
                          }
      }
  }
}

?>
  <script src="../src/scripts/sendRequest.js?v=<?php echo time(); ?>"></script>
  <script src="../src/scripts/deletplayer.js?v=<?php echo time(); ?>"></script>
  <script>
  let position = document.getElementById("position");
  position.addEventListener("change", function (event) {
      const selectedPosition = event.target.value;
      const allJoueur = document.querySelectorAll("#stats-group .form-group");
      const gkJoueur = document.querySelectorAll("#GK-stats .form-group");
      if (selectedPosition === "GK") {
          allJoueur.forEach(function (item) {
              item.style.display = "none"; 
          });
          gkJoueur.forEach(function (item) {
              item.style.display = "block"; 
          });
      } else {
          allJoueur.forEach(function (item) {
              item.style.display = "block"; 
          });
          gkJoueur.forEach(function (item) {
              item.style.display = "none"; 
          });
      }
  });
  </script>
</body>
</html>