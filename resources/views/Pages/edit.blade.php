<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
    <section class="bg">
        <h1 class="text-center pt-5">Bibliothèque</h1>
        <div class="container-fluid mt-5">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xd-12 px-20 mb-5">
              <div class="sectright"> 
                <img class="container-fluid p-0" src="img/bb.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xd-12">
              <h3 class="text-center">Ajouter un livre</h3>
              <form class="col-lg-12 col-md-12 col-sm-12 col-xd-12  mb-5 pt-3" action="/ajout" method="post">
              {{ csrf_field() }}
              <div class="form-group row pl-2">
                  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Nom du livre</label>
                  <div class="col-sm-8">
                    <input type="text" name="nom_livre" class="form-control form-control-lg" id="colFormLabelLg" required>
                  </div>
                </div>
                <div class="form-group row pl-2">
                  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white">Nom de l'auteur</label>
                  <div class="col-sm-8">
                    <input type="text" name="nom_auteur" class="form-control form-control-lg" id="colFormLabelLg" required>
                  </div>
                </div>
                <div class="form-group row pl-2">
                  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg  bg-white b">Prenom de l'auteur</label>
                  <div class="col-sm-8">
                    <input type="text" name="prenom_auteur" class="form-control form-control-lg" id="colFormLabelLg" required>
                  </div>
                </div>
                <div class="form-group row pl-2">
                  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Pays</label>
                  <div class="col-sm-8">
                    <input type="text" name="pays" class="form-control form-control-lg border" id="colFormLabelLg"
                      required>
                  </div>
                </div>
              <div class="form-group row pl-2">
                <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Date de parution de l'oeuvre</label>
                <div class="col-sm-8">
                  <input type="date" name="date_parution" class="form-control form-control-lg border" id="colFormLabelLg" required>
                </div>
              </div>
                <div class="form-group row pl-2">
                  <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg bg-white ">Type de livre</label>
                  <div class="col-sm-8">
                    <input list="Type" name="type" class="form-control form-control-lg" id="colFormLabelLg"
                      required>
                    
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-2 mb-3">Ajouter</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>