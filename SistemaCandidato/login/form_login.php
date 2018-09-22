     
<html>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br><br><br><br><br><br><br>
        <div class="conteiner">

            <div class="row col-sm-10 offset-3" >

                <form action="logar.php" method="post">

                    <div class="form-row">
                        <div class="form-group  col-md-12 offset-4" >
                            <label for="inputUsername">Login</label>
                            <input type="text" required class="form-control" id="inputUsername" placeholder="Login" name="username">
                        </div>
                        <div class="form-group  col-md-12 offset-4" >
                            <label for="inputPassword">Senha</label>
                            <input type="password" required class="form-control" id="inputPassword" placeholder="Senha" name="password">
                        </div>
                        <br><br><br>

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success col-md-12 offset-4" value="Logar!">
                    </div>
                </form>
            </div>

    </body>
</html>
<?php



