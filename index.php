<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/vegas.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="styles/tab.css">-->
    
    
    <!-- <link rel="stylesheet" href="styles/test.css"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css"> -->
    <link rel="stylesheet" href="styles/uikit-rtl.min.css">
    <link rel="stylesheet" href="styles/uikit.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/port.css"> 
</head>
<body class="back">
    <div class="wrapper uk-container-expand">
        <?php require 'apps/header.php'; ?>
        <div class="main">
            <?php require 'apps/aside_recrute.php'; ?>
            <?php require 'apps/fixe.php'; ?>
            <div class="container1 "uk-scrollspy="target: > section; cls: uk-animation-slide-left; delay: 500;repeat: true">
                <?php 
                    require 'apps/section_presentation.php';
                    require 'apps/section_compe.php';
                    require 'apps/section_porte_f.php';                  
                    require 'apps/section_cv.php'; 
                    require 'apps/section_contact.php';?>
                 <div class="flex_mess"uk-sortable="handle: .mess" uk-grid>
                    <?php 
                    require 'apps/test.php'; ?>
                 </div>                 
                 <?php require 'apps/footer.php';?>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script src=" http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<!-- <script type="text/javascript" src="scripts/scrollout.js"></script> -->
<script type="text/javascript" src="scripts/visible.js"></script>
<script type="text/javascript" src="scripts/vegas.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/uikit-icons.min.js"></script>
<script type="text/javascript" src="scripts/uikit.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</html>