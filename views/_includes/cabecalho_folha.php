<?php if (!defined('RAIZ')) exit(); ?>
<nav class='row' style='background : rgb(139,69,19); margin: 0; height: 8em !important; padding-top: 1em'>
  <a href="<?=INDEX?>/home" class="brand-logo left"><img class='col s6 l4' src="<?=URL_IMG?>/logo/molde.png"></a>

  <div class="row">
    <div class="right right-align col l3">
      <div class="row" style="margin-bottom: none">
        <a href="<?=INDEX?>/home/perfil">
          <div class="col s8 hide-on-med-and-down">
            <label class="flow-text white-text truncate col s12"><?=$_SESSION['userdata']->getNome()?></label> <br>
            <span class="col s12" style="margin-top: -30px"><?=$_SESSION['userdata']->getEmail()?></span>
          </div>
          <i class="fas fa-user-circle fa-6x black-text col l4 right"></i>  
        </a>
      </div>
    </div>
  </div>

</nav>
<nav class="nav-wrapper" style="background: rgb(107,142,35); border-top: 2px black solid;">
  <div class="nav-content row">
    <i class="fas fa-bars hide-on-large-only dropdown-trigger" data-constrainwidth="false" data-activates="dropdown1" style="margin-left: 1em;"></i>
    <ul class="hide-on-med-and-down">
      <li><a class="active" href="<?=INDEX?>/home/suporte"> <i class="fas fa-question-circle"></i>  Quem somos/Suporte</a></li>
      <li><a href="<?=INDEX?>/home/empresarial"><i class="fas fa-suitcase"></i> Orientações empresariais</a></li>
      <li><a href="<?=INDEX?>/home/social"><i class="fab fa-stack-exchange"></i>  Molde Social</a></li>
    </ul>
    <ul class="dropdown-content" id="dropdown1">
      <li><a class="active" href="<?=INDEX?>/home/suporte">Quem somos/Suporte</a></li>
      <li><a href="<?=INDEX?>/home/empresarial">Orientações empresariais</a></li>
      <li><a href="<?=INDEX?>/home/social">Molde Social</a></li>
    </ul>

    <!-- ícones tela home  --> 
    <div class="right">
      <a href="<?=INDEX?>/venda" style="padding: 0 5px;"><i class="fas fa-dollar-sign"></i></a>
      <a href="<?=INDEX?>/projeto/cadastro" style="padding: 0 5px;"><i class="fas fa-pencil-alt"></i></a>
      <a href="<?=INDEX?>/" style="padding: 0 5px;"><i class="fas fa-envelope"></i></a>
      <a href="" style="padding: 0 5px;"><i class="fas fa-search"></i></a>
      <a href="<?=INDEX?>/logout" style="padding: 0 5px;"><i class="fas fa-power-off"></i></a>
    </div>
  </div>

</nav>
