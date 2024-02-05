$(document).ready(function(){
    var funcion;
    function verificar_sesion(){
        funcion = 'verificar_sesion';
        $.post('../controllers/usercontroller.php',{funcion},(response)=> {
            console.log(response);
        }) 
    }

    $('#form-login').submit(e => {
        funcion = 'login';
        let user = $('#user').val();
        let pass = $('#pass').val();
        $.post('../controllers/usercontroller.php',{user,pass,funcion},(response)=>{
            if(response == 'login'){
                location.href = '../index.php'
            }
            else{
                toastr.error('Utilizador ou palavra-passe incorrecta.')
            }
        })
        e.preventDefault();
    })

})