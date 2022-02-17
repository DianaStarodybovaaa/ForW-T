<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <style>
     
.f1{
  /*   align-items: center; */
    margin-left: 450px;
    background-color: #79dfc1;
}

header{
    margin-top: 20px;
    margin-left: 100px;
}

nav{
    margin-left: -450px;
}

.f2{
    width: 400px;
}

.f3{
    margin-top: 100px;
    width: 400px;
}
footer{
    margin-top: 50px;
    margin-left: 150px;
}

 </style>
</head>
<body class="f1">

    
    <?php
    if(isset($_GET['login']) && isset($_GET['password']))
    {
   /*  echo "hi!"; */
    $login = $_GET['login'];
    $password = $_GET['password'];

    $login_avt = $_GET['login_avt'];
    $password_avt = $_GET['password_avt'];
    

    $host = "localhost";
    $user = "root";
    $xamppas = "";
    $bd_name = "tasks";
    $sql_connect = new mysqli($host, $user, $xamppas, $bd_name);
    if($sql_connect -> connect_errno){
        echo $sql_connect -> error;
    }
    $sql = "INSERT INTO users(login, password) VALUES ('$login','$password')";
    $sql_connect -> query($sql);

    if(!$sql_connect -> query($sql)){
        echo $sql_connect -> error;
    }
   
    }

     ?>


    <header>
        <p class="fs-2">registration</p>
            
    </header>

    <nav>
        <ol>
            <li><a href="#" class="link-dark">авторизация</a></li>
            <li><a href="#" class="link-dark">регистрация</a></li>
            <li><a href="#" class="link-dark">главная</a></li>
        </ol>
    </nav>

    <form action="reg.php" method="get">

        <div class="f2">
            <div class="mb-3">
                <label for="login" class="form-label">login</label>
                <input class="form-control" aria-describedby="emailHelp" type="text" name="login" required >
                <!-- pattern="[A-Za-z0-9]+" -->
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
        
                <label for="password" class="form-label">password</label>
                <input class="form-control" aria-describedby="emailHelp" type="text" name="password" >
                <!-- pattern="[A-Za-z0-9!*-_]+" -->
            </div >
        
            <input type="submit" value="готово!" class="btn btn-info"> 
    </div>


    <div class="f3">
        <p>авторизация</p>

            <div class="mb-3">
                <label for="login_avt" class="form-label">login</label>
                <input class="form-control" aria-describedby="emailHelp" type="text" name="login_avt" required >
                <!-- pattern="[A-Za-z0-9]+" -->
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="password_avt" class="form-label">password</label>
                <input class="form-control" aria-describedby="emailHelp" type="text" name="password_avt" >
                <!-- pattern="[A-Za-z0-9!*-_]+" -->
            </div >
        
            <input type="submit" value="готово!" class="btn btn-info"> 
    </div>


    </form>
</body>

<footer>
    <p class="fs-6"> Starodybova </p>
    
</footer>
</html>