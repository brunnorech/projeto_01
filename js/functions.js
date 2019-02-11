window.onload = function(){
    var map;

    function initialize(){
        var mapProp = {
            center: new google.maps.LatLng(-23.54874,-46.93472269999995),
            scrollwhell:false,
            zoom:15,
            mapTypeId:google.maps.MapTypeId.TERRAIN
        }

        map = new google.maps.Map(document.getElementById("mapa"),mapProp);
    }

    function addMarker(lat, long, icon, content){
        var latLng = {
            'lat':lat,
            'lng':long
        };

        var marker = new google.maps.Marker({
            position:latLng,
            map:map,
            icon:icon
        });

        var infoWindow = new google.maps.InfoWindow({
            content:content,
            maxWidth:200,
            pixelOffset: new google.maps.Size(0,20)
        })
        google.maps.event.addListener(marker,'click',function(){
            infoWindow.open(map,marker);
            setTimeout(function(){
                map.panTo({'lat':-23.54874,'lng':-46.93472269999995}); 
                map.setZoom(18);
               
            },100);
        });
        
    }

    initialize();
    var mensagem = '<strong style="color:black; padding-left:23px;">Meu Endereço</strong><br/><p style="color:black;">Rua Kurt Boettcher, 43</p>';
    addMarker(-23.54874,-46.93472269999995,'', mensagem);
    
    function abrirMenu(){
            $("div.botao-menu").click(function(){
                $("ul").slideToggle();
            
            });   
    }   

    function fecharMenuResize(){
        
        $(window).resize(function(){
            setTimeout(function(){
                $('.mobile-menu ul').hide();
            },500);

        });
    }
    fecharMenuResize();
    abrirMenu();
   
    //GAMBIARRA ABAIXO

    /*
    function atualizarResize(){
        var timer;
        $(window).resize(function(){
            clearTimeout(timer);
           timer = setTimeout(function(){
                location.href = "http://localhost/Projetos/OLD/Projeto_04/";
           },300);
        })
    }

    atualizarResize();

    */
}
