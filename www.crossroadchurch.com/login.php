<?php
$user = $_POST['username'];
$pass = $_POST['password'];

if($user == "Shantelle" && $pass == "Rosaline_0112358") // !!!!!!!!!!!!!!!!!!!! REPLACE THIS WITH THE PASSWORD YOU WANT
{
        include("secretpage.php");
}
else
{
    if(isset($_POST))
    {?>
            <!DOCTYPE html>
            <html>
                <head>
                    <link rel="shortcut icon" type="image/png" href="icon.png">
                    <title>Login</title>
                    <style>
                        html {
                            height: 100%;
                            background-color:#ededeb;
                            background-size: cover;
                            background-position: 0 -60vh;
                        }
                        @keyframes fade {
                            from {opacity:0}
                            to {opacity:1}
                        }
                        form {
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            position: absolute;
                            color: black;
                            font-family: sans-serif;
                            text-align: center;
                            font-size: 30px;
                        }
                        form span {
                            opacity: 0;
                            animation: fade 0.2s 0.15s ease forwards;
                        }
                        input.pa {
                            width: 10vw;
                            height: 3vh;
                            opacity: 0;
                            text-align: center;
                            animation: fade 0.2s 0.3s ease forwards;
                        }
                        input.but {
                            padding-top: 5px;
                            background-color: black;
                            font-weight: bold;
                            color: white;
                            opacity: 0;
                            animation: fade 0.2s 0.45s ease forwards;
                        }
                    </style>
                </head>

                <body>
                    <form method="POST" action="login.php">
                    <span style="font-size: 60px; font-family: 'Montserrat, Sans-serif''"><b>LOGIN PAGE</b></span><br><br>
                    <span>USERNAME</span><br><input type="text" name="username" class="pa"></input><br><br>
                    <span>PASSWORD</span><br><input type="password" name="password" class="pa"></input><br><br>
                    <input type="submit" name="submit" value="ENTER" class="but"></input>
                    </form>
                </body>
            </html>
    <?}
}
?>
