<?php include 'connexion.php'; ?>
<?php include 'header.php'; ?>

<div class="form-container">
<h2>Ajouter Consultation</h2>

<form method="POST">

<div class="form-group">
<label>Patient</label>
<select name="patient">
<option value="">-- Choisir un Patient --</option>
<?php
$req = oci_parse($conn, "SELECT ID_PATIENT, NOM||' '|| PRENOM AS NOM_COMPLET FROM PATIENT ORDER BY ID_PATIENT DESC");
oci_execute($req);
while ($p = oci_fetch_assoc($req)) {
    echo "<option value='".$p['ID_PATIENT']."'>".$p['NOM_COMPLET']."</option>";
}
?>
</select>
</div>

<div class="form-group">
<label>Médecin</label>
<select name="medecin">
<option value="">-- Choisir un Medecin --</option>
<?php
$req = oci_parse($conn, "SELECT ID_MEDECIN, NOM , SPECIALITE FROM MEDECIN ORDER BY NOM ASC");
oci_execute($req);
while ($m = oci_fetch_assoc($req)) {
    echo "<option value='".$m['ID_MEDECIN']."'>"
     .$m['NOM']." (".$m['SPECIALITE'].")"
     ."</option>";
}
?>
</select>
</div>

<div class="form-group">
<label>Date</label>
<input 
type="date" 
name="date"
value="<?php echo date('Y-m-d'); ?>"
min="<?php echo date('Y-m-d'); ?>">
</div>

<div class="form-group">
<label>Motif</label>
<input type="text" name="motif">
</div>

<div class="form-group">
<input type="submit" value="Ajouter">
</div>

</form>


<?php
if ($_POST) {

    $sql = "INSERT INTO CONSULTATION 
            (ID_CONSULTATION, ID_PATIENT, ID_MEDECIN, DATE_CONSULTATION, MOTIF, STATUT)
            VALUES 
            (SEQ_CONSULTATION.NEXTVAL, :patient, :medecin, TO_DATE(:date_cons, 'YYYY-MM-DD'), :motif, :statut)";

    $stid = oci_parse($conn, $sql);

    oci_bind_by_name($stid, ":patient", $_POST['patient']);
    oci_bind_by_name($stid, ":medecin", $_POST['medecin']);
    oci_bind_by_name($stid, ":date_cons", $_POST['date']);
    oci_bind_by_name($stid, ":motif", $_POST['motif']);
    oci_bind_by_name($stid, ":statut", $_POST['statut']);

    if (oci_execute($stid)) {
        echo "<p style='color:green;'>Consultation ajoutée ✔️</p>";
    } else {
        $e = oci_error($stid);
        echo "<p style='color:red;'>Erreur : ".$e['message']."</p>";
    }
}
?>
</div>

<?php include 'footer.php'; ?>