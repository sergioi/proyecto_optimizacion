let lineo = document.getElementById("diner").value;

function efectivo(){
    confirm(`Total ${lineo}`)
    alert(`Realizo el pago ${lineo} con exito!!!`)
};

function targeta(){
    let number =  prompt(`INGRESAR TARJETA`)
    prompt(`TARjETA: "${number}"   INGRESAR PIN:`)
    alert(`COMPLETADO!!!`)
};
