
    <?php
    include 'config.php';
    $conn = config::getConnexion();
    try {

        $query = $conn->prepare("UPDATE user SET email=:email,
       pwd=:pwd where id=:id");

        $query->execute([
            'email' => '2A40@gmail.com',
            'pwd' => '2a40_2023',
            'id' => 4
        ]);
        echo $query->rowCount() . 'records updated successfully';
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    ?>
