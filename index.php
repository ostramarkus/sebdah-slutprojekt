<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastian slutprojekt</title>
<style>



form {
    background-color: pink;
    width: 400px;
    margin: auto;
    margin-top: 100px;
    
    width: 400px;
    height: 300px;
    background-color: pink
    border: 1px solid black;
    padding: 10px;

    margin: 0 auto;
    border-radius: 15px;
    font-family: fantasy;

}

#form-content {
    width: 250px;
    margin: auto;
    margin-top: 50px;
    
}

input {
    width: 100%;
}

input[type="submit"] {
    width: 50%;
    margin: auto;
    display: block;
}

h2 {
    text-align: center;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
}



</style>
</head>

<body class="page2">

    </div>
</form>

<form action="register.php" method="post">
        <h2>Skapa ditt konto</h2>
        <p><input type="text" name="username" placeholder="Användarnamn"></p>
        <p><input type="password" name="password" placeholder="Lösenord"></p>
        <p><input type="email" name="email" placeholder="E-post"></p>
        <p><input type="submit" value="Skapa konto"></p>
    </form>

    <form action="login.php" method="post">
        <h2>Logga in</h2>
        <p><input type="text" name="username" placeholder="Användarnamn"></p>
        <p><input type="password" name="password" placeholder="Lösenord"></p>
        <p><input type="submit" value="Logga in"></p>
    </form>  

</body>
</html>
