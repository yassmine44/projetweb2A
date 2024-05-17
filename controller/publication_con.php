<?php

require_once __DIR__ . '/../config.php';

class publicationCon{

    private $tab_name;

    public function __construct($tab_name){
        $this->tab_name = $tab_name;
    }

    public function getPublication($id)
    {
        $sql = "SELECT * FROM $this->tab_name WHERE id_publication = $id";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->execute();
            $voyage = $query->fetch();
            return $voyage;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function listpublications()
    {
        $sql = "SELECT * FROM $this->tab_name";

        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addPublication($publication)
    {
        $sql = "INSERT INTO $this->tab_name(id_blog, title_publication, contenu_publication, date_publication) VALUES (:id_blog,:title, :contenu, :date)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(
               [
                'id_blog' => $publication->get_id_blog(),
                'title' => $publication->get_title(),
                'contenu' => $publication->get_contenu(),
                'date' => $publication->get_date()
               ]
            );
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatePublication($publication, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare("UPDATE $this->tab_name SET id_blog = :id_blog, title_publication = :title, contenu_publication = :contenu, date_publication = :date WHERE id_publication = :id");
            $query->execute([
                'id' => $id, 
                'id_blog' => $publication->get_id_blog(),
                'title' => $publication->get_title(),
                'contenu' => $publication->get_contenu(),
                'date' => $publication->get_date()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
            echo($e);
        }
    }

    function updatePublicationWithoutImg($publication, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare("UPDATE $this->tab_name SET id_blog = :id_blog, title_publication = :title, contenu_publication = :contenu, date_publication = :date WHERE id_publication = :id");
            $query->execute([
                'id' => $id, 
                'id_blog' => $publication->get_id_blog(),
                'title' => $publication->get_title(),
                'contenu' => $publication->get_contenu(),
                'date' => $publication->get_date()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
            echo($e);
        }
    }

    function deletePublication($id)
    {
        $sql = "DELETE FROM $this->tab_name WHERE id_publication = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function generateBlogOptions()
    {
        // Fetching the blog IDs from the database
        $sql = "SELECT id_blog, nom_blog FROM blog";

        $db = config::getConnexion();

        try {
            $stmt = $db->query($sql);

            // Generating the <option> tags
            $options = '';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $options .= '<option value="' . $row['id_blog'] . '">' . $row['nom_blog'] . '</option>';
            }

            return $options;
        } catch (PDOException $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function generateBlogOptionsSelectedId($id)
    {
        // Fetching the blog IDs from the database
        $sql = "SELECT id_blog, nom_blog FROM blog";

        $db = config::getConnexion();

        try {
            $stmt = $db->query($sql);

            // Generating the <option> tags
            $options = '';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($row['id_blog'] == $id){
                    $options .= '<option selected value="' . $row['id_blog'] . '">' . $row['nom_blog'] . '</option>';
                }
                else{
                    $options .= '<option value="' . $row['id_blog'] . '">' . $row['nom_blog'] . '</option>';
                }
            }

            return $options;
        } catch (PDOException $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function getPublicationsByBlogId($id)
    {
        $sql = "SELECT * FROM $this->tab_name WHERE id_blog = :id";

        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $liste = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function countPublications($blogId)
    {
        $sql = "SELECT COUNT(*) as count FROM $this->tab_name WHERE id_blog = :id";

        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':id', $blogId);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['count'];
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function generatePublication($publicationPosts) {
        // Fetch data from PDOStatement object and convert it into an array
        //$publicationPosts = $publications->fetchAll(PDO::FETCH_ASSOC);
    
        for ($i = 0; $i < count($publicationPosts); $i++) {
            echo '<div class="blog-post">';
            echo '<blockquote>';
            echo '<p>' . $publicationPosts[$i]['title_publication'] . '</p>';
            echo '</blockquote>';
            echo '<p>' . $publicationPosts[$i]['contenu_publication'] . '</p>';
            echo '<div class="publication-picture-container" id="publication_pic_display">';
            echo '</div>';
            echo '<ul class="blog-post-meta">';
            echo '<li style="color: orange;">' . $publicationPosts[$i]['date_publication'] . '</li>';
            echo '</ul>';
            echo '</div>';
        }
    }
    

}


?>