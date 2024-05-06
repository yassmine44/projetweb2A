<?php
include "../Controller/entrepriseE.php";

$c = new entrepriseE();
$tab = $c->listentreprise();

?>

<center>
    <h1>Liste des entreprises</h1>
    <h2>
        <a href="addentreprise.php">ajouter entreprise</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Id entreprise</th>
        <th>Nom</th>
        <th>domaine</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    foreach ($tab as $entreprise) {
    ?>




        <tr>
            <td><?= $entreprise['identreprise']; ?></td>
            <td><?= $entreprise['nom']; ?></td>
            <td><?= $entreprise['domaine']; ?></td>
            <td align="center">
                <form method="POST" action="updateentreprise.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $entreprise['identreprise']; ?> name="identreprise">
                </form>
            </td>
            <td>
                <a href="deleteentreprise.php?id=<?php echo $entreprise['identreprise']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>