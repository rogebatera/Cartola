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
      <a class="navbar-brand" href="<?php echo base_url('home'); ?>">Ibratec</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
          
        <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('almoxarifado/inventario_almoxarifado'); ?>">Almoxarifado</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('materia_prima/inventario_materia_prima'); ?>">Materia Prima</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('expedicao/inventario_expedicao'); ?>">Expedição</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('producao/inventario_producao'); ?>">Produção</a></li>
          </ul>
        </li>
        
        <?php if(!empty($_SESSION['id_usuario_crp'] == 1 OR $_SESSION['id_usuario_crp'] == 5)){ ?>        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comercial<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('materia_prima/previsao_consumo_mp'); ?>">Previsão de Consumo de M.P</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('materia_prima/consumo_mp_nf'); ?>">Consumo de M.P por NF</a></li>
          </ul>
        </li>
        <?php } ?>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url('login/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Sair </a></li>
      </ul>
    </div><!--/.nav-collapse -->
    
  </div>
</nav>

