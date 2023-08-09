//Ventana emergente para el inicio de sesion
//toma el evento y lo pone a escuchar, y un segundo argumento para llamar cada vez que se desencadena el evento descrito
document.getElementById("loginBtn").addEventListener("click", function() {
    document.getElementById("loginPopup").style.display = "block";
    });
    
//Aca cerramos la ventana emergente
document.getElementById("cancelBtn").addEventListener("click", function() {
    document.getElementById("loginPopup").style.display = "none";
    });


function validarCorreo(){
    var correo = document.getElementById('correo').value

    var xmlhttp;
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("msjc").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","modelo/validarcorreo.php?correo="+correo,true);
    xmlhttp.send();
}


function validar(){
    //generar una variable con lo que el usuario ingresa 
    var clave = document.getElementById("clavee").value;
    var btn = document.getElementById("btn-crear");
    //generar una respuesta en el input "msj" y mostrarle al usuario dependendio su tamaño de clave 
    if(clave.length > 6){
        //con .inertText hacemos que inserte, con .value le damos un valor y por eso es necesario un input.
        document.getElementById("msj").innerText = 'Clave correcta';
        /*Habilitamos el boton*/
        btn.removeAttribute("disabled","");
    } else{
        document.getElementById("msj").innerHTML = '<span class="text-red">La clave debe tener al menos 6 caracteres</span>';
        /*Desabilitamos el boton*/
        btn.setAttribute("disabled","");
    }
}

