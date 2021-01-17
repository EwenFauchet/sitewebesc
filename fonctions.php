<?php
	function EnteteTitrePage($titre){
?>	
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>ASPTT Lannion Escrime FAQ</title>
    <link href="projet.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<?php
	}// fin entete
?>

<?php
	function menu(){
?>	

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Index.php"><img src="photos/Logo3.PNG" width="75" alt="Image Danse"/> Lannion ESC </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Membres.php">Membres</a>
            </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="FAQ.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FAQ</a>
              <div class="dropdown-menu" aria-labelledby="dropdown05">
                <a class="dropdown-item" href="FAQ.php#question">Questions</a>
                <a class="dropdown-item" href="FAQ.php#liens">Liens</a>
                <a class="dropdown-item" href="FAQ.php#gmpa">Adresse</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Recherche">
          </form>
        </div>
      </nav> 

<?php
	}// fin entete
?>


<?php
	function index_1(){
?>	
   <aside id="carousel">
	 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
   		 <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    	<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    	<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
 	</ol>
  		<div class="carousel-inner">
    	<div class="carousel-item active">
   		   <img src="photos/logo.png"  class="d-block w-100" alt="logo">
   		   <div class="carousel-caption d-none d-md-block">
    	    
   	   </div>
   	 </div>
   	 <div class="carousel-item">
   	   <img src="photos/mat_car.png" class="d-block w-100" alt="sweat">
    	  <div class="carousel-caption d-none d-md-block">
     	 
   	  	 </div>
   		</div>
   	 <div class="carousel-item">
     	 <img src="photos/escrime.png" class="d-block w-100" alt="escrime">
    	  <div class="carousel-caption d-none d-md-block">
     	  
     	 </div>
    	</div>
 	 </div>
  	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
 	   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  	  <span class="sr-only">Previous</span>
 	 </a>
 	 <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
   	 <span class="carousel-control-next-icon" aria-hidden="true"></span>
   	 <span class="sr-only">Next</span>
 	 </a>
	</div>
	</aside>
<?php
	}// fin entete
?>	

<?php
	function index_2(){
?>		
		<aside id="grille">
		<div class="shadow p-3 mb-5 bg-white rounded">
			<h1> Bonjour et Bienvenue sur notre site! </h1>
			</div>
			<section class="row">;
			<article class="col-sm-3 col-md-3 col-lg-8 ">
			
			<aside>
			<div class="shadow p-3 mb-5 bg-white rounded">
					<h2>Présentation Club </h2>
							<p> Bonjour et bienvenue sur notre site de Lannion ESC, un site consacré à son club et à son sport, l'escrime!</p>
							<p> Tout d'abord le terme « escrime » est issu de l’ancien français « escremie » lui-même dérivé du francique « skirmjan » signifiant : défendre, protéger. L’escrime est un art de défense, et plus spécifiquement l’art de se défendre avec une arme blanche, l’épée, le sabre et le fleuret.</p>
							<p> Le but est simple, il s’agit de toucher un adversaire avec la pointe ou le tranchant de son arme sur les parties valables sans être touché.</p>
							<p> L'escrime est l'un des seuls rare sport où l'arbritage se fait en Français par ses différents ordre comme par exemple « En Garde ! Prêts ? Allez ! Halte ! »</p>
							<p> Dans notre club, nous accueillons du plus simple débutant aux experts ainsi que les personnes à mobilités réduites. Nos avons des cours adaptés pour tous les âges à partir de 5 ans, du niveau débutant aux cours pour les experts. </p>
			</div>
			</aside>
			<aside>
			<div class="shadow p-3 mb-5 bg-white rounded">
			<h2>Les licences annuelles</h2>
       		<?php
			tab_prix();
			?>
			<p> </p>
			<h2>Les horaires des différents cours</h2>
			<?php
			tab_hor();
			?>
			</div>
			</aside>
			
			<aside>
			<div class="shadow p-3 mb-5 bg-white rounded">
				<aside id="audio">
				<h2> Liens youtube audio</h2>
				<h3> Audio bruits de fleret</h3>
				<audio controls
						src="medias/bruit_de_fleret_.mp3">
            			Your browser does not support the
        				    <code>audio</code> element.
			
				</audio>		
				</aside>

			<aside id="vidéo">
			<h3> Vidéo combat Escrime</h3>
			<video controls>
				<source src="medias/escrime.mp4" type="video/mp4">
				<source src="medias/escrime.webm" type="video/webm">
				<p>Votre navigateur ne prend pas en charge les vidéos HTML5.
				Voici .</p>
			</video>
			</aside>
	
			<aside id="youtube">
			<h3> Quart de finale de sabre avec M.BRUNET J0 Rio de Janeiro 2016</h3>
				<div class="embedresize">
            <div>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/rMPipFaDNNo" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
			</aside>
			</div>
	
			 </aside>
		</article>
			<article class="col-sm-1 col-md-2 col-lg-3" id="sweat">
			<div class="shadow p-3 mb-5 bg-white rounded">
			<h3> Les vêtements appartenant au club</h3>
			<h4> Le sweat: Taille XXS à XL</h4>
			<img src="photos/sweat.PNG" width="200" alt="Image escime">
			<p>Prix: 20€</p>
			<h4> Tee-Shirt Enfant: Taille XXS à S</h4>
			<img src="photos/tee-shirt_enf.PNG" width="150" alt="Image enf1">
			<img src="photos/tee_shirt_en2.PNG" width="150" alt="Image enf2">
			<p>Prix: 10€</p>
			<h4> Tee-shirt Unisex: XXS à XL</h4>
			<img src="photos/tee-shirt_h1.PNG" width="150" alt="Image u1">
			<img src="photos/tee-shirt_h2.PNG" width="150" alt="Image u2">
			<p>Prix: 15€</p>
			<h4> Jogging: Taille 34 à 60</h4>
			<img src="photos/JOGGING.PNG" width="200" alt="Image jogging">
			<p>Prix: 12€</p>
			<h4> Tour de Cou:Enfant et Adulte</h4>
			<img src="photos/tour_cou.PNG" width="200" alt="Image tour_de_cou">
			<p>Prix: 5€</p>
			<h4> Isotherme </h4>
			<img src="photos/iso_1.PNG" width="100" alt="Image isotherme">
			<img src="photos/iso_2.PNG" width="100" alt="Image isotherme">
			<p>Prix: 10€</p>
			<h4> Masque</h4>
			<img src="photos/masque.PNG" width="200" alt="Image masque">
			<p>Prix: 5€</p>
			<h4> Sac de sport</h4>
			<img src="photos/sac_1.PNG" width="150" alt="Image sac1">
			<img src="photos/sac_2.PNG" width="150" alt="Image sac2">
			<p>Prix: 25€</p>
			</div>
			</article>
			</section>
				</aside>

<?php		
}
?>	

<?php
			function tab_prix(){
			
				$sommes=array ( array('Prix' => 'Cours kids', 'Age' => 'De 5 à 9 ans' , 'Nombres de cours' => '2 fois par semaine/1h' , 'Prix annuel' => '145€ + 20€ combinaison'),
				array('Prix' => 'Cours junior débutant', 'Age' => 'De 10 à 18 ans' , 'Nombres de cours' => '3 fois par semaine/1h' , 'Prix annuel' => '165€ + 20€ combinaison'),
				array('Prix' => 'Cours junior expert', 'Age' => 'De 10 à 18 ans' , 'Nombres de cours' => '3 fois par semaine/1h30' , 'Prix annuel' => '165€ + 20€ combinaison'),
				array('Prix' => 'Cours adulte débutant', 'Age' => 'Plus de 18 ans' , 'Nombres de cours' => '2 fois par semaine/1h30' , 'Prix annuel' => '185€ + 20€ combinaison'),
				array('Prix' => 'Cours adulte expert', 'Age' => 'Plus de 18 ans' , 'Nombres de cours' => '3 fois par semaine/2h' , 'Prix annuel' => '185€ + 20€ combinaison'),
				array('Prix' => 'Cours handi-escrime', 'Age' => 'Plus de 12 ans' , 'Nombres de cours' => '2 fois par semaine/1h30' , 'Prix annuel' => '175€ + 20€ combinaison')
				);
						echo '<table>';
						echo '<tr>'; //afficher les entêtes
						foreach($sommes[0] as $cle => $valeur){
						echo '<th>'.$cle.'</th>';
						}	
	
					echo '</tr>';
	
	// deux boucles "foreach" imbriquées (l'une dans l'autre) qui permet
	// d'afficher toutes les valeurs du tableau $personnes
	
	foreach($sommes as $somme){
		echo'<tr>';
		foreach($somme as $valeur){
			echo '<td>'.$valeur.'</td>';
		}
		echo '</tr>';
		
			}
	
	echo '</table>';
	
			}
?>

<?php
			function tab_hor(){
			
				$sommes=array ( array('Cours' => 'Cours kids', 'Horaires' => 'Mercredi 14h à 15h & Samedi 9h à 10h' , 'Lieu' => 'Maison des Sports'),
				array('Cours' => 'Cours junior débutant', 'Horaires' => 'Mercredi 15h à 16h, Vendredi 17h30 à 18h30 & Samedi 10h à 11h' , 'Lieu' => 'Maison des Sports'),
				array('Cours' => 'Cours junior expert', 'Horaires' => ' Mardi 18h à 19h30, Mercredi 19h à 20h30, & Samedi 13h à 14h30' , 'Lieu' => 'Maison des Sports'),
				array('Cours' => 'Cours adulte débutant', 'Horaires' => 'Mardi 20h à 21h30 & Samedi 14h30 à 16h' , 'Lieu' => 'Maison des Sports'),
				array('Cours' => 'Cours adulte expert', 'Horaires' => 'Lundi 18h à 20h, Mercredi 16h30 à 18h30, & Samedi 15h à 17h' , 'Lieu' => 'Maison des Sports'),
				array('Cours' => 'Cours handi-escrime', 'Horaires' => 'Jeudi 18h30 à 20h & Samedi 11h à 12h30' , 'Lieu' => 'Maison des Sports')
				);
						echo '<table>';
						echo '<tr>'; //afficher les entêtes
						foreach($sommes[0] as $cle => $valeur){
						echo '<th>'.$cle.'</th>';
						}	
	
					echo '</tr>';
	
	// deux boucles "foreach" imbriquées (l'une dans l'autre) qui permet
	// d'afficher toutes les valeurs du tableau $personnes
	
	foreach($sommes as $somme){
		echo'<tr>';
		foreach($somme as $valeur){
			echo '<td>'.$valeur.'</td>';
		}
		echo '</tr>';
		
			}
	
	echo '</table>';
	
			}
?>

<?php
			function tab_sec(){
			
				$sommes=array ( array('Jours' => 'Lundi' , 'Horaires' => 'Fermé' ),
				array('Jours' => 'Mardi' , 'Horaires' => '14h-19h'),
				array('Jours' => ' Mercredi' , 'Horaires' => '9h à 12h & 14h-18h'),
				array('Jours' => 'Jeudi', 'Horaires' => '14h-19h'),
				array('Jours' => 'Vendredi', 'Horaires' => '9h à 12h & 14h-18h'),
				array('Jours' => 'Samedi' , 'Horaires' => '9h à 12h & 14h-17h'),
				array('Jours' => 'Dimanche' , 'Horaires' => 'Fermé' )
				);
						echo '<table>';
						echo '<tr>'; //afficher les entêtes
						foreach($sommes[0] as $cle => $valeur){
						echo '<th>'.$cle.'</th>';
						}	
	
					echo '</tr>';
	
	// deux boucles "foreach" imbriquées (l'une dans l'autre) qui permet
	// d'afficher toutes les valeurs du tableau $personnes
	
	foreach($sommes as $somme){
		echo'<tr>';
		foreach($somme as $valeur){
			echo '<td>'.$valeur.'</td>';
		}
		echo '</tr>';
		
			}
	
	echo '</table>';
	
			}
?>

<?php
	function tab_mem(){
?>
			<?php

				$personnes=array ( array('Membres' => 'Nathalie Le Goff', 'Photos' => '<img src="photos/directrice.JPG" width="200" alt="Image directrice" />' , 'Postes' => 'Directrice du club' , 'Mail' => 'nathalie.legoff@esc-lannion.net'),
				array('Membres' => 'Enzo Jezequel', 'Photos' => '<img src="photos/enzo.JPG" width="200" alt="Image enzo" />' , 'Postes' => 'Secrétaire' , 'Mail' => 'secretariat-esc@esc-lannion.net'),
				array('Membres' => 'Tristan Colas', 'Photos' => '<img src="photos/tristan_c.PNG" width="200" alt="Image tristan" />' , 'Postes' => 'Trésorier' , 'Mail' => 'tristan.colas@esc-lannion.net'),
				array('Membres' => 'Maxime Hervé', 'Photos' => '<img src="photos/maxime.PNG" width="200" alt="Image maxime" />' , 'Postes' => 'Responsable administratif' , 'Mail' => 'maxime.herve@esc-lannion.net'),
				array('Membres' => 'Malo Le Berre', 'Photos' => '<img src="photos/malo.JPG" width="200" alt="Image malo" />' , 'Postes' => 'Chargé de communication' , 'Mail' => 'malo.leberre@esc-lannion.net'),
				array('Membres' => 'Lilou Allain', 'Photos' => '<img src="photos/lilou.JPG" width="200" alt="Image lilou" />' , 'Postes' => 'CoDéveloppeur Web et technicienne informatique' , 'Mail' => 'lilou.allain@esc-lannion.net'),
				array('Membres' => 'Ewen Fauchet', 'Photos' => '<img src="photos/ewen.JPG" width="200" alt="Image ewen" />' , 'Postes' => 'CoDéveloppeur Web et administrateur réseau' , 'Mail' => 'ewen.fauchet@esc-lannion.net'),
				array('Membres' => 'Tristan Loheac', 'Photos' => '<img src="photos/tristan_l.PNG" width="200" alt="Image tristan" />' , 'Postes' => 'Manager général' , 'Mail' => 'tristan.loheac@esc-lannion.net'),
				array('Membres' => 'Nolwenn Peltier', 'Photos' => '<img src="photos/nolwenn.PNG" width="200" alt="Image nolwenn" />' , 'Postes' => 'Maître d arme expert' , 'Mail' => 'nolwenn.peltier@esc-lannion.net'),
				array('Membres' => 'Titouan Lesueur', 'Photos' => '<img src="photos/titouan.JPG" width="200" alt="Image Titouan" />' , 'Postes' => 'Maître d arme expert' , 'Mail' => 'Titouan.lesueur@esc-lannion.net'),
				array('Membres' => 'Noémie Lewis', 'Photos' => '<img src="photos/noemie.JPG" width="200" alt="Image Noemie" />' , 'Postes' => 'Maître d arme handi-escrime' , 'Mail' => 'noemie.lewis@esc-lannion.net')
				);
						
					echo '<table class="table">';
							echo '<thead>';
							echo '<tr>';
								foreach($personnes[0] as $cle => $valeur){
								echo '<th scope="row">'.$cle.'</th>';
								}

						echo '</tr>';
						echo '</thead>';

				foreach($personnes as $personne){
					echo'<tr>';
						foreach($personne as $valeur){
					echo '<td scope="col">'.$valeur.'</td>';
				}
				echo '</tr>';

            }

			echo '</table>';

            }
?>
	

<?php
	function FAQ(){
?>

<section>

	<div class="shadow p-3 mb-5 bg-white rounded">
	<aside id="question">
	<h3> Réponses aux diverses questions</h3>
    <div class="row">
      <div class="col-sm-6">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Quels sont les prix annuels?
                </button>
              </h2>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
			  <p> Voici les différents prix annuels pour cette année 2020-2021, les règlements peuvent se faire par chèque ou virement bancaire, pour plus d'informations veuillez envoyer un mail ou contacter le secrétariat.</p>
                <?php
			tab_prix();
			?>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Quels sont les horaires de cours?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
			  
			  <p> Voici différents horaires de cours, pour plus d'informations, envoyer un mail ou contacter le secrétariat</p>
                <?php
			tab_hor();
			?>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Horaires secrétariat
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
			  <p> Le numéro de téléphone du secrétariat 02 96 37 13 51,le mail secretariat-esc@esc-lannion.net et l'adresse du club Maison Des Sports Rue des Cordiers, 23000 Lannion FRANCE</p>

                <?php
			tab_sec();
			?>
              </div>
            </div>
		  </div>
		  <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Les règles de l'escrime
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
			  
			   <h3 id="règles">Les règles de combat :</h3>
				  <p>Au fleuret et au sabre il existe des règles de combat qui définissent les actions prioritaires. Ces armes sont appelées des armes de convention qui donnent la priorité à l'attaque. L'attaque est définie par un allongement du bras et par un mouvement offensif.<br>
				  Contrairement au fleuret et au sabre, il n'y a pas de convention à l'épée.<br>
				  Lorsque les deux tireurs se touchent ensemble, au fleuret et au sabre, ils sont départagés par l'application de la convention, c'est à dire que celui qui déclenche une l'attaque a le point. A l'épée, de part l'absence de convention ils sont tous les deux déclarés « touchés » donc le point est donné à chacun.<br>
				  LA MANIÈRE DE TOUCHER
				  Il existe trois façons de toucher ; soit l'estoc (la pointe), la taille (le tranchant), la contre-taille (le faux tranchant).<br>
				  Si le langage traditionnel préfère utiliser les termes d'estoc de taille ou de contre taille, nous utilisons volontiers les termes de pointe, tranchant et faux tranchant car plus adaptés à l'escrime moderne.<br>
				  Le fleuret est exclusivement une arme de pointe tout comme l'épée, c'est à dire que l'on ne peut toucher qu'avec une pression de la pointe de son arme.<br>
				  Le sabre par contre, est une arme de pointe, certes, mais surtout de tranchant et de faux tranchant, c'est à dire que toute l'arme peut toucher l'adversaire.<br>
				</p>
              </div>
            </div>
		  </div>
		  <div class="card">
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  FEDERATION FRANCAISE D'ESCRIME
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
			  
			  <h5 id="ffe_compétition">FFE Compétition et résultat :</h5>
						<a href="https://www.escrime-ffe.fr/fr/competitions/competitions-resultats.html">Compétition et résultat</a>
									  
			  <h5 id="histoire">HISTOIRE DE LA FÉDÉRATION FRANÇAISE D'ESCRIME:</h5>
			  			<a href=https://www.escrime-ffe.fr/fr/ffe/presentation/histoire.html>HISTOIRE DE LA FÉDÉRATION FRANÇAISE D'ESCRIME</a>

									  
				
              </div>
            </div>
          </div>
        </div>
		 </div>
        </div>
	  
	 </aside>
	 </div>
	<aside id="tab_lien">
	<div class="shadow p-3 mb-5 bg-white rounded">
	<?php
		tab_lien();
	?>
	 </div>
	</aside>
	<aside id="gmpa">
	<div class="shadow p-3 mb-5 bg-white rounded">
		<h2> Adresse du club d'escrime de Lannion </h2>
			<p> Adresse : Rue des Cordiers, 22300 Lannion </p>
			<p> Téléphone : 02 96 37 13 50 </p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5263.562998474796!2d-3.443543649430897!3d48.72876662359859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4812295f7498bba1%3A0x6336f6066e59c423!2sMaison%20des%20Sports%2C%2022300%20Lannion!5e0!3m2!1sfr!2sfr!4v1609167111306!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	 </div>
	</aside>
  </section>

<?php
	}
?>

<?php
	function tab_lien(){
?>
	
		<table id="liens">
			<tr>
				<th>Autres club</th>
				<th>Site du club</th>
			</tr>
			<tr>
				<td>La Rapière de Brest</td>
				<td><a href="http://www.larapieredebrest.com/"><img src="photos/logo-escrime-brest.png" height="50" width="50" alt="logo-escrime-brest" />lien vers le site du club de la rapière de Brest</a></td>
			</tr>
			<tr>
				<td>Rennes etudiant club</td>
				<td><a href="http://www.rec-escrime.fr/"><img src="photos/logo-escrime-rennes.png" height="50" width="50" alt="logo-escrime-rennes" />lien vers le site du club Rec Escrime de Rennes </a></td>
			</tr>
			<tr>
				<td>Pays De Vannes</td>
				<td><a href="http://www.cepvannes.fr"><img src="photos/logo-escrime-vannes.png" height="50" width="50" alt="logo-escrime-vannes" />lien vers le site du club C.e. Pays De Vannes</a></td>
			</tr>
	</table>
<?php
	}
?>

<?php
	function PiedDePage(){
		?>
	<footer>
		<div class="shadow p-3 mb-5 bg-white rounded">
		<p>@ Site internet Club Escrime Lannion, Allain Lilou & Ewen Fauchet</p>
		<a href="index.php" class="button button3">Accueil</a>
        <a href="Membres.php" class="button button3">Membres</a>
        <a href="FAQ.php" class="button button3">FAQ</a>
		</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		</body>
		</html>
	
<?php
	}//fin entete
?>