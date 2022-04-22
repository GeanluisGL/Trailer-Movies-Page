// ANIMACION
let opener = document.getElementById("popup")


function logg(){

  opener.classList.add("pop_op")

}

// REMUEVE
function removePop(){
  opener.classList.remove("pop_op")
}

// DEFINIMOS FUNCION


function funLog(){
  // Declaramos el usuario y la contraseña
  let user = "edgemanufacture"
  let pasw = "1111"

  // Se recoge los datos introducidos por el usuario
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;


//SI los datos introduccion son iguales a los declarados
  if (username==user && password==pasw) {
    alert("Hola")
    //Pondra un timer para  y llamara la funcion de 
    setTimeout(admacs, 3000);
  }
    else {   
      setTimeout(closCont, 3000);
    }

  }


  function admacs(){


    document.getElementById("formCa").innerHTML="<form action='C:/xampp/htdocs/1_2,Testers/indexA.php'>"

  }

  function closCont(){
    swal({Text: 'Ah ocurrido un error, reintente usuario y contraseña', button: "ok",})
     window.open("index.php", "_self");
  }
