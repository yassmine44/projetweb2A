<?php
include "../Controller/entretienC.php";


// Créer une instance de la classe entretienC
$c = new entretienC();
$tab = $c->listentretien();
?>

<center>
    <h1>Listes des entretiens</h1>
    <h2>
        <a href="ajouter.php">ajouter entretien</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>IDE </th>
        <th>Nom</th>
        <th>Email</th>
        <th>titreposte</th>
        <th>daterdv</th>
        <th>langue</th>
        <th>format</th>
        <th>numtel</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php foreach ($tab as $entretien) : ?>
        <tr>
            <td><?= $entretien['IDE']; ?></td>
            <td><?= $entretien['nom']; ?></td>
            <td><?= $entretien['email']; ?></td>
            <td><?= $entretien['titreposte']; ?></td>
            <td><?= $entretien['daterdv']; ?></td>
            <td><?= $entretien['langue']; ?></td>
            <td><?= $entretien['format']; ?></td>
            <td><?= $entretien['numtel']; ?></td>
            <td align="center">
                    <form method="POST" action="updateentretien.php">
                        <input type="submit" name="update" value="update">
                        <input type="hidden" value="<?php echo $entretien['IDE']; ?>" name="IDE">
                    </form>
                </td>
            <td>
            <a href="delete.php?IDE=<?php echo $entretien['IDE']; ?>" class="text-danger">Delete</a>
        
            </td>
            

        </tr>
    <?php endforeach; ?>
</table>