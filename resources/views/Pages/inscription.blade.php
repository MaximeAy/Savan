<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/auth.css">
  </head>
  <body>
<div class="login-box">
<form class="box" action="/inscription" method="post">

{{ csrf_field() }}


  <h1>Inscription</h1>
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

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="mdp_confirmation" placeholder="Confirmez votre mot de passe">
    @if($errors->has('mdp_confirmation'))
  <p>{{ $errors->first('mdp_confirmation') }}</p>
  @endif

  </div>

  <input type="submit" name=""  class="btn" value="Inscrivez-vous">
</form>

<h3>Vous avez dejà un compte ? Connectez vous <a href="/connexion">ici</a></h3>
</div>
  </body>
</html>

