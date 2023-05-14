// validacion de formularios
//alert("inicia validajs ")
function validaForm() {
    var inp_nro = document.getElementById('nro');
    var resp = true
    if (inp_nro.value == "") {
        inp_nro.style.backgroundColor = 'orangered'
        alert("campo nro es obligatorio");
        resp = false;
    }
    return resp;
}

function valHsPwd() {
    var semana = new Array()
    var cero = 0;
    resp = true;
    for (var i = 0; i < 5; i++) {
        semana[i] = document.getElementById(i).value;
        if (semana[i] == 0) {
            cero += 1;
        }

    }
    if (cero == 5) {
        resp = false;
        alert('no hay horas ingresadas');
    }


    return resp;

}
// Controla formulario ejercicio 7 tp1 
//impide que se submita formulario si el divisor es cero
function ctrlJsEje7() {
    var $submit = false;
    var $nro1 = document.getElementById('nro1').value;
    var $nro2 = document.getElementById('nro2').value;
    // var $selec = document.getElementsByName('operador')[0];
    var $selec = document.getElementsByName('operador');
    console.log($selec);
    //var $opcion = $selec.options[$selec.selectedIndex].value;
    var $opcion = $selec.value;
    // alert($opcion); 
    $nro1 = parseInt($nro1);
    $nro2 = parseInt($nro2);
    if (!isNaN($nro1)) {

        if (!isNaN($nro2)) {

            $submit = true;
        }

    }
    // if(!$submit){

    //     alert("error el los campos de numeros");
    // }


    // alert("compara operador");
    if ($nro2 == 0 && $opcion == 4) {
        $submit = false;
        //alert('no se puede dividir por CERO')
        //document.getElementById('alerta').innerHTML ='NO ES POSIBLE LA DIVISION POR CERO';
        document.getElementById('alerta').style = 'display: inline';

    }
    //alert($submit);
    return $submit;

}

//valida edad en formato entero luego de ingresar la fecha de nacimiento

function validaEdad() {

    var campoEdad = document.getElementById('edad');
    campoEdad.style.background = 'red';
    var fechaIngr = new Date(document.getElementById('fn').value)
    fechaIngr.setDate(fechaIngr.getDate() + 1);
    var fechaActual = new Date();

    var edadAct = fechaActual.getFullYear() - fechaIngr.getFullYear();
     console.log(edadAct);

    if( fechaIngr.getMonth() == fechaActual.getMonth()){
        fechaIngr.getDay() > fechaActual.getDay() ? edadAct-- :''
    }

     fechaIngr.getMonth() > fechaActual.getMonth() ? edadAct-- :''  

    campoEdad.value = edadAct;
     console.log(edadAct)

     edadAct < 100 && edadAct > 18 ? campoEdad.style.background = '':''

}
function deriva() {

    // Usando setTimeout para ejecutar una función después de 5 segundos.
    setTimeout(function () {
        // Redirigir con JavaScript
        window.location.href = 'index.php';
    }, 3000);

}

