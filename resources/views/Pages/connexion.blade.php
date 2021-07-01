<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/auth.css">
  </head>
  <body>
<div class="login-box">
<form class="box" action="/accueil" method="get">

{{ csrf_field() }}


  <h1>Connexion</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="email" name="email" placeholder="E-mail" value="{{old('email')}}">
    @if($errors->has('email'))
  <p>{{ $errors->first('email') }}</p>
  @endif
   
  </div>


  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="mdp" placeholder="Mot de passe">
    @if($errors->has('mdp'))
  <p>{{ $errors->first('mdp') }}</p>
  @endif
  </div>



  <input type="submit" name="" class="btn" value="Connectez-vous">
  <h3>Vous n'avez pas de compte ? Inscrivez vous <a href="/inscription">ici</a></h3>
</form>
</div>
  </body>
</html>
