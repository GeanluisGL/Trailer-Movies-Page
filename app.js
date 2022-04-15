
let opener = document.getElementById("popup")

function logg(){
  opener.classList.add("pop_op")

}


function removePop(){
  opener.classList.remove("pop_op")
}


function login(){
  let user = "edgemanufacture"
  let pasw = "0000"

  let username = document.querySelector(".username").value;
  let password = document.querySelector(".password").value;

  if (username==user && password==pasw) {
  
    // swal({
    //       title:"Bienvenido administrador!!",
    //       text: "Administrador", text:"Espere 3 segundos"
    //     });
    setTimeout (admacs, 3000);
  }
    else {   
      swal('Ah ocurrido un error, reintente usuario y contraseña')
      setTimeout(closCont, 3000);
    }

  }


  function admacs(){

    window.open("indexA.php", "_self");
    document.getElementById(".formC").innerHTML="<form action='1_2,TESTERS/indexA.php'>"

  }

  function closCont(){
    window.open("index.php", "_self");
  }



// SWEET ALERT