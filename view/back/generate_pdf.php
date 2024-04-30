
<?php
require_once('vendor/autoload.php');

// Créer une nouvelle instance de PDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Définir les informations du document PDF
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Raychaimaen');
$pdf->SetTitle('Export des reclamations avec état Approved');

// Définir l'en-tête et le pied de page
$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// Définir les polices d'en-tête et de pied de page
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Ajouter une page
$pdf->AddPage();

// Connexion à la base de données
$host = "localhost";
$db = "projetweb2a";
$user = "root";
$pass = "";
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$query = $conn->prepare("SELECT id, sujet, etat, contenu FROM reclamation WHERE etat = :etat order by id");
$query->bindValue(':etat', 'Approved', PDO::PARAM_STR);
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Créer le contenu du tableau
$content = '';
foreach($result as $row) {
    $content .= '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['etat'].'</td>
        <td>'.$row['sujet'].'</td>
        <td>'.$row['contenu'].'</td>
    </tr>';
}

// Créer le tableau HTML
$html = '<table border="1" cellspacing="3" cellpadding="4">
    <tr>
        <th>ID</th>
        <th>ETAT</th>
        <th>Sujet</th>
        <th>contenu</th>
    </tr>'.$content.'
</table>';

// Écrire le tableau HTML dans le PDF
$pdf->writeHTML($html, true, false, true, false, '');
ob_end_clean();
// Fermer et sortir le document PDF
$pdf->Output('export.pdf', 'I');
?>