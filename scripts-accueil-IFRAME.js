var display_zone = document.getElementById("display-article");

$(document).ready(function() {

    //l'évènement clic de la classe lien-overlay
    $('.in-overlay').click(function(event) {

        // empêcher la redirection normale au clic sur le lien
        event.preventDefault();

        //remplir la div ciblée avec l'html d'une autre page
        
//        $('#display-article').load($(this).attr('href') + ' main', function(responseTxt, statusTxt, xhr) {
//
//            if(statusTxt == "success") {
//                document.getElementById("display-article").style.display = "block";
//                noScrollBody.classList.add('noscroll');
//            }
//
//        });
        
        
        var target_url = $(this).attr("href");
        
        var iframe = document.createElement("iframe");
        
        iframe.src = target_url;
        
        display_zone.appendChild(iframe); // ! \ À SUPPRIMER LORS DE FERMETURE OVERLAY
        
        display_zone.style.display = "block";
        
        document.body.classList.add('noscroll');
        
        iframe.onload = function() { // Note : Prend du temps à se déclencher car toutes les images doivent charger
        
            var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
            
            var header = iframeDocument.querySelector("header");
            if (header) {header.parentNode.removeChild(header);}
            
            iframeDocument.body.style.backgroundColor = "transparent";
            
            iframe.style.display = "block";
            
        }

    });

});

//function off() {
//    document.getElementById("display-article").style.display = "none";
//    noScrollBody.classList.remove('noscroll');
//} 


