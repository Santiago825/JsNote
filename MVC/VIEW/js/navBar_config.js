let btn_User=document.getElementById("btn_user");
let options_user=document.getElementById("options_user"); 


btn_User.addEventListener("click",function(){
    options_user.classList.toggle("mostrar_config")
})

function enviar_formulario(){
    document.per.submit;
}
// scroll navbar

/* --pocicion inicial */
let ubicacionPrincipal = window.pageYOffset;
let $nav = document.querySelector("nav");

/* --evento scroll */
window.addEventListener("scroll", function() {
    /* --muestra la ubicacion cada vez que hagas scroll */
    //console.log(window.pageYOffset);

    /* --donde nos encontramos actualmente */
    let desplazamientoActual = window.pageYOffset;

    /* --condicon para ocultar o mostrar el menu */
    if(ubicacionPrincipal >= desplazamientoActual) {
        /* --si es mayor o igual se muesta */
        $nav.style.top = "0px";
        console.log('Ubicacion Principal')
        console.log(ubicacionPrincipal)
        console.log('desplazamiento')
        console.log(desplazamientoActual)
    } else {
        /* --sino lo ocultamos añadiendo un top negativo */
        $nav.style.top = "-80px";
        console.log('Ubicacion Principal')
        console.log(ubicacionPrincipal)
        console.log('desplazamiento')
        console.log(desplazamientoActual)
    }

    /* --actulizamos la ubicacion principal */
    ubicacionPrincipal = desplazamientoActual;
});

