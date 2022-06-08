
var noScrollBody = document.querySelector('body');

var display_zone = document.getElementById("display-article");

//s'active quand la page a chargé
$(document).ready(function() {

    //l'évènement de clic de la classe lien-overlay
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
        
        $.ajax({
            url:target_url,
            success:function(data) {
                
                var tmp_remote_data = document.createElement("div");
                tmp_remote_data.style = "position:fixed; left:100%; display:none";
                document.body.appendChild(tmp_remote_data);
                tmp_remote_data.innerHTML = data;
                
                Array.from($(tmp_remote_data).find("link , style , script")).forEach(function(lnk){
                    
                    if (lnk.hasAttribute("id") && lnk.getAttribute("id").substr(0,3) == "vcv") {
                        document.head.appendChild(lnk);
                        lnk.classList.add("remote_vc_asset");
                    }
                    
                });
                
                display_zone.style.display = "block";
                $(display_zone).html($(tmp_remote_data).find("main"));
                noScrollBody.classList.add('noscroll');
                
                tmp_remote_data.parentNode.removeChild(tmp_remote_data);
                
                document.querySelectorAll("script.remote_vc_asset").forEach(function(sc){
                    eval(sc.innerHTML);
                    console.log("remote script executed");
                });
                
                if (window.onload) {
                    window.onload();
                }
                
            }
        });

    });

});

function off() {
    document.getElementById("display-article").style.display = "none";
    noScrollBody.classList.remove('noscroll');
} 


