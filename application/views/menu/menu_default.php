<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('home'); ?>">Cartola</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
          
        <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('jogador/'); ?>">Jogador</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Controle Cartola</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('controle_rodada/'); ?>">Pontuação Rodada</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Pagamento</a></li>
          </ul>
        </li>
             
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consulta<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Tabela Geral</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Tabela Resumida</a></li>
          </ul>
        </li>

        
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url('login/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Sair </a></li>
      </ul>
    </div><!--/.nav-collapse -->
    
  </div>
</nav>

