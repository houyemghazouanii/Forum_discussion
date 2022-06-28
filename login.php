<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<style>
body{
      background-image: url(bg.jpg);
      background-attachment:fixed;
      background-repeat:no-repeat;
      background-size: cover;
}


form {
    width:80%;
    padding: 30px;
    border: 2px solid #9c272f;
    background: #fff;
}

p{
    width: 50%;
    margin: 0 auto;
    
    
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid grey;
    box-sizing: border-box;
}

button[type=submit] {
    background-color: #9c272f;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
button[type=submit]:hover {
    background-color: white;
    color: #9c272f;
    border: 3px solid #ffeecc;
}
</style>
<?php include 'includes/head.php'; ?>
<body>
    
    <br><br>
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
        <br><br>
        <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris</p></a>
        <p><a href="principal.php"><p>Retour à la page d'accueil</a> </p>
    </form>

</body>
</html>