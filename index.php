<!DOCTYPE html>
<html>
    <head>
        <title>Login com PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/bootstrap.min.css">
        <style>
            .marg{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 marg">
                <form method="post" action="index.php">
                    <div class="form-group">
                        <label for="log">Login</label>
                        <input type="text" name="pLogin" placeholder="Login" id="log" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="pPass" placeholder="Password" id="pass" class="form-control">
                    </div>
                    <input type="submit" value="Login" class="btn btn-block btn-success">
                </form>
            </div>
        </div>
    </body>
</html>