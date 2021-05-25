<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <title>Cartola</title>

        <meta charset="utf-8">
        <meta name="author" content="rogerio lucio">

        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>"  
        type="text/css" rel="stylesheet" media="screen">

        <script type="text/javascript">  
            
            var base_url = "<?php echo base_url(); ?>";

            // Função adaptImage()
            // Parâmetros: targetimg (objeto jquery com elementos selecionados)
            function adaptImage(targetimg) {

                var wheight = $(window).height(); // altura da janela do navegador
                var wwidth = $(window).width(); // largura da janela do navegador

                // removemos os atributos de largura e altura da imagem
                targetimg.removeAttr("width")
                .removeAttr("height")
                .css({ width: "", height: "" }); // removemos possíveis regras css também

                var imgwidth = targetimg.width(); // largura da imagem
                var imgheight = targetimg.height(); // altura da imagem

                var destwidth = wwidth; // largura que a imagem deve ter
                var destheight = wheight; // altura que a imagem deve ter

                // aqui vamos determinar o tamanho final da imagem
                if(imgheight < wheight) {
                // se a altura da imagem for menor que a altura da tela, fazemos um cálculo
                // para redefinir a largura da imagem para bater com a altura que queremos
                destwidth = (imgwidth * wheight)/imgheight;

                $('#fundo img').height(destheight);
                $('#fundo img').width(destwidth);

                }

                // aqui utilizamos um cálculo simples para determinar o posicionamento da imagem
                // para que a mesma fique no meio da tela
                // posição = dimensão da imagem/2 - dimensão da tela/2
                destheight = $('#fundo img').height();
                var posy = (destheight/2 - wheight/2);
                var posx = (destwidth/2 - wwidth/2);

                //se o cálculo das posições der resultado positivo, trocamos para negativo
                if(posy > 0) {
                posy *= -1;
                }
                if(posx > 0) {
                posx *= -1;
                }

                // colocamos através da função css() do jquery o posicionamento da imagem
                $('#fundo').css({'top': posy + 'px', 'left': posx + 'px'});

            }

            //quando a janela for redimensionada, adaptamos a imagem
            $(window).resize(function(){
                adaptImage($('#fundo img'));
            });

            //quando a página carregar, fazemos o mesmo
            $(window).load(function(){
            $(window).resize();
            });         

            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false
            });                     
        </script>

        <style type="text/css">              
            * {
                margin: 0;
                padding:0;
            }

            /* para garantir que estes elementos ocuparão toda a tela */
            body, html {
                width: 100%;
                height: 100%;
                font-family: Arial, Tahoma, sans-serif;
            }

            #fundo-externo {
                overflow: hidden; /* para que não tenha rolagem se a imagem de fundo for maior que a tela */
                width: 100%;
                height: 100%;
                position: relative; /* criamos um contexto para posicionamento */
            }

            #fundo {
                position: fixed; /* posição fixa para que a possível rolagem da tela não revele espaços em branco */
                width: 100%;
                height: 100%;
            }

            #fundo img {
                width: 100%; /* com isso imagem ocupará toda a largura da tela. Se colocarmos height: 100% também, a imagem irá distorcer */
                position: absolute;
            }

            #site {
                position: absolute;
                top: 60px;
                left: 50%;
                width: 560px;
                padding: 20px;
                margin-left: -300px; /* por causa do posicionamento absoluto temos que usar margem negativa para centralizar o site */
            }

            #site button {
                background: #FFF; /* fundo branco para navegadores que não suportam rgba */
                background: rgba(255,255,255,0.8); /* fundo branco com um pouco de transparência */
            }

            p{
                margin-bottom: 1.5em;
            }

            .modal-header, h4, .close {
                background-color: #5cb85c;
                color:white !important;
                text-align: center;
                font-size: 30px;
            }
            .modal-footer{
                background-color: #f9f9f9;
            }
            .btn-primary{
                width: 100%;
                padding: 10px;
            }       
        </style>
        
    </head>       
<body>



