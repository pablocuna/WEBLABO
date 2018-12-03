    function bajarDoc(AnioID,letraid,numeroid){
        var XHTTP = new XMLHttpRequest();
        XHTTP.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){
                alert ('doc generado');
            }
        };
        XHTTP.open("POST","", true);
        XHTTP.setRequestHeader("Content-type","application/json");
        XHTTP.send("");
        
        
    }

