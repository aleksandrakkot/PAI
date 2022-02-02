<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/Public/css/style.css"/>
    <script src="https://kit.fontawesome.com/218395494c.js" crossorigin="anonymous"></script>
    <title>Staffbook</title>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="/Public/img/logo.svg">
    </div>
    <div class="login-container">
        <form class="register" action="register" method="POST">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="email" type="text" placeholder="email@email.com">
            <input name="password" type="password" placeholder="password">
            <input name="confirmedPassword" type="password" placeholder="confirm password">
            <input name="name" type="text" placeholder="name">
            <input name="surname" type="text" placeholder="surname">
            <input name="phone" type="text" placeholder="phone">
            <button type="submit">REGISTER</button>
        </form>
    </div>
</body>
</html>