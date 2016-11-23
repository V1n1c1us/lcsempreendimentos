<?php if(usuarioEstaLogado()) {?>
          <h2 class="text-center">Bem-Vindo, <?php echo usuarioLogado()?>.</h2>            
<?php }else{ ?>
 <section class="login-form">
                <form method="post" action="autentica.php" role="login">
                    <img id="imgCspol"
                         src="../img/logo-marca.png" class="img img-responsive" alt=""/>
                    <input type="text" name="login" id="login" placeholder="Email" class="form-control input-lg"
                           required/>
                    <input type="password" class="form-control input-lg" id="senha" placeholder="Password" name="senha"
                           required/>
                    <button type="submit" id="logar" class="btn btn-lg btn-primary btn-block">Entrar
                    </button>
                </form>
                <div class="form-links">
                    <a href="www.politecnico.ufsm.br" target="_blank"><b>Todos Direitos Reservados</b></a>
                </div>
            </section>
<?php } ?>
