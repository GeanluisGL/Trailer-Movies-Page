opener = document.querySelector(".popup");
// let openerB = document.getElementById("popep");

var toastTrigger = document.getElementById('liveToastBtn')
var toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
  toastTrigger.addEventListener('click', function () {
    var toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
  })
}

function logout(){
    document.querySelector(".button is-danger").innerHTML="<a href=' href=/index.php'>"
}

function adder(){

    //  opener.classList.add("pop_op")
   
}


function logg(){
    // opener.classList.add("pop_op")
    opener.style.visibility = "visible";
   opener.style.top = "50%";
   opener.style.transform = "translate(-50%, -50%) scale(1)";
  
  }

// function save(){

//  let imagPoster = document.querySelector(".imagPoster").value;
//  let linkerYt = document.querySelector(".linkerYt").value;
//  let movNam = document.querySelector(".movNam").value;
//  let preDa =  document.querySelector(".preDa").value;
//  var defaultVal = preDa.defaultValue;
//  var currentVal = preDa.value;
//  let dirMov = document.querySelector(".dirMov").value;
//  let depAct = document.querySelector(".depAct").value;
//  let movRes = document.querySelector(".movRes").value;
// let ifrVivdeo = " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

//  document.querySelector(".table ").insertRow(-1).innerHTML='<th>'+ "→" +'</th>'+
//  '<th><input type="radio"></th>'+
//  '<td><img src=" '+ imagPoster +'" class="cartb"></td>'+
//  '<td>'+ linkerYt +'</td>'+
//  '<td>'+ movNam +'</td>'+
//  '<td>'+ dirMov +'</td>'+
//  '<td>'+ movRes +'</td>'+
//  '<td>'+ preDa +'</td>'+
//  '<td>'+ depAct +'</td>'

      
//  opener.classList.remove("pop_op").value;  

// }


//BUSCADOR
// function serch(){
//     openerB.classList.add("pop_op")
// }

// function search(){
  
  
// }


//CERRAR
function clos(){
    openerB.classList.remove("pop_op")
}


//REMOVER
function remover(){

}

function removePop(){
    opener.classList.remove("pop_op")
}

//EDITAR
function edit(){
   
}

function counter(){

}