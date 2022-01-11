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
                <form class="login" action="login" method="POST">
                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                <input name="email" type="text" placeholder="E-mail">
                <input name="password" type="password" placeholder="Kod PIN">
                <button type="submit">Zaloguj się</a></button>
             </form>
        </div>
    </body>
</html>

