$(document).ready(function () {
    var funcion;
    verificar_sesion();

    function verificar_sesion() {
        funcion = 'verificar_sesion';
        $.post('../controllers/usercontroller.php', { funcion }, (response) => {
            console.log(response);
            if(response != ''){
                let sesion = JSON.parse(response);
                $('#nav_login').hide();
                $('#user_login').text(sesion.user);
                $('#image_nav').attr('src','../util/images/users/' + sesion.image);
            }
            else{
                $('#nav_user').hide();
            }
        })
    }
})