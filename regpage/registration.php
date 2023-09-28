<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	
</head>
<body>
    <div id="login">

        <form action="database.php" method="POST">

                <p><span class="fontawesome-user"></span><input type="text" name="name" placeholder="Name"></p> 

                <p><span class="fontawesome-user"></span><input type="text" name="email" placeholder="Email"></p> 

                <p><span class="fontawesome-lock"></span><input type="password" name="pass" placeholder="Password"></p> 
                
                <p><span class="fontawesome-lock"></span><input type="password" name="checkpass" placeholder="Confirm password"></p> 

                <input type="submit" name="send" value="Регистрация">

                <p>Есть аккаунт? &nbsp;&nbsp;<a href="login.php">Вход</a></p>

        </form>
    </div>
</body>
</html>