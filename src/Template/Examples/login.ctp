<?php $this->layout = 'Sb2plugin.login'; ?>
<div class="row">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Please Sign In</h3>
        </div>
        <div class="panel-body">
            <form role="form">
                <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                        </label>
                    </div>
                    <?= $this->Html->link('Login', ['controller' => 'Examples', 'action' => 'home'], ['class' => 'btn btn-lg btn-success btn-block']); ?>
                </fieldset>
            </form>
        </div>
    </div>
</div>