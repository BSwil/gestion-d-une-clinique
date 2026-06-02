<?php include 'connexion.php'; ?>
<?php include 'header.php'; ?>

<h2>Liste des Patients</h2>
<div class="form-container">
<?php
$sql = "SELECT * FROM PATIENT ORDER BY ID_PATIENT DESC FETCH FIRST 20 ROWS ONLY ";
$stid = oci_parse($conn, $sql);
oci_execute($stid);

while ($row = oci_fetch_assoc($stid)) {
    echo "<div style='padding:10px;border-bottom:1px solid #ddd;'>";
    echo "<strong>".$row['NOM']." ".$row['PRENOM']."</strong><br>";
    echo "CIN : ".$row['CIN'];
    echo "</div>";
}
?>

</div>




<?php include 'footer.php'; ?>