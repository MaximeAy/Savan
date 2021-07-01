<!doctype html>
<html class="no-js" lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
      
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        
        <title>ZAKA</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/images/icon.jpg"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!--flat icon css-->
		<link rel="stylesheet" href="assets/css/flaticon.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        
		<link rel="stylesheet" href="{{'assets/bootstrap/css/bootstrap.min.css'}}">
		<!-- bootsnav-->
		<!-- <link rel="stylesheet" href="assets/css/bootsnav.css" > -->
		<link rel="stylesheet" href="{{'assets/css/bootsnav.css'}}">
        
        <!--style-->
        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
		<link rel="stylesheet" href="{{'assets/css/style.css'}}">
        
        <!--responsive-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        
    </head>
	
	<body>
		
		
		
		<header class="top-area">
			<div class="header-area">
				<!-- Debut de nav -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			           
			            <div class="navbar-header">
			                
			                <a class="navbar-brand" href="index.html">zaka</a>
			            </div>	           
			           
			            <div>
			                <ul class="mb-4" data-in="fadeInDown" data-out="fadeOutUp">
								
									<li class="p-5" ><a href="#ajouter">Ajouter</a></li>
									<li class="p-5"><a href="#liste">Liste</a></li>
									<li class="button">
									<a href="/deconnexion" class="p-2 btn btn-primary">Deconnexion</a>
								</li>							
			                </ul>
			            </div>
			        </div>
			    </nav>
			    <!-- Fin de nav -->
			</div>

		    <div class="clearfix"></div>

		</header>
		
	
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>ZAKA</h2>
							<p>GERER VOS MAISONS EN LOCATION</p>
						</div>
					</div>
				</div>
			</div>

		</section>
		

	
		<section id="ajouter" class="education">
			<div class="section-heading text-center">
				<h2>Ajouter</h2>
				<section class="bg">
					<div class="container-fluid mt-5">
					  <div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xd-12 px-20 mb-5">
						  <div class="sectright"> 
							<img class="container-fluid p-0" src="img/agence.jpg" alt="">
						  </div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xd-12">
						  <h3 class="text-center">AJOUTER UN LOCATAIRE</h3>
						  <form class="col-lg-12 col-md-12 col-sm-12 col-xd-12 mt-5  mb-5 pt-3" action="/liste" method="post">
						  {{ csrf_field() }}
						  <div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Nom:</label>
							  <div class="col-sm-8">
								<input type="text" name="nom" class="form-control form-control-lg" id="colFormLabelLg" required>
							  </div>
							</div>
							<div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Prenom:</label>
							  <div class="col-sm-8">
								<input type="text" name="prenom" class="form-control form-control-lg" id="colFormLabelLg" required>
							  </div>
							</div>
							<div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg  bg-white b">Contact:</label>
							  <div class="col-sm-8">
								<input type="text" name="contact" class="form-control form-control-lg" id="colFormLabelLg" required>
							  </div>
							</div>
							<div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Coordonées de la cour:</label>
							  <div class="col-sm-8">
								<input type="text" name="coord_cour" class="form-control form-control-lg border" id="colFormLabelLg"
								  required>
							  </div>
							</div>
							<div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Coordonées de la maison:</label>
							  <div class="col-sm-8">
								<input type="text" name="coord_maison" class="form-control form-control-lg border" id="colFormLabelLg"
								  required>
							  </div>
						  		</div>
								  <div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Role:</label>
							  <div class="col-sm-8">
								<input type="text" name="role" class="form-control form-control-lg border" id="colFormLabelLg"
								  required>
							  </div>
						  		</div>
						  			</div>

							<div class="text-center" style="margin-left: 50%;">
							  <button type="submit" class="btn btn-primary  mt-10 mb-3">Ajouter</button>
							</div>
						  </form>
						</div>
					  </div>
					</div>
				  </section>
			
				 
				 
				  <section id="ajouter" class="education">
			<div class="section-heading text-center">
				<section class="bg">
					<div class="container-fluid mt-5">
					  <div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xd-12 px-20 mb-5">
						  <div class="sectright"> 
							<img class="container-fluid p-0" src="img/mm.jpg" alt="">
						  </div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xd-12">
						  <h3 class="text-center">AJOUTER UNE COUR</h3>
						  <form class="col-lg-12 col-md-12 col-sm-12 col-xd-12 mt-5  mb-5 pt-3" action="/cour" method="post">
						  {{ csrf_field() }}
						  <div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-whkite">Cour commune ou cour unique:</label>
							  <div class="col-sm-8">
								<input type="text" name="type_cour" class="form-control form-control-lg" id="colFormLabelLg" required>
							  </div>
							</div>
							<div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Coordonées de la cour:</label>
							  <div class="col-sm-8">
								<input type="text" name="coord_cour" class="form-control form-control-lg" id="colFormLabelLg" required>
							  </div>
							</div>
							<div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg  bg-white b">Coordonées de la maison:</label>
							  <div class="col-sm-8">
								<input type="text" name="coord_maison" class="form-control form-control-lg" id="colFormLabelLg" required>
							  </div>
							</div>
							<div class="form-group row pl-2">
							  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Nom et Prenom du bailleur:</label>
							  <div class="col-sm-8">
								<input type="text" name="coord_bailleur" class="form-control form-control-lg border" id="colFormLabelLg"
								  required>
							  </div>
							</div>
							<div class="form-group row pl-2">
							 	 <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Nom et Prenom du locataire:</label>
								<div class="col-sm-8">
									<input type="text" name="coord_locataire" class="form-control form-control-lg border" id="colFormLabelLg"
									required>
								</div>
						  	</div>
		
						  			</div>

							<div class="text-center" style="margin-left: 50%;">
							  <button type="submit" class="btn btn-primary  mt-10 mb-3">Ajouter</button>
							</div>
						  </form>
						</div>
					  </div>
					</div>
				  </section>
			

		<!--Liste-->
		<div class="container">
		<section id="liste" class="skills" mt-10>
				<div class="skill-content">
					<div class="section-heading text-center">
						<h2>Liste des locataires et bailleurs</h2>
					
				<div class="table table-responsive p-0 mt-5">

					<table class="table bg-dark">
							
						<thead class="text-white">
							<tr class="btn-sm text-center">
									<th scope="col">Nom</th>
									<th scope="col">Prenom</th>
									<th scope="col">Contact</th>
								    <th scope="col">Coordonées de la cour</th>
									<th scope="col">Coordonées de la maison</th>
									<th scope="col">Role</th>
									<th scope="col">Option</th>
								</tr>
						</thead>
							<tbody>
							
							@foreach($locataires as $locataire) 
							<div class="">
							<tr class=" tablecolor text-white">
								<td>{{$locataire->nom}}</td>
								<td>{{$locataire->prenom}}</td>
								<td>{{$locataire->contact}}</td>
								<td>{{$locataire->coord_cour}}</td>
								<td>{{$locataire->coord_maison}}</td>
								<td>{{$locataire->role}}</td>
								<td>
								<form action="{{route('liste.destroy' , $locataire->id)}}" method="POST"  onclick='return confirm("Etes vous sur de vouloir supprimer ?");'> 
									@csrf 
									@method('DELETE')
									<button  class='btn btn-danger'>Supprimer</button>
								</form>
								</td>
							
							</tr>
							</div>
							@endforeach
							</tbody>

					</table>

				</div>



				</div>
			</div>	

		
		
		</section>
		</div>

		<div class="container">
		<section id="liste" class="skills" mt-10>
				<div class="skill-content">
					<div class="section-heading text-center">
						<h2>Liste des cours/maisons</h2>
					
				<div class="table table-responsive p-0 mt-5">

					<table class="table table-hover bg-dark">
							
						<thead class="text-white">
							<tr class="btn-sm text-center">
									<th scope="col"> Type de cour</th>
									<th scope="col">Coordonées de la cour</th>
									<th scope="col">Coordonées de la maison</th>
								    <th scope="col">Nom et prenom du bailleur</th>
									<th scope="col">Nom et prenom du locataire</th>
									<th scope="col">Option</th>
								</tr>
						</thead>
							<tbody>
							
							@foreach($cours as $cour) 
							<tr class="text-center tablecolor text-white">
								<td>{{$cour->type_cour}}</td>
								<td>{{$cour->coord_cour}}</td>
								<td>{{$cour->coord_maison}}</td>
								<td>{{$cour->coord_bailleur}}</td>
								<td>{{$cour->coord_locataire}}</td>
								<td>
								<a href="delete/{{$cour->id}}" onclick='return confirm("Etes vous sur de vouloir supprimer ?");'>  <button type="button"  class='btn btn-danger'>Supprimer</button></a>
								</td>
							
							</tr>
							@endforeach
							</tbody>

					</table>

				</div>



				</div>
				   	</div>	

		
		
		</section>
		</div>


		<!--Liste -->

		
		<!--footer-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
						&copy; ZAKA. designé et developpé par AYMAR
					</p>
				</div>
			</div>

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" ></i>
				</div>
				
			</div>
			
        </footer>
		<!--footer-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="assets/js/progressbar.js"></script>

		<!-- appear js -->
		<script src="assets/js/jquery.appear.js"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>