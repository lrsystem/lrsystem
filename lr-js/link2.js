window.onload =function dev(){
    document.title = websitename + " Account Settings"
    if (websiteurl == "") {
        if (websitename == "") {
            document.getElementById("getback1").innerHTML = "Back"

        } else {
            document.getElementById("getback1").innerHTML = "Back To " + websitename
        } 
    } else {
        if (websitename == "") {
            document.getElementById("getback1").innerHTML = "Back"

        } else {
            document.getElementById("getback1").innerHTML = "Back To " + websitename
        }
    }    if(window.location.search == "?exists1"){
        document.getElementById("erererrererererrer").style.display = "block"
        document.getElementById("toh").style.display = "block"
        document.getElementById("er").style.display = "block"
        document.getElementById("element").style.display = "block"
        document.getElementById("f").style.display = "none"
        document.getElementById("myhi").style.display = "none"

    }
    if(window.location.search == "?exists"){
        document.getElementById("errererre").style.display = "block"
        document.getElementById("toh").style.display = "block"
        document.getElementById("er").style.display = "block"
        document.getElementById("element").style.display = "block"
        document.getElementById("f").style.display = "none"
        document.getElementById("myhi").style.display = "none"

    }  if(window.location.search == "?done"){
        document.getElementById("htsr").style.display = "block"
        document.getElementById("toh").style.display = "block"
        document.getElementById("er").style.display = "block"
        document.getElementById("element").style.display = "block"
        document.getElementById("f").style.display = "none"
        document.getElementById("myhi").style.display = "none"

    }
     if(window.location.search == "?done1"){
        document.getElementById("ererrerr").style.display = "block"
        document.getElementById("toh").style.display = "block"
        document.getElementById("er").style.display = "block"
        document.getElementById("element").style.display = "block"
        document.getElementById("f").style.display = "none"
                           document.getElementById("myhi").style.display = "none"

    }
       if(window.location.search == "?done2"){
        document.getElementById("efwfefwefewwedwdferfWCefewfe").style.display = "block"
        document.getElementById("toh").style.display = "block"
        document.getElementById("er").style.display = "block"
        document.getElementById("element").style.display = "block"
        document.getElementById("f").style.display = "none"
                           document.getElementById("myhi").style.display = "none"

    }
    if(window.location.search == "?err"){
        document.getElementById("pasw").style.display = "block"
        document.getElementById("toh").style.display = "none"
        document.getElementById("er").style.display = "none"
        document.getElementById("element").style.display = "none"
        document.getElementById("f").style.display = "block"
                           document.getElementById("myhi").style.display = "block"

    } if(window.location.search == "?deleer"){
        document.getElementById("deler").style.display = "block"
    
         document.getElementById("toh").style.display = "block"
        document.getElementById("er").style.display = "block"
        document.getElementById("element").style.display = "block"
        document.getElementById("f").style.display = "none"
                           document.getElementById("myhi").style.display = "none"

    }
}
