
function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.display="block";
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.display="none"; 
    }
}
function isChecked() {
    var answ = document.getElementsByClassName("radio");
    var questions = document.getElementsByTagName("h5");
    var i = 0;
    var checkedA= 0 ;
    while(i < answ.length){
        if (answ[i].checked){
            checkedA++;
        }
        i++;    
    }
    if(checkedA == questions.length) {
        return true  
    }
    else {
        var msg = '<span style="color:red;" class="alert alert-danger">Veuillez répondre à toutes les questions</span><br /><br />';
        document.getElementById('alert').innerHTML = msg;  
        return false       
    }                  
} 

