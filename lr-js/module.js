
window.onload = function first() {
    websiteurl;
    websitename;
    privacyurl;
    cookies;
    theme;   
    if (websitename == "") {
        document.getElementById("webna").innerHTML = "Login"
        document.getElementById("web").innerHTML = "Login"


    } else {
        document.getElementById("webna").innerHTML = "Login To " + websitename
        document.getElementById("web").innerHTML = "Login To " + websitename

    }     if(window.location.search == "?err"){
        document.getElementById("tos").style.display="block"
    }    if(window.location.search == "?err1"){
        sing()
        document.getElementById("don").style.display="block"
    }  if(window.location.search == "?done"){
        document.getElementById("xyz").style.display="block"
        
    }if(window.location.search == "?done1"){
        document.getElementById("yz").style.display="block"
    }if(window.location.search == "?err2"){
        resetpass()
        document.getElementById("pong").style.display="block"
        document.title = "Reset Password"
        document.title = "Reset Password"
        document.title = "Reset Password"
        document.title = "Reset Password"
        document.title = "Reset Password"
        document.title = "Reset Password"
        document.title = "Reset Password"
        document.title = "Reset Password"

    }if(window.location.search == "?logout"){
        document.getElementById("logout").style.display="block"
    }if(window.location.search == "?fail"){
        document.getElementById("fatal").style.display="block"
    }
    if(theme == "1"){
        var head = document.getElementsByTagName('HEAD')[0]; 
  
        // Create new link Element
        var link = document.createElement('link');
  
        // set the attributes for link element 
        link.rel = 'stylesheet'; 
      
        link.type = 'text/css';
      
        link.href = '../css/bootstrap/bootstrap.css'; 
  
        // Append link element to HTML head
        head.appendChild(link); 
        
    }else{
        var heado = document.getElementsByTagName('HEAD')[0]; 
  
        // Create new link Element
        var linko = document.createElement('link');
  
        // set the attributes for link element 
        linko.rel = 'stylesheet'; 
      
        linko.type = 'text/css';
      
        linko.href = '../css/mdb.min.css'; 
  
        // Append link element to HTML head
        heado.appendChild(linko); 
        
    }
  
    if (privacyurl == "") {
        console.clear()
    } else { document.getElementById("tcprivacy").href = privacyurl }

 
    if (websiteurl == "") {
        if (websitename == "") {
            document.getElementById("getback1").innerHTML = "Back"
            document.getElementById("getback1").href = websiteurl

        } else {
            document.getElementById("getback1").innerHTML = "Back To " + websitename
            document.getElementById("getback1").href = websiteurl
        } document.getElementById("getback1").href = "javascript:history.back()"
    } else {
        if (websitename == "") {
            document.getElementById("getback1").innerHTML = "Back"
            document.getElementById("getback1").href = websiteurl

        } else {
            document.getElementById("getback1").innerHTML = "Back To " + websitename
            document.getElementById("getback1").href = websiteurl
        }
    }
    //next
    if (websiteurl == "") {
        if (websitename == "") {
            document.getElementById("getback2").innerHTML = "Back"
            document.getElementById("getback2").href = websiteurl

        } else {
            document.getElementById("getback2").innerHTML = "Back To " + websitename
            document.getElementById("getback2").href = websiteurl
        } document.getElementById("getback2").href = "javascript:history.back()"
    } else {
        if (websitename == "") {
            document.getElementById("getback2").innerHTML = "Back"
            document.getElementById("getback2").href = websiteurl

        } else {
            document.getElementById("getback2").innerHTML = "Back To " + websitename
            document.getElementById("getback2").href = websiteurl
        }
    }//next
    if (websiteurl == "") {
        if (websitename == "") {
            document.getElementById("getback3").innerHTML = "Back"
            document.getElementById("getback3").href = websiteurl

        } else {
            document.getElementById("getback3").innerHTML = "Back To " + websitename
            document.getElementById("getback3").href = websiteurl
        } document.getElementById("getback3").href = "javascript:history.back()"
    } else {
        if (websitename == "") {
            document.getElementById("getback3").innerHTML = "Back"
            document.getElementById("getback3").href = websiteurl

        } else {
            document.getElementById("getback3").innerHTML = "Back To " + websitename
            document.getElementById("getback3").href = websiteurl
        }
    }
    if (cookies == "enabled") {
        document.cookie = "service=mysql&&mysqli";
        document.cookie = "auth=name&&password.get.mysqli()";
        document.cookie = "system=login&&register&&reset.mysqli()"
        document.cookie = "website=" + websitename
        document.cookie = "websiteurl=" + websiteurl
        document.cookie = "function=(mysqi,log,error,auth)"
    } else {
        if (cookies == "disabled") {
            console.clear()

        }
    }

}
function resetpass() {
    $("#reset").show();
    $("#main").hide();
    document.title = "Reset Password"

}
function backto() {
    $("#main").show();
    $("#reset").hide();
    websitename;
    if (websitename == "") {
        document.getElementById("webna").innerHTML = "Login"
        document.getElementById("web").innerHTML = "Login"

    } else {
        document.getElementById("webna").innerHTML = "Login To " + websitename
        document.getElementById("web").innerHTML = "Login To " + websitename

    }

}
function sing() {
    $("#signupf").show();
    $("#main").hide();
    websitename;
    if (websitename == "") {
        document.getElementById("webna").innerHTML = "Sign Up"
        document.getElementById("myid").innerHTML = "Sign Up"

    } else {
        document.getElementById("webna").innerHTML = "Sign Up For " + websitename
        document.getElementById("myid").innerHTML = "Sign Up For " + websitename

    }

}
function signo() {
    $("#main").show();
    $("#signupf").hide();
    websitename;
    if (websitename == "") {
        document.getElementById("webna").innerHTML = "Login"
        document.getElementById("web").innerHTML = "Login"

    } else {
        document.getElementById("webna").innerHTML = "Login To " + websitename
        document.getElementById("web").innerHTML = "Login To " + websitename

    }
}
function helloworld() {
    $("#reset").hide();
    $("#signupf").show();
    websitename;
    if (websitename == "") {
        document.getElementById("webna").innerHTML = "Sign Up"
        document.getElementById("myid").innerHTML = "Sign Up"

    } else {
        document.getElementById("webna").innerHTML = "Sign Up For " + websitename
        document.getElementById("myid").innerHTML = "Sign Up For " + websitename

    }

}
