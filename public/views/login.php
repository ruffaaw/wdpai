<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script type="text/javascript" src="./public/js/login.js" defer></script>

    <title> LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg" height=400px>
        </div>
        <div class ="login-container">
            <form class="login" action="loginButtons" method="POST">
                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <div class="buttons">
                    <button type="submit" name="login">LOGIN</button>
                    <button type="submit" name="register">SIGN IN</button>
                </div>
            </form>
        </div>
    </div>
<body>