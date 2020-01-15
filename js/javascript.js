
function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.display="block";
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.display="none"; 
    }
}
function isChecked(data) {
        var answ = document.getElementsByName('data');
        var formValid = false;
        
        var i = 0;
        while(!formValid && i < answ.length){
            if (answ[i].checked) 
                formValid = true;
                i++;    
        }
        if (!formValid) {
            var msg = '<span style="color:red;" class="alert alert-danger">Veuillez répondre à toutes les questions</span><br /><br />';
            document.getElementById('alert').innerHTML = msg;          
            return formValid;
        }
        return true
}  




