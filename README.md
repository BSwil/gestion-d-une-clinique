# 🏥 Gestion de Clinique Médicale - Projet de Fin de Module

Application web développée dans le cadre d'un projet de fin de module. Elle permet la gestion complète d'une clinique médicale : patients, médecins, consultations, avec un tableau de bord et des analyses de données.

## 📚 Contexte du projet

Ce projet a été réalisé en fin de module dans le cadre de ma formation. L'objectif était de développer une application web fonctionnelle pour la gestion d'une clinique, combinant la manipulation d'une base de données relationnelle, une interface utilisateur intuitive, et des outils d'analyse de données.

## ✨ Fonctionnalités

### Gestion des patients
- ➕ **Ajouter un patient** - Enregistrement des informations personnelles
- 📋 **Liste des patients** - Consultation et recherche

### Gestion des médecins
- 👨‍⚕️ **Ajouter un médecin** - Enregistrement des praticiens et spécialités
- 📋 **Liste des médecins** - Annuaire du personnel médical

### Gestion des consultations
- 📝 **Ajouter une consultation** - Enregistrement des rendez-vous, diagnostics et prescriptions
- 📋 **Liste des consultations** - Historique des consultations

### Tableau de bord et analyses
- 📊 **Dashboard** - Vue d'ensemble de l'activité de la clinique
- 📈 **Rapports Power BI** - Analyses avancées (fichiers `pbi.pbix` et `pbi2.pbix`)

## 🛠️ Technologies utilisées

- **Backend** : PHP
- **Frontend** : HTML5, CSS3, JavaScript
- **Base de données** : MySQL / MariaDB
- **Dashboard** : Power BI (fichiers .pbix)
- **Thème** : Configuration personnalisée (`theme.json`)

## 📁 Structure du projet
```
gestion-d-une-clinique/
│
├── index.php
├── dashboard.php
├── connexion.php
├── header.php
├── footer.php
├── base.sql
├── theme.json
│
├───── Gestion patients/
│ ├── ajouter_patient.php
│ └── liste_patients.php
│
├───── Gestion médecins/
│ ├── ajouter_medecin.php
│ └── liste_medecins.php
│
├───── Gestion consultations/
│ ├── ajouter_consultation.php
│ └── liste_consultations.php
│
└───── Analyses Power BI/
├── pbi.pbix
└── pbi2.pbix
```
text


## 🚀 Installation

### Prérequis
- Serveur web local (XAMPP / WAMP / MAMP)
- PHP 7.0 ou supérieur
- MySQL / MariaDB
- Power BI Desktop (optionnel, pour visualiser/éditer les rapports .pbix)

### Étapes d'installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/BSwil/gestion-d-une-clinique.git

Placez ensuite le dossier dans le répertoire de votre serveur web (ex: htdocs/ pour XAMPP)

Configurer la base de données

  Lancez phpMyAdmin

  Créez une base de données

  Importez le fichier base.sql (schéma et données initiales)

  Modifiez le fichier connexion.php avec vos identifiants

Accéder à l'application

  Ouvrez votre navigateur

  Rendez-vous sur http://localhost/gestion-d-une-clinique

📖 Utilisation
Page	Rôle
index.php	Page d'accueil de l'application
dashboard.php	Tableau de bord avec indicateurs clés
ajouter_patient.php	Formulaire d'ajout de patient
liste_patients.php	Consultation et recherche de patients
ajouter_medecin.php	Formulaire d'ajout de médecin
liste_medecins.php	Annuaire des médecins
ajouter_consultation.php	Enregistrement d'une consultation
liste_consultations.php	Historique des consultations
📊 Analyse de données

Les fichiers pbi.pbix et pbi2.pbix sont des rapports Power BI connectés à la base de données. Ils permettent d'analyser visuellement :

  Le nombre de consultations par médecin

  Les motifs de consultation les plus fréquents

  L'évolution de l'activité dans le temps

  D'autres KPI pertinents pour la gestion d'une clinique

👨‍🎓 Auteur

BSwil - Projet réalisé dans le cadre d'un module de formation
🙏 Remerciements

À mon enseignant / formateur pour l'encadrement, les conseils et les compétences transmises tout au long de ce module.
