<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	
</head>
<body>
    <div id="login">

        <form action="database.php" method="POST">

                <p><span class="fontawesome-user"></span><input type="text" placeholder="Name" name="name"></p> 

                <p><span class="fontawesome-user"></span><input type="text" placeholder="Email" name="email"></p> 
                
                <p><span class="fontawesome-lock"></span><input type="password" placeholder="Password" name="pass"></p> 
            
                <input type="submit" name="send" value="ВОЙТИ">

        </form>

        <p>Нет аккаунта? &nbsp;&nbsp;<a href="registration.php">Регистрация</a><span class="fontawesome-arrow-right"></span></p>
    </div>
</body>
</html>