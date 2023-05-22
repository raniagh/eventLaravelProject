<!DOCTYPE html>
<html>
<head>

</head>

<h5 style="text-align: center">bienvenue sur Lila Jmila</h5>
<h2>Cher {{$name}},</h2><br/>
Vous avez activé votre compte avec succès,<br/>
Ci-dessous, sont les paramètres de votre compte utilisateur :<br/>
<h3>login :{{$username}}<br/>
    Mot de passe :{{$password}}</h3><br/><br/>
<div class="row" style="background: #4db6ac">
    <a href="{{route('users.auth.login')}}">
    <input type="submit" value="se connecter" class="btn btn-success btn-round" style="width: 100%">
    </a>
</div>


<h2>A bientot,</h2>
</body>
 
</html>