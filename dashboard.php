<?php include 'connexion.php'; ?>
<?php include 'header.php'; ?>

<h2>Dashboard</h2>

<?php
$sql = "SELECT COUNT(*) AS NB FROM CONSULTATION WHERE STATUT='EN_ATTENTE'";
$stid = oci_parse($conn, $sql);
oci_execute($stid);
$row = oci_fetch_assoc($stid);
?>

<div style="background:white;padding:20px;border-radius:5px;">
    <h3>Consultations en Attente</h3>
    <p style="font-size:20px;color:red;">
       (<?php echo $row['NB']; ?>)
    </p>
</div>

<?php include 'footer.php'; ?>