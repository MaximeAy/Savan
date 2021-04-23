<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َConnexion</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>

<form class="box" action="/connexion" method="post">
   
{{ csrf_field() }}

  <h1>Connexion</h1>
  <input type="text" name="email" placeholder="Email" value="{{old('email')}}"> 
  @if($errors->has('email'))
  <p>{{ $errors->first('email') }}</p>
  @endif


  <input type="password" name="mdp" placeholder="Mot de passe">
  @if($errors->has('mdp'))
  <p>{{ $errors->first('mdp') }}</p>
  @endif




  <input type="submit" name="" value="Se connecter">
</form>


  </body>
</html>
