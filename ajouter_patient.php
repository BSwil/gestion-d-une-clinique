<?php include 'connexion.php'; ?>
<?php include 'header.php'; ?>

<div class="form-container">
<h2>Ajouter Patient</h2>

<form method="POST">

<div class="form-group">
<label>Nom</label>
<input type="text" name="nom">
</div>

<div class="form-group">
<label>Prénom</label>
<input type="text" name="prenom">
</div>

<div class="form-group">
<label>CIN</label>
<input type="text" name="cin">
</div>

<div class="form-group">
<input type="submit" value="Ajouter">
</div>

</form>
</div>
<?php
if ($_POST) {
    $sql = "INSERT INTO PATIENT VALUES (SEQ_PATIENT.NEXTVAL, :nom, :prenom, :cin, SYSDATE, 'CNSS')";
    $stid = oci_parse($conn, $sql);

    oci_bind_by_name($stid, ":nom", $_POST['nom']);
    oci_bind_by_name($stid, ":prenom", $_POST['prenom']);
    oci_bind_by_name($stid, ":cin", $_POST['cin']);

    oci_execute($stid);
    echo "<p style='color:green;'>Patient ajouté</p>";
}
?>
<?php include 'footer.php'; ?>