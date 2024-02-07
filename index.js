$(document).ready(function () {
    var funcion;
    verificar_sesion();

    function verificar_sesion() {
        funcion = 'verificar_sesion';
        $.post('controllers/usercontroller.php', { funcion }, (response) => {
            console.log(response);
            if(response != ''){
                let sesion = JSON.parse(response);
                $('#nav_login').hide();
                $('#user_login').text(sesion.user);
                $('#image_nav').attr('src','util/images/users/' + sesion.image);
            }
            else{
                $('#nav_user').hide();
                $('#carro').hide();
            }
        })
    }
})


const carrusel = document.querySelector(".carrusel-items");

let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
let intervalo = null;
let step = 1;
const start = () => {
    intervalo = setInterval(function () {
        carrusel.scrollLeft = carrusel.scrollLeft + step;
        if (carrusel.scrollLeft === maxScrollLeft) {
            step = -1;
        } else if (carrusel.scrollLeft === 0) {
            step = step * -1;
        }
    }, 10);
};

const stop = () => {
    clearInterval(intervalo);
};

carrusel.addEventListener('mouseover', () => {
    stop ();
});
carrusel.addEventListener('mouseout', () => {
    start ();
});

start();
