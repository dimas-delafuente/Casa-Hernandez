
function MenuToggle() {

    var d = document.getElementById('mobile-nav-toggle');


    if (d.className.indexOf("is-open") !=-1) {
        d.className = "mobile-nav-toggle";
        document.getElementById('mobile-nav').className = 'mobile-nav';
    }else{
        d.className += " is-open";
        document.getElementById('mobile-nav').className += ' is-open';
    }
    

}   
    
function getList(){
    var list = document.getElementsByTagName('li');

    for (var i = 0; i <= list.length; i++) {

        var liEl = list[i];
        document.getElementById("mobile-list").appendChild(liEl);

    } 

}   

$(document).ready(function () {

    $('#map').addClass('scrolloff');                // Definir los eventos del raton a "none" cuando el documento se carga
        
    $('#section-contacto-map').on("mouseup",function(){          // Cuando se activa el ratón, se bloquea el scroll
        $('#map').addClass('scrolloff'); 
            
    });

    $('#section-contacto-map').on("mousedown",function(){        // Cuando activamos el raton (click), se desactivan las restricciones
        $('#map').removeClass('scrolloff');
    });

    $("#map").mouseleave(function () {              
        $('#map').addClass('scrolloff');            // Cuando salimos del area del mapa, volvemos a colocar los eventos del ratón a "none"

    });

    $('#todos').addClass('selected');               
        
    $('li').click(function(){          
        $('li').removeClass('selected');
        $(this).addClass('selected');         
    });


    $('.writeus').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $('.writeus').hide();
        $('.writeus-form').slideToggle();
        $('.writeus-contact').fadeIn("slow");
        $('.writeus-form').css({"display": "flex", "justify-content": "center"});

    });

    $('#form-close').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $('.writeus-form').hide();
        $('.writeus').slideToggle();
    });

        
});