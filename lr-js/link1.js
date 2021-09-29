
window.onload = function h(){
    document.title = websitename
    if(window.location.search == "?login"){
        document.getElementById("fatal").style.display="block"
    };
    if(window.location.search  == "?session"){
        document.getElementById("d").style.display="block"
    };

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
;}

