function validation(){
    let email =document.getElementById("email");
    let email2 =document.getElementById("email2");
    if (email.value==email2.value){
        email.setCustomValidity("");
        email2.setCustomValidity("");
        
    }else{
        email.setCustomValidity("Los correos han de ser iguales");
        email2.setCustomValidity("Los correos han de ser iguales");
        }

    }