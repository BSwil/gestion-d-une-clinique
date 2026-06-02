<?php include 'connexion.php'; ?>
<?php include 'header.php'; ?>

<h2>Consultations du jour</h2>
<div class="form-container">
<?php
$sql = "SELECT C.*, M.NOM as NOM_MEDECIN, P.NOM as NOM_PATIENT  FROM CONSULTATION C inner join MEDECIN M on C.ID_MEDECIN = M.ID_MEDECIN inner join PATIENT P on P.ID_PATIENT = C.ID_PATIENT where C.DATE_CONSULTATION = TRUNC(SYSDATE) order by C.ID_CONSULTATION desc";
$stid = oci_parse($conn, $sql);
oci_execute($stid);

while ($row = oci_fetch_assoc($stid)) {
    echo "<div style='background:white;padding:10px;margin:10px;border-radius:5px;'>";
    echo "ID: " . $row['ID_CONSULTATION'] .
         " | Patient: " . $row['NOM_PATIENT'] .
         " | Medecin: " . $row['NOM_MEDECIN'] .
         " | Statut: " . $row['STATUT'];
    echo "</div>";
}
?>
</div>

<?php include 'footer.php'; ?>