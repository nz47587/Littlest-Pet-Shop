
var form = document.getElementsById("myform");
var btn = document.getElementById("btn");

function shfaq(){
    var fields = document.getElementsByClassName('inputs');
    if(fields[0].value != "" && fields[1].value != "" && fields[2].value != ""){
        alert('Formulari juaj eshte derguar me sukses, ju lutemi ejani te merrni kafshen tuaj ne pikat tona.')

    }
    else{
        alert('Ju nuk keni plotesuar te gjitha fushat e nevojshme.')
    }
}


function validate(){
    var emri = document.getElementsByName("femri").value;
    if(emri.length < 3){
        alert("Emri duhet te jete se paku 3 karaktere");
    }
    
    var mbiemri = document.getElementsByName("fmbiemri").value;
    if(mbiemri.length < 3){
        alert("Mbiemri duhet te kete se paku 3 karaktere");
    }

    var email = document.getElementById("femail").value;
    var pattern = /^[^]+@[^]+\.[a-z]{2,3}$/;
        if(email.match(pattern)){
        }
        else{
            alert('Email invalide');
        }
    
}
