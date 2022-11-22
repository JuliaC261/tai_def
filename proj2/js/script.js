$(function(){

    $('nav.mobile').click(function(){

        //quando clicar, irá chamar essa função
        //criando variável para ser acessada várias vezes

        var listaMenu = $('nav.mobile ul');
        //listaMenu.fadeIn();
        //lista.menu.fadein(); chama o efeito
        /* if (listaMenu.listaMenu(':hidden')== true)
        listaMenu.fadeIn();
        else
        listaMenu.fadeOut(); */
        listaMenu.slideToggle(); //abre cortina

        if (listaMenu.slideToggle(':hidden')== true){
        var icone = $('botao-menu-mobile').find('i');
          icone.removeClass('fa-bars');
          icone.addClass('fa-times');
          listaMenu.slideToggle();
        }else{
        var icone = $('botao-menu-mobile').find('i');
          icone.removeClass('fa-bars');
          icone.addClass('fa-times');
          listaMenu.slideToggle();
        }

    })

})