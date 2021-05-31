<?php
  include "../../communsFiles/test.php";
  include "../../BD/dbConnexion.php";
    //connexion bd:
    $connexion=new DBConnection();

    $requete='SELECT * FROM entreprise_user WHERE id='.$_SESSION['id_user'];
    $user=$connexion->getOne($requete);




?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Profile</title>
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
        <div class=" py-3 text-white" style="background-color: teal;">
            <h4>&nbsp;&nbsp;<i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Profile</h4>
        </div>
        <!--form-->
        <div  class="container">
            <form name="myform" class="form-group form" method="POST" action="profileBD.php">
                <h2 class="text-center text-uppercase">Informations d'utilisateur</h2>
                <div class="row jumbotron frame">

                    <div class="col-md-6">
                        <label for="nom">Nom*</label>
                        <input type="text" class="form-control"  name="nom" id="nom" value="<?php echo $user['nom']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom">Prénom*</label>
                        <input type="text" class="form-control"  name="prenom" id="prenom" value="<?php echo $user['prenom']; ?>" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control"  name="email" id="email" value="<?php echo $user['email']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cin">Identifiant*</label>
                        <input type="text" class="form-control"  name="identifiant" id="identifiant" value="<?php echo $user['identifiant']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telephone">Mot de passe</label>
                        <input type="tel" class="form-control" placeholder="Nouveau mot de passe" name="motPasse" id="motPasse">
                    </div>
                    <div class="col-md-6">
                        <label for="telephone">Confirmer le mot de passe</label>
                        <input type="tel" class="form-control" placeholder="Confirmation du mot de passe" name="confirmer" id="confirmer">
                    </div>
                    <div class="col-md-12 text-center formButton">
                        <button type="submit" name="confirmer" class="btn btn-primary" >Confirmer</button>
                        <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                    </div>
                </div>

            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!--script bootsrap-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!--script dataTable-->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        
    </body>
</html>