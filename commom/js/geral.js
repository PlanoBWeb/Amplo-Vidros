    // Função para vitirne projetos
    $(document).ready(function() {
        $('.lightBox-menor').on('click', function(event) {
            event.preventDefault();
            var big_image_href = $(this).attr('href');
            
            $('.img-inicial').remove();
            $('.carrega-lightBox-menor').fadeIn();
            $('.carrega-lightBox-menor').append('<img class="img-inicial" src="'+big_image_href+'">');
        });
    });

    $(document).ready(function() {

        var current = '.mtlsr-images-for-lightbox ul li.current';
        //Função para verificar a posição atual da imagem e remover as setas(prev e next) conforme necessário
        function check_image_position(){                
            if ($(current).is(':last-child')) {
                $('.next').hide();
                $('.prev').show();
            }else if ($(current).is(':first-child')) {
                $('.next').show();
                $('.prev').hide();
            }else{
                $('.next, .prev').show();
            }
        }           
        
        $('.mtlsr-images-for-lightbox ul li').on('click', 'a', function(event) {
            event.preventDefault();
            
            var qualLightBox = $(this).data("item-id");
            // projeto-com-1

            var big_image_href = $(this).attr('href');
            
            // $(this).parent().addClass('current');
            if (qualLightBox == "projeto-com-1") {
                $('.mtlsr-lightbox-1').fadeIn();  
            }else if(qualLightBox == "projeto-com-2"){
                $('.mtlsr-lightbox-2').fadeIn(); 
            }else if(qualLightBox == "projeto-com-3"){
                $('.mtlsr-lightbox-3').fadeIn(); 
            }else if(qualLightBox == "projeto-com-4"){
                $('.mtlsr-lightbox-4').fadeIn(); 
            }else if(qualLightBox == "projeto-com-5"){
                $('.mtlsr-lightbox-5').fadeIn(); 
            }else if(qualLightBox == "projeto-com-6"){
                $('.mtlsr-lightbox-6').fadeIn(); 
            }else if(qualLightBox == "projeto-com-0"){
                $('.mtlsr-lightbox-0').fadeIn(); 
            }

            $(this).parent('li').addClass('current');
            //$('.mtlsr-lightbox').fadeIn();
            $('.mtlsr-lightbox').append('<img class="image-in-lightbox" src="'+big_image_href+'" alt=""></div>');
            
            check_image_position();
        });
        //Fechar
        $('.mtlsr-lightbox').on('click', '.close', function(event) {
            $('.mtlsr-lightbox').fadeOut();
            $('.mtlsr-lightbox .image-in-lightbox').remove();
            $(current).removeClass('current');
        });
        //Função Next e Prev
        $('.mtlsr-lightbox a').on('click', function(e){             
            if($(this).attr('class')=='next'){
                var big_image_href = $(current).next().find('a').attr('href');                
            
                $(current).next().addClass('current');
                $(current).prev().removeClass('current');
                
            }else if($(this).attr('class')=='prev'){
                var big_image_href = $(current).prev().find('a').attr('href');
            
                $(current).prev().addClass('current');
                $(current).next().removeClass('current');
            }
            check_image_position();
                
            $('.mtlsr-lightbox .image-in-lightbox').remove();
            $('.mtlsr-lightbox').append('<img class="image-in-lightbox" src="'+big_image_href+'" alt=""></div>');
        });
        
    });

    // Menu lateral
    $('.abre-sub-lateral').click(function(){
        // event.preventDefault();
        menu = $(this).children('.subMenu-lateral');
        link = $(this).parent('.linha-menu-produto');

        if($('.subMenu-lateral').is(':visible')){
            $('.subMenu-lateral').hide();   
            // $(link).addClass('menu-produto-icon'); 
            // $(link).removeClass('menu-produto-icon-ativo'); 
        }else{
            $(menu).toggle();       

        }
    });

    // Valida Newslleter
    function validaNewsletter()
    {
        d = document.newsletter;

        if(trim(d.nome_news.value)=="")
        {
            alert("O campo NOME deve ser preenchido!");
            d.nome_news.focus();
            return false;
        }
        
        if(trim(d.email_news.value)=="")
        {
            alert("O campo E-MAIL deve ser preenchido!");
            d.email_news.focus();
            return false;
        }
        
        if(!email_news(d.email_news,'')) return false;
        
        d.submit();
    }

    // Valida Formulário
    function enviardados()
    {
        d = document.contato;

        if(trim(d.nome.value)=="")
        {
            alert("O campo NOME deve ser preenchido!");
            d.nome.focus();
            return false;
        }
        
        if(trim(d.email.value)=="")
        {
            alert("O campo E-MAIL deve ser preenchido!");
            d.email.focus();
            return false;
        }
        
        if(!email(d.email,'')) return false;

        if(trim(d.telefone.value)=="")
        {
            alert("O campo TELEFONE deve ser preenchido!");
            d.telefone.focus();
            return false;
        }
        
        if(trim(d.msg.value)=="")
        {
            alert("O campo MENSAGEM deve ser preenchido!");
            d.msg.focus();
            return false;
        }

        if(trim(d.onde.value)=="" || trim(d.onde.value)== "Selecione")
        {
            alert("O campo ONDE NOS ENCONTROU deve ser preenchido!");
            d.onde.focus();
            return false;
        }
        
        d.submit();
    }

    // Busca mobile
    $('.lupa-mobile').click(function(){
        if($('.bloco-busca-mobile').is(":visible")){
            $('.bloco-busca-mobile').toggle();
        }else{
            $('.bloco-busca-mobile').toggle();
       }
    });

    // Vitrine Banner
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true
        });
    });

    // Vitrine Produtos
    $(document).ready(function() {

        //Pega o valor da largura e calcular o valor da posição da esquerda
        var item_width = $('.produto-vitrine').outerWidth();
        var left_value = item_width * (-1);
 
        //Coloca o último item antes do primeiro item, caso o usuário clique no botão de ANTERIOR
        $('.produto-vitrine:first').before($('.produto-vitrine:last'));
         
        //Coloca o item atual na posição correta
        $('.encapsula-produto-vitrine').css({'left' : left_value});
         
        //Se o usuário clica no botão ANTERIOR
        $('#prev').click(function() {
            //Pega a posição da direita
            var left_indent = parseInt($('.encapsula-produto-vitrine').css('left')) + item_width;
             
            //Move o item
            $('.encapsula-produto-vitrine').animate({'left' : left_indent}, 200,function(){
             
                //Move o último item e o coloca como o primeiro
                $('.produto-vitrine:first').before($('.produto-vitrine:last'));
                 
                //Coloca o item atual na posição correta
                $('.encapsula-produto-vitrine').css({'left' : left_value});
            });
         
        //Cancela o comportamento do click
        return false;
        });

            //Se o usuário clica no botão PROXIMO
        $('#next').click(function() {
                
            //Pega a posição da direita
            var left_indent = parseInt($('.encapsula-produto-vitrine').css('left')) - item_width;
             
            //Move o item
            $('.encapsula-produto-vitrine').animate({'left' : left_indent}, 200, function () {
             
                //Move o último item e o coloca como o primeiro
                $('.produto-vitrine:last').after($('.produto-vitrine:first'));
                 
                //Coloca o item atual na posição correta
                $('.encapsula-produto-vitrine').css({'left' : left_value});
                 
            });
             
            //Cancela o comportamento do click
            return false;
         
        });
 
    });

    // Vitrine Projetos
    $(document).ready(function() {

        //Pega o valor da largura e calcular o valor da posição da esquerda
        var item_width = $('.produto-vitrine-projetos').outerWidth();
        var left_value = item_width * (-1);
 
        //Coloca o último item antes do primeiro item, caso o usuário clique no botão de ANTERIOR
        $('.produto-vitrine-projetos:first').before($('.produto-vitrine-projetos:last'));
         
        //Coloca o item atual na posição correta
        $('.encapsula-produto-vitrine-projetos').css({'left' : left_value});
         
        //Se o usuário clica no botão ANTERIOR
        $('#prev-projetos').click(function() {
            //Pega a posição da direita
            var left_indent = parseInt($('.encapsula-produto-vitrine-projetos').css('left')) + item_width;
             
            //Move o item
            $('.encapsula-produto-vitrine-projetos').animate({'left' : left_indent}, 200,function(){
             
                //Move o último item e o coloca como o primeiro
                $('.produto-vitrine-projetos:first').before($('.produto-vitrine-projetos:last'));
                 
                //Coloca o item atual na posição correta
                $('.encapsula-produto-vitrine-projetos').css({'left' : left_value});
            });
         
        //Cancela o comportamento do click
        return false;
        });

            //Se o usuário clica no botão PROXIMO
        $('#next-projetos').click(function() {
                
            //Pega a posição da direita
            var left_indent = parseInt($('.encapsula-produto-vitrine-projetos').css('left')) - item_width;
             
            //Move o item
            $('.encapsula-produto-vitrine-projetos').animate({'left' : left_indent}, 200, function () {
             
                //Move o último item e o coloca como o primeiro
                $('.produto-vitrine-projetos:last').after($('.produto-vitrine-projetos:first'));
                 
                //Coloca o item atual na posição correta
                $('.encapsula-produto-vitrine-projetos').css({'left' : left_value});
                 
            });
             
            //Cancela o comportamento do click
            return false;
         
        });
 
    });