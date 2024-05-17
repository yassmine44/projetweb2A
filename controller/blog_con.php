<?php

require_once __DIR__ . '/../config.php';
include_once __DIR__ . '/../Controller/publication_con.php';

class blogCon{

    private $tab_name;

    public function __construct($tab_name){
        $this->tab_name = $tab_name;
    }

    public function getBlog($id)
    {
        $sql = "SELECT * FROM $this->tab_name WHERE id_blog = $id";
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
    function triReclamation()
    {
        $sql = "SELECT * FROM $this->tab_name order by nom_blog";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function listBlogs()
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

    function addBlog($blog)
    {
        $sql = "INSERT INTO $this->tab_name(image_blog, nom_blog, description_blog, date_blog) VALUES (:image, :nom, :description, :date)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(
               [
                'image' => $blog->get_image(),
                'nom' => $blog->get_nom(),
                'description' => $blog->get_description(),
                'date' => $blog->get_date()
               ]
            );
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateBlog($blog, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare("UPDATE $this->tab_name SET image_blog = :image, nom_blog = :nom, description_blog = :description, date_blog = :date WHERE id_blog = :id");
            $query->execute([
                'id' => $id, 
                'image' => $blog->get_image(),
                'nom' => $blog->get_nom(),
                'description' => $blog->get_description(),
                'date' => $blog->get_date()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
            echo($e);
        }
    }

    function updateBlogWithoutImg($blog, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare("UPDATE $this->tab_name SET nom_blog = :nom, description_blog = :description, date_blog = :date WHERE id_blog = :id");
            $query->execute([
                'id' => $id, 
                'nom' => $blog->get_nom(),
                'description' => $blog->get_description(),
                'date' => $blog->get_date()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
            echo($e);
        }
    }

    function deleteBlog($id)
    {
        $sql = "DELETE FROM $this->tab_name WHERE id_blog = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function generateBlogs($blog) {

        $publicationC = new publicationCon("publication");

        // Fetch data from PDOStatement object and convert it into an array
        $blogPosts = $blog->fetchAll(PDO::FETCH_ASSOC);


        echo '<div id="main" class="col-md-9">';
        for ($i = 0; $i < count($blogPosts); $i += 2) {
            echo '<div class="row">';
            for ($j = $i; $j < min($i + 2, count($blogPosts)); $j++) {
                $publications_nb = $publicationC->countPublications($blogPosts[$j]['id_blog']);
                echo '<div class="col-md-6">';
                echo '<div class="single-blog">';
                echo '<div class="blog-img">';
                echo '<a href="../../../views/front/gestion publication/blog-post.php?id='. $blogPosts[$j]['id_blog']. '">';
                #echo '<img src="' . $blogPosts[$j]['image_blog'] . '" alt="">';
                echo '<img src="data:image/jpeg;base64,' .  base64_encode($blogPosts[$j]['image_blog']) . '" alt="Blog Photo" class="img-fluid">';
                echo '</a>';
                echo '</div>';
                echo '<h4><a href="../../../views/front/gestion publication/blog-post.php?id='.$blogPosts[$j]['id_blog'].'">' . $blogPosts[$j]['nom_blog'] . '</a></h4>';
                echo '<p>'. $blogPosts[$j]['description_blog'] . '</p>';
                echo '<div class="blog-meta">';
                echo '<div class="pull-right">';
                echo '<span>' . $blogPosts[$j]['date_blog'] . '</span>';
                echo '<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> '.  $publications_nb . '</a></span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        }
        echo '</div>';
    }

}



?>