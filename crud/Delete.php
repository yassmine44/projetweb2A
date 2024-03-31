
    <?php
    include 'config.php';
    $conn = config::getConnexion();
    try {

        $query = $conn->prepare("DELETE FROM user where id=:id");

        $query->execute([
            'id' => 1
        ]);
        echo $query->rowCount() . 'records deleted successfully';
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    ?>
