
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>jobflex Official Website</title>
    <link rel="stylesheet" href="styles1.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
input[type="text"], input[type="password"] {
  color: black;
}
input[type="text"], input[type="username"] {
  color: black;
}
</style>
  </head>
<header class="">
    
<h2>Formulaire d'envoi d'email</h2>

<form action="sendmail.php" method="post">
  <label for="username">Nom d'utilisateur:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Mot de passe:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="submit" value="Envoyer l'email">
</form>
</header>
</body>


</footer>
</html>