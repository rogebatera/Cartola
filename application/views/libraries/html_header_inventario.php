<!DOCTYPE html>
<html lang="pt-br">
<head>
       
    <title>Produção Web</title>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema Indicadores">
    <meta name="author" content="Rogerio Lucio">
              
    <!--seta o base_url na variavel javascript-->
    <script type="text/javascript">      
        var base_url = "<?php echo base_url(); ?>";       
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom CSS
    <link href="<?php// echo base_url("assets/css/sb-admin.css"); ?>" rel="stylesheet"> -->

    <!-- Morris Charts CSS 
    <link href="<?php //echo base_url("assets/css/morris.css"); ?>" rel="stylesheet">-->
    <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">-->
    
    <!-- Custom Fonts 
    <link href="<?php //echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">-->
    
    <!-- Maskmoney -->
    <!--maskara campo preco
    <script type="text/javascript" src="<?php //echo base_url('assets/maskmoney/jquery-1.2.1.pack.js'); ?>"></script>
    <script type="text/javascript" src="<?php //echo base_url('assets/maskmoney/jquery_money.js'); ?>" ></script>--> 
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--calendario 
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>-->
    <!--<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" />
    <script src="<?php echo base_url('assets/js/jquery-1.8.2.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.js'); ?>"></script>-->
    
    <!-- para o token input -->
    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>-->
    <!--<script type="text/javascript" src="<?php echo base_url('assets/token/src/jquery.tokeninput.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/token/styles/token-input.css'); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/token/styles/token-input-facebook.css'); ?>" type="text/css"/> -->
    
    <!--colocar o calendario em portugues
    <script type="text/javascript">
        
        var $d = jQuery.noConflict();
        $d(function(){
            $d("#calendario").datepicker({
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                numberOfMonths: 2
            });
        });
        
       // var $d = jQuery.noConflict();
        $d(function(){
            $d("#calendario2").datepicker({
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                numberOfMonths: 2
            });
        }); 
        
    </script> -->
   
    <!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css"/>-->

    <script src="https://cdnjs.com/libraries/jquery.mask"></script>

</head>       
<body>

