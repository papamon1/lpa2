//import 'bootstrap';

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
















// Modal Cookies

window.onload=function(){
    checkShown();
};

export function checkShown(){
    if(localStorage.getItem('lpa_popup') != 'shown'){
        document.getElementById('cookieModal').innerHTML = '<div class="modal-dialog modal-lg" role="document"> <div class="modal-content"><div class="modal-header modales__text--title"><h5 class="modal-title" id="exampleModalLabel">Aviso sobre el uso de cookies</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body modales__text--content"><p>El  sitio  WEB  de 	LA PUERTA AMARILLA 	utiliza  cookies 	de terceros para mejorar  nuestros servicios	.  Si  continua  navegando,  consideramos  que  acepta  su	  uso.  Puede                 cambiar la configuración u obtener más información 	en nuestra <a href="cookies.php" >“Política de Cookies"</a>                </p>            </div>            <div class="modal-footer">                <button type="button" id="btnAceptar" class="btn btn-primary">Aceptar cookies</button>                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>                <a class="btn btn-secondary" href="./cookies.php">Modificar configuración</a>                            </div>        </div>    </div>';
        document.getElementById("btnAceptar").onclick = acceptCookie;
        $('#cookieModal').modal('show');
    }
}

export function acceptCookie(){
    //alert('hey');
    localStorage.setItem('lpa_popup','shown');
    $('#cookieModal').modal('hide');
}