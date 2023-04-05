<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>glass</title>
        <link rel="stylesheet" href="login2.css">
        <script src="jss/login.js"></script>
        </head>
        <body>
            <section>
                <div class="color"></div>
                <div class="color"></div>
                <div class="color"></div>
                <div class="box">
                    <div class="square" style="--i:0;"></div>
                    <div class="square" style="--i:1;"></div>
                    <div class="square" style="--i:2;"></div>
                    <div class="square" style="--i:3;"></div>
                    <div class="square" style="--i:4;"></div>
                    <div class="container">
                        <div class="form">
                            <h2>login</h2>
                            <form id="form_id" method="post" name="myform">
                            
                            <div class="inputBox">
                            <input type="text" placeholder="Username" id="username"/>
                            </div>
                            
                            <div class="inputBox">
                            <input type="password" placeholder="password" id="password"/>
                            </div>
                            
                            <div class="inputBox">
                            <input type="button" value="Login" id="submit" onclick="validate()"/>
                            </div>

                            </form>

                        </div>
                </div>
            </section>
        </body>
</html>