<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Liste des livres</title>
<!--

Template 2101 Insertion

http://www.tooplate.com/view/2101-insertion

-->
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="style/bootstrap.min.css">                                            <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="style/fontawesome-all.min.css">                                      <!-- Font awesome -->
  <link rel="stylesheet" href="style/tooplate-style.css">                                           <!-- Templatemo style -->

  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">
       <div class="tm-welcome-section">
      <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-xl-12">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a href="/accueil" class="nav-link tm-nav-link tm-text-white active">Accueil</a>
                </li>
                <li class="nav-item">
                  <a href="/ajout" class="nav-link tm-nav-link tm-text-white">Ajouter un livre</a>
                </li>
                <li class="nav-item">
                  <a href="/liste" class="nav-link tm-nav-link tm-text-white">Liste des livres</a>
                </li>
                <li class="nav-item">
                  <a href="contact.html" class="nav-link tm-nav-link tm-text-white">A Propos</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <i class="fas tm-fa-big fa-book tm-fa-mb-big"></i>
          <h1 class="text-uppercase mb-3 tm-site-name">Liste des livres</h1>
          <!--<p class="tm-site-description">New HTML Website Template</p>-->
        </div>
      </div>

    </div>

    <div class="container">
      <div class="tm-search-form-container">
        <form action="index.html" method="GET" class="form-inline tm-search-form">
          <div class="text-uppercase tm-new-release">Rechercher un livre</div>
          <div class="form-group tm-search-box">
            <input type="text" name="keyword" class="form-control tm-search-input" placeholder="Entrez le nom du livre">
            <input type="submit" value="Rechercher" class="form-control tm-search-submit">
          </div>
        </form>
      </div>
      <div class="table table-responsive p-0 mt-5">

        <table class="table table-hover bg-dark">
           
           <thead class="text-white">
             <tr class="btn-sm text-center">
             <th scope="col">Nom du livre</th>
                <th scope="col">Nom de l'auteur</th>
                <th scope="col">Prenom de l'auteur</th>
                <th scope="col">Pays</th>
                <th scope="col">Date de sortie</th>
                <th scope="col">Type</th>
                <th scope="col">Option</th>
             </tr>
           </thead>
           <tbody>
           
           @foreach($livres as $livre) 
           <tr class="text-center tablecolor">
             <td>{{$livre->nom_livre}}</td>
             <td>{{$livre->nom_auteur}}</td>
             <td>{{$livre->prenom_auteur}}</td>
             <td>{{$livre->pays}}</td>
             <td>{{$livre->date_parution}}</td>
             <td>{{$livre->type}}</td>
             <td>
             <a href="update/{{$livre->id}}"; class='btn btn-success'>Modifier</a>
              <a href="delete/{{$livre->id}}" onclick='return confirm("Etes vous sur de vouloir supprimer ce livre ?");'>  <button type="button"  class='btn btn-danger' >Supprimer</button></a>
             </td>
           </tr>
           </tr>
           @endforeach
           </tbody>
        
        </table>
      
      </div>
   <a href="/ajout"><p class='text-center'><button type="button" class="btn btn-outline-warning">Retour</button></p></a>
        


        <!-- <table class="table col-lg-10 col-sm-12 col-md-12 offset-1">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
              <th scope="col">PAYS</th>
              <th scope="col">FORMATION</th>
              </tr>
            </thead>
            
              <tr> 
                      <tr>
                   
                          <td>['NOM']></td>
                          <td>['PRENOM']></td>
                          <td>
                              <a href=">" class='btn btn-info'>Details</a>
                              <a href='>'; class='btn btn-success'>Modifier</a>
                              <a href='supprimer.php' onclick='return confirm("Etes vous sur de vouloir supprimer cet apprenant ?");' class='btn btn-danger'>Supprimer</a>
                          </td>
                          
                      </tr>
              
               </tr>
               
          -->
              </div>
          <style>
              td{
                  color:white;
              }
              
          </style>



      <!--  <div class="tm-tab-content-container">
          <div class="tab-content h-100 tm-bg-gray" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
              <div class="media tm-media-2">
                <i class="fas fa-5x fa-music mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Quisque pharetra tellus eu mi aliquet</h2>
                  <p class="mb-4">Phasellus efficitur, ante et bibendum accumsan, nisi tellus fermentum eros, eget tincidunt enim orci at arcu. Etiam vel ligula non neque pharetra scelerisque mollis ac arcu.</p>
                  <p class="mb-4">In luctus eu turpis sed sodales. Suspendisse nisi ante, dapibus id purus at, tristique ullamcorper dolor. Nullam tempus quam id odio tempus bibendum. Nullam vulputate, justo fermentum interdum fermentum, diam elit iaculis lorem, sed puvina.</p>
                  <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
              <div class="media tm-media-2">
                <i class="fab fa-5x fa-accusoft mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Nunc nec luctus eu mi aliquet</h2>
                  <p class="mb-4">Phasellus efficitur, ante et bibendum accumsan, nisi tellus fermentum eros, eget tincidunt enim orci at arcu. Etiam vel ligula non neque pharetra scelerisque mollis ac arcu.</p>
                  <p class="mb-4">In luctus eu turpis sed sodales. Suspendisse nisi ante, dapibus id purus at, tristique ullamcorper dolor. Nullam tempus quam id odio tempus bibendum. Nullam vulputate, justo fermentum interdum fermentum, diam elit iaculis lorem, sed puvina.</p>
                  <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
              <div class="media tm-media-2">
                <i class="fab fa-5x fa-amazon-pay mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Etiam vel ligula eu mi aliquet</h2>
                  <p class="mb-4">Phasellus efficitur, ante et bibendum accumsan, nisi tellus fermentum eros, eget tincidunt enim orci at arcu. Etiam vel ligula non neque pharetra scelerisque mollis ac arcu.</p>
                  <p class="mb-4">In luctus eu turpis sed sodales. Suspendisse nisi ante, dapibus id purus at, tristique ullamcorper dolor. Nullam tempus quam id odio tempus bibendum. Nullam vulputate, justo fermentum interdum fermentum, diam elit iaculis lorem, sed puvina.</p>
                  <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
              <div class="media tm-media-2">
                <i class="fas fa-5x fa-headphones mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Sed id magna eu mi aliquet</h2>
                  <p class="mb-4">Phasellus efficitur, ante et bibendum accumsan, nisi tellus fermentum eros, eget tincidunt enim orci at arcu. Etiam vel ligula non neque pharetra scelerisque mollis ac arcu.</p>
                  <p class="mb-4">In luctus eu turpis sed sodales. Suspendisse nisi ante, dapibus id purus at, tristique ullamcorper dolor. Nullam tempus quam id odio tempus bibendum. Nullam vulputate, justo fermentum interdum fermentum, diam elit iaculis lorem, sed puvina.</p>
                  <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>-->
    <footer class="row">
      <div class="col-xl-12">
        <p class="text-center p-4">Copyright &copy; <span class="tm-current-year"></span> SAVAN
        
      </p>
      </div>
    </footer>
  </div> <!-- .container -->

</div> <!-- .main -->

<!-- load JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script> 
<script src="js/bootstrap.min.js"></script><!-- https://jquery.com/ -->
<script>

  /* DOM is ready
  ------------------------------------------------*/
  $(function () {

    if (renderPage) {
      $('body').addClass('loaded');
    }

    $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
  });

</script>
</body>
</html>