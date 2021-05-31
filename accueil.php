<?php
    include "../../communsFiles/test.php";
    include "../../BD/dbConnexion.php";
    /*include "../../CommunsFiles/footer.php";*/
    //connexion bd:
    $connexion=new DBConnection();

    $requete='SELECT count(*) FROM stagiaire where id_user='.$_SESSION['id_user'];
    $nb_stagiaire=$connexion->getOne($requete);

    $requete1='SELECT count(*) FROM offre where id_user='.$_SESSION['id_user'];
    $nb_offre=$connexion->getOne($requete1);

    $requete2='SELECT count(*) FROM stage where id_user='.$_SESSION['id_user'];
    $nb_stage=$connexion->getOne($requete2);

    $requete3='SELECT count(*) FROM encadrant where id_user='.$_SESSION['id_user'];
    $nb_encd=$connexion->getOne($requete3);


?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Acceuil</title>
        <!--mon css-->
        <link rel="stylesheet" href="style.css">
        <!--lien Bootsrap-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!--lien Font awesome-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!--lien dataTable.css-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <!--navigation menu-->
        <!--nav-->
        <?php include("../../communsFiles/nav.php"); ?>
        <!--end-->
        
        <!--dashboard heading-->
        <div class=" py-3 text-white" style="background-color: #537895;">
            <h4>&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Accueil</h4>
        </div>
    
        <div class="cards container">
            <div class="heading">
                <h2 style=" background:#3f0d12;/*linear-gradient(315deg, #3f0d12 0%, #a71d31 74%)*/border-radius:6px;" class="title text-white p-2"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Statistiques générales</h2>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h1>Stagiaires</h1>
                    </div>
                <div class="card-body">
                
                <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                    <p style="font-size: 35px;font-weight:bold"><?php echo $nb_stagiaire['count(*)']; ?> <br>stagiaires</p>
                    <a href="../gestionStagiaires/listeStagiaires.php" class="btn">Consulter</a>
                </div>
            </div>
            <div class="card">
                    <div class="card-header">
                        <h1>Stages</h1>
                    </div>
                <div class="card-body">
                    <i class="fa fa-briefcase fa-3x" aria-hidden="true"></i>
                    <p style="font-size: 35px;font-weight:bold"><?php echo $nb_stage['count(*)']; ?> <br>stages</p>
                    <a href="../gestionStages/listeStages.php" class="btn">Consulter</a>
                </div>
            </div>
            <div class="card">
                    <div class="card-header">
                        <h1>Offres</h1>
                    </div>
                <div class="card-body">
                    <i class="fa fa-id-card-o fa-3x" aria-hidden="true"></i>
                    <p style="font-size: 35px;font-weight:bold"><?php echo $nb_offre['count(*)']; ?> <br>Offre</p>
                    <a href="../gestionOffres/listeOffres.php" class="btn">Consulter</a>
                </div>
            </div>
            <div class="card">
                    <div class="card-header">
                        <h1>Encadrants</h1>
                    </div>
                <div class="card-body">
                    <i class="fa fa-user-o fa-3x" aria-hidden="true"></i>
                    <p style="font-size: 35px;font-weight:bold"><?php echo $nb_encd['count(*)']; ?> <br>Encadrants</p>
                    <a href="../gestionStages/listeEncadrants.php" class="btn">Consulter</a>
                </div>
            </div>
            
        
        
        </div>
  
        <!--script jquery-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!--script bootsrap-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!--script dataTable-->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <?php include "../../CommunsFiles/footer.php";?>

        
    </body>
</html>
