

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