
 <?php   
  include 'config.php';
  $conn = config::getConnexion();
  try {
    $query = $conn->prepare("SELECT * from user");
    $query->execute();
    $result = $query->fetchAll();
  } catch (PDOException $e) {
    echo 'echec de connexion:' . $e->getMessage();
  }

  foreach ($result as $row) {
    echo 'the id:   ' . $row['id'] . '  ||  ' . $row['email'] . '   ||   ' . $row['pwd'];
    echo '<br>';
  }
  ?>
