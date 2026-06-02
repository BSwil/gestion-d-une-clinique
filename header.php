<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestion Clinique</title>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: #e6f0ff; /* bleu clair */
            font-family: Arial;
            margin: 0;
        }

        .header {
            background-color: #004080; /* bleu foncé */
            padding: 15px;
            color: white;
            text-align: center;
        }

        .menu {
            background-color: #0066cc;
            padding: 10px;
            text-align: center;
        }

        .menu a {
            color: white;
            margin: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .menu a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 20px;
        }

        input, button {
            padding: 8px;
            margin: 5px;
        }
        
        .form-container {
              width: 450px;
              margin: 60px auto;
              background: white;
              padding: 30px;
              border-radius: 15px;
              box-shadow: 0px 5px 20px rgba(0,0,0,0.1);
          }

          /* Centrage des éléments du formulaire */
          .form-group {
              display: flex;
              flex-direction: column;
              align-items: center;
              margin-bottom: 15px;
          }

          .form-group label {
              align-self: flex-start;
              margin-bottom: 5px;
              font-weight: bold;
          }

          input, select {
              width: 90%;
              padding: 10px;
              border-radius: 5px;
              border: 1px solid #ccc;
          }

          button, input[type="submit"] {
              width: 90%;
              padding: 12px;
              background-color: #004080;
              color: white;
              border: none;
              border-radius: 5px;
              font-size: 16px;
              cursor: pointer;
          }

          button:hover, input[type="submit"]:hover {
              background-color: #0066cc;
          }

          h2 {
              text-align: center;
              margin-bottom: 25px;
          }

    </style>
</head>

<body>

<div class="header">
    <h1>Système de Gestion de Clinique</h1>
</div>

<div class="menu">
    <a href="ajouter_patient.php">Ajouter Patient</a>
    <a href="ajouter_consultation.php">Ajouter Consultation</a>
    <a href="liste_consultations.php">Consultations</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="ajouter_medecin.php">Ajouter Médecin</a>
    <a href="liste_patients.php">Patients</a>
    <a href="liste_medecins.php">Médecins</a>
</div>

<div class="container">