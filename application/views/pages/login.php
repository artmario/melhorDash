<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <center><img src="http://melhorpreco.pe.hu/images/Logo-melhor-preco.png" class ="logo"></center>
                    <h3 class="panel-title"></h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="/index.php/Login/login" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" id="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" id="password" type="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" id="remember" value="true">Lembrar credenciais
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" value="Login" class="btn btn-lg btn-success btn-block" id="btn-login"/>
                        </fieldset>
                    </form>
                    
                    <button class="btn-success" action="http://melhorpreco.pe.hu/">Cadastre-se</button>
                </div>
            </div>
        </div>
    </div>
</div>
