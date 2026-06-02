<?php
$conn = oci_connect('PRJUSER', 'ORACLE', 'localhost:1521/XEPDB1', 'AL32UTF8');

if (!$conn) {
    $e = oci_error();
    echo "Erreur connexion : " . $e['message'];
}
?>