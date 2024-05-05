<?php
// Inclure vos fichiers de configuration et de classe ici

include_once "C:/xampp/htdocs/Test/us/Controller/user.php";
include_once "C:/xampp/htdocs/Test/us/Model/users.php";

// Vérifier si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire

    // Créer un objet utilisateur avec les nouvelles données
    // Mettre à jour les données de l'utilisateur
    $utilisateur = new user();
    $result = $utilisateur->updateusera($_POST["id"], $_POST["mprenom"], $_POST["mnom"], $_POST["mage"], $_POST["memail"], $_POST["mmdp"], $_POST["mfonction"],$_POST["metat"]);

    if ($result) {
        echo "Les données de l'utilisateur ont été mises à jour avec succès !";
    } else {
        echo "Une erreur s'est produite lors de la mise à jour des données de l'utilisateur.";
    }
} 
    // Vérifier si l'ID de l'utilisateur est présent dans l'URL
    if (isset($_GET['id'])) {
        // Récupérer l'ID de l'URL
        $id = $_GET['id'];
        
        // Créer une instance de l'utilisateur
        $utilisateur = new user();
        
        // Récupérer les données de l'utilisateur par son ID
        $donnees_utilisateur = $utilisateur->getUserById($id);

        // Vérifier si les données de l'utilisateur ont été récupérées avec succès
        if ($donnees_utilisateur) {
            // Extraire les données de l'utilisateur
            $prenom = $donnees_utilisateur['prenom'];
            $nom = $donnees_utilisateur['nom'];
            $age = $donnees_utilisateur['age'];
            $email = $donnees_utilisateur['email'];
            $mdp = $donnees_utilisateur['mdp'];
            $fonction = $donnees_utilisateur['fonction'];
        } else {
            // Gérer le cas où aucune donnée d'utilisateur n'est trouvée pour l'ID donné
            echo "Aucune donnée d'utilisateur trouvée pour cet ID.";
        }
    } else {
        // Gérer le cas où aucun ID d'utilisateur n'est présent dans l'URL
        echo "ID d'utilisateur non spécifié dans l'URL.";
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Utilisateur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
/* Style du formulaire */
.max-w-md {
    background-color: #f0f5f9; /* Couleur de fond */
    padding: 20px; /* Espacement intérieur */
    border-radius: 8px; /* Bord arrondi */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre */
  }

  /* Style des étiquettes */
  .block {
    margin-bottom: 8px; /* Espacement entre les étiquettes et les champs */
  }

  /* Style des champs */
  .mt-1 {
    padding: 8px; /* Espacement intérieur */
    border-radius: 4px; /* Bord arrondi */
    border: 1px solid #cbd5e0; /* Bordure */
  }

  /* Style du bouton */
  .w-full {
    background-color: #4a90e2; /* Couleur de fond */
    border: none; /* Pas de bordure */
    border-radius: 4px; /* Bord arrondi */
    padding: 10px; /* Espacement intérieur */
    color: #fff; /* Couleur du texte */
    cursor: pointer; /* Curseur de la souris */
    transition: background-color 0.3s; /* Transition de couleur au survol */
  }

  /* Au survol du bouton */
  .w-full:hover {
    background-color: #3578dc; /* Couleur de fond au survol */
  }

  /* Style pour l'espacement entre les éléments */
  .mb-4 {
    margin-bottom: 1rem; /* Espacement entre les éléments */
  }
</style>
</head>


<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Modifier Utilisateur</h1>
        <form action="" method="POST" class="max-w-md">
            <div class="mb-4">
                <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom :</label>
                <input type="text" name="mprenom" id="mprenom" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="<?php echo $prenom; ?>">
            </div>
            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-700">Nom :</label>
                <input type="text" name="mnom" id="mnom" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="<?php echo $nom; ?>">
            </div>
            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-700">Âge :</label>
                <input type="text" name="mage" id="mage" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="<?php echo $age; ?>">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
                <input type="email" name="memail" id="memail" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="<?php echo $email; ?>">
            </div>
            <div class="mb-4">
                <label for="mdp" class="block text-sm font-medium text-gray-700">Mot de passe :</label>
                <input type="password" name="mmdp" id="mmdp" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="<?php echo $mdp; ?>">
            </div>
            <div class="mb-4">
                <label for="fonction" class="block text-sm font-medium text-gray-700">Fonction :</label>
                <input type="text" name="mfonction" id="mfonction" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="<?php echo $fonction; ?>">
            </div>
            <div class="mb-4">
                <label for="etat" class="block text-sm font-medium text-gray-700">État :</label>
                <input type="text" name="metat" id="metat" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="<?php echo $etat; ?>">
            </div>
            <div class="mb-4">
                <!-- Champ caché pour stocker l'ID de l'utilisateur -->
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" class="w-full px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200">Modifier</button>
            </div>
            <div>
                <a href="table-datatable-user.php"  class="w-full px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200">retourner à la liste</a>
            </div>
        </form>
    </div>
</body>

</html>


