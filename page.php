<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li id="logo"><a href="#">EVEN SHOW LIVRAISON</a></li>
                   <li><i class="fa fa-envelope fa-fw mr-2" contenteditable="false">​</i><span>even_show1416@gmail.com</a></span></li>
                    <li> <a href="https://www.facebook.com/Divema-Shop-103569342386557/"><i class="fa
                            fa-facebook"></i></a></li>
                    <li><a href="http://www.instagram.fr"><i class="fa
                                fa-instagram"></i></a></li>
                </ul>
            </nav>
        </header>
        <center>
<?php
//Récption des base de données dans le formulaire
$Nom=$_POST['nom'];
$Prénoms=$_POST['prenoms'];
$Contact=$_POST['contact'];
$Lieuderécuperationducoli=$_POST['lrc'];
$Lieudelivraisonducoli=$_POST['llc'];
$Typedecoli =$_POST['Type de coli '];
$Contactdudestinataire=$_POST['Contact du destinataire'];
echo "Votre nom est:" .$Nom."<br>Votre prénoms est".$Prénoms."<br>Votre contact est".$Contact."<br>le lieu de récupération du coli est".$Lieuderécuperationducoli."<br>le lieu de livraison du colis est".$Lieudelivraisonducoli."<br>Le type de coli à livrer est".$Typedecoli."<br>Le contact de votre destinataire est".$Contactdudestinataire.;

?>
</center>
<button>Valider</button><button>Annuler</button>

       
       <footer>
           <div id="deuxièmetrait"></div>
           <div id="copyrightetIcons"></div>
           <div id="copyright"></div>
           <span>© copyrightjp14gec(); 2021</span>
           <div id="Icons"></div>
           <a href="http://www.twitter.fr"><i class="fa
               fa-twitter"></i></a>
           <a href="https://www.facebook.com/Divema-Shop-103569342386557/"><i class="fa
                   fa-facebook"></i></a>
           <a href="http://www.instagram.fr"><i class="fa
                       fa-instagram"></i></a>
       </footer>
       <h5 class="mb-3">Rejoignez-nous</h5>
       <ul class="list-unstyled">
           <li><i class="fa fa-comment fa-fw mr-2" contenteditable="false">​</i><span>Contactez-nous</a></span></li>
           <li><i class="fa fa-envelope fa-fw mr-2" contenteditable="false">​</i><span>even_show1416@gmail.com</a></span></li>
           <li><i class="fa fa-phone fa-fw mr-2" contenteditable="false">​</i><span class="o_force_ltr">+225 0788821519</a></span></li>
       </ul>
     
   </body>