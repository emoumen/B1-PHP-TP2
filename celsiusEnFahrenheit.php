<?php
     define("CONV_ND_PRIX" , 17) ;
     echo "Saisir le nombre d'adultes :"
     $NombreAdultes = fgets( STDIN ) ;
     $Montant = CONV_ND_PRIX * $NombreAdultes ;
     echo "Montant à régler : " , $Montant , "€" ;
?>     
