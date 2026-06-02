<?php include 'connexion.php'; ?>
<?php include 'header.php'; ?>

<h2>Liste des Médecins</h2>
<div class="form-container">
<?php
$sql = "SELECT * FROM MEDECIN ORDER BY ID_MEDECIN DESC";
$stid = oci_parse($conn, $sql);
oci_execute($stid);

while ($row = oci_fetch_assoc($stid)) {
    echo "<div style='background:white;padding:10px;margin:10px;border-radius:5px;'>";
    echo $row['NOM'] . " | " . $row['SPECIALITE'];
    echo "</div>";
}
?>
</div>


<?php include 'footer.php'; ?>