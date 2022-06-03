
var noScrollBody = document.querySelector('body');

//s'active quand la page a chargé
$(document).ready(function() {

    //l'évènement de clic de la classe lien-overlay
    $('.in-overlay').click(function(event) {

        // empêcher la redirection normal au clic sur le lien
        event.preventDefault();

        //remplir la div ciblé avec l'html d'une autre page           
        $('#display-article').load($(this).attr('href') + ' main', function(responseTxt, statusTxt, xhr) {

            if(statusTxt == "success") {

                document.getElementById("display-article").style.display = "block";
                const activeArticle = document.querySelectorAll('.lien-article-overlay');
                activeArticle.forEach(function(b){

                    b.onclick = function() {

                    const oldActive = document.querySelector('.lien-article-overlay.current');

                    if(oldActive){

                        oldActive.classList.remove('current');
                    }

                    b.classList.add('current');

                    }

                });
                
                noScrollBody.classList.add('noscroll');
                
            }

            /*if(statusTxt == "error")

            alert("Error: " + xhr.status + ": " + xhr.statusText);*/

        });

    });

});

function off() {
    document.getElementById("display-article").style.display = "none";
    noScrollBody.classList.remove('noscroll');
} 


