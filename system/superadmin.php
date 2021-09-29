<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['username'])){
   echo"<script> location.href = 'welcome.php' + '?session' </script>";

}

?>
<?php
include 'theme.html'?>
<script>
    var useradmin;
    var passwordadmin;
</script>
<script src="../configurations.js"></script>

<script src="../lr-js/module3.js"></script>


<body>
    <div class="tobehidden">
        <div class="container-fluid" style="position: fixed;bottom: 0;right: 0; width: 100%;" id="main">
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="shadow-lg p-3 text-center round px-3 mx-4"
                    style="padding: 100%; padding-right: -5%; padding-left: -5%; width:max-content; height: max-content;">
                    <span class="hide">/</span>
                    <div style="width:100%">
                        <div class="my-2">
                            <div class="my-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="my-3"><strong><span id="web" hidden>Login</span>Login As Admin</strong></h4>
                        </div>
                        <div class="my-3 hide" style="font-size:2px;"><span style="font-size:2px;">/</span></div>
                        <div class="mx-3 my-2 needs-validation" method="POST" data-sb-form-api-token="API_TOKEN">
                            <div class="text-left" style="align-items: flex-start;text-align: left;">
                                <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="name">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="my-0 mb-1 bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                                        </path>
                                    </svg> Enter Your Username</label>
                            </div>

                            <div class="form-outline mb-2">
                                <input type="text" id="name" class="form-control" data-sb-validations="required">
                                <label class="form-label gg" for="form2Example1"
                                    style="margin-left: 0px;">Username</label>
                                <div class="valid-tooltip">Looks good!</div>

                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>
                            <div class="text-left" style="align-items: flex-start;text-align: left;">
                                <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="pass">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-shield-lock-fill my-0 mb-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z">
                                        </path>
                                    </svg> Enter Your Password</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="pass" class="form-control">
                                <label class="form-label gg" for="form2Example2"
                                    style="margin-left: 0px;">Password</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 64.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>
                            <button onclick="supera()" id="submitButton" class="btn btn-primary btn-block disabled">Sign in
                                <script>
                                    function supera() {
                                        var one = document.getElementById("name")
                                        var two = document.getElementById("pass")
                                        if (!one.value == "" && !two.value == "") {
                                            if (one.value == useradmin && two.value == passwordadmin) {
                                                document.getElementById("xyz").style.display = "block"
                                                document.getElementById("main").style.display = "none"
                                                document.getElementById("username").innerHTML = useradmin
                                                document.title = "Admin Panel"
                                                document.getElementById("panel").style.display = "block"
                                                document.getElementById("password").innerHTML= document.getElementById("pass").value                      
                                                          document.getElementById("usena").innerHTML = useradmin
                                                          document.getElementById("users").innerHTML = localStorage.getItem("ro")

                                            } else {

                                                alert("Invalid User Id Or Password")

                                            }
                                        } else {
                                            alert("Please Fill In The Required Fields")
                                        }





                                    }

                                </script> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="my-0 mb-1 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z">
                                    </path>
                                </svg>
                            </button>



                            <div class="text-center my-2">
                                <a href="index.php">Login As User <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                        height="18" fill="currentColor" class="bi bi-box-arrow-in-right my-0 mb-1"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                        <path fill-rule="evenodd"
                                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg></a>
                            </div>
                            <div class="hide">

                                <div class="text-center my-1">
                                    <a class="mx-3" onclick="resetpass()" id="getback2">Lost Password?</a> <span
                                        style="pointer-events: none;">●</span> <a class="mx-4" onclick="sing();">Signup
                                        Now</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <script type="text/javascript" src="../js/mdb.min.js"></script>




        <style>
            div.fixed {
                position: fixed;
                bottom: 0;
                right: 0;
                width: 300px;
            }

        </style>


        <div class="container-fluid mb-5" style="position: fixed;bottom: 0;right: 0; width: 100%;display: none;"
            id="panel">
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="shadow-lg p-3 text-center round px-3 mx-4"
                    style="padding: 100%; padding-right: -5%; padding-left: -5%; width:max-content; height: max-content;">
                
                    <span class="hide">/</span>
                    <div style="width:100%">
                        <div class="my-2">
                            <div class="my-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </div>
                            <h4 class="my-3"><strong><span>Welcome <span id="webs">
                                        </span> </span></strong> <svg onclick="location.reload()" id="log" data-mdb-toggle="tooltip" data-bs-placement="bottom" title="Logout" xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="my-1 yes mb-1 bi bi-power" viewBox="0 0 16 16">
                                            <path d="M7.5 1v7h1V1h-1z"/>
                                            <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                                          </svg></h4> 
                        </div> <script>const exampleEl = document.getElementById('log')
                            const tooltip = new mdb.Tooltip(exampleEl);
                
                
                        </script>
                
                        <div class="text-center my-3">
                            <!-- Tabs navs -->
<ul class="nav nav-pills mb-3 text-center align-items-center justify-content-center" id="ex1" role="tablist">
    <li class="nav-item mx-2" role="presentation">
      <a
        class="nav-link active"
        id="ex1-tab-1"
        data-mdb-toggle="tab"
        href="#ex1-tabs-1"
        role="tab"
        aria-controls="ex1-tabs-1"
        aria-selected="true"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-0 mb-1 bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg> Home</a
      >
    </li>
    <li class="nav-item mx-2" role="presentation">
      <a
        class="nav-link"
        id="ex1-tab-2"
        data-mdb-toggle="tab"
        href="#ex1-tabs-2"
        role="tab"
        aria-controls="ex1-tabs-2"
        aria-selected="false"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-0 mb-1 bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Users</a
      >
    </li>
 
  </ul>
  <!-- Tabs navs -->
  
  <!-- Tabs content -->
  <div class="tab-content mx-2" id="ex1-content">
    <div
      class="tab-pane fade show active"
      id="ex1-tabs-1"
      role="tabpanel"
      aria-labelledby="ex1-tab-1"
    >
    <?php readfile('import.php');?>
</div>
    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    <div class=" d-flex justify-content-center alignitems-center text-center" style="overflow:auto;">
    <iframe src="import1.php" frameborder="0"></iframe>
    
</div>


  </div>
  <!-- Tabs content -->
                        </div>
                    <script>
                                document.getElementById("hel").innerHTML = window.location.protocol
                                if (websiteurl == "") {
                                    document.getElementById("website").innerHTML = window.location.hostname
                                }
                                else {
                                    document.getElementById("website").innerHTML = websiteurl
                                }
                            </script>



                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="toast-container" id="xyz" style="position: absolute; top: 10px; right: 10px;display: none;">
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
            data-bs-autohide="false">
            <div class="toast-header">
                <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Login Success</strong>
                <button type="button" class="btn-close" onclick="$('#xyz').hide()" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                You Have Logged in With Username <span id="username"></span>
            </div>


        </div>


       
    </div>
    <script>
        document.getElementById("webs").innerHTML = useradmin
        if (websitename == "") {
            document.getElementById("web").innerHTML = "Unknown"
        }
        else {

        }</script>

    </script>
    <body>
        <div class="fixed mb-2" data-mdb-toggle="tooltip">
            <span class="hide">This div element has position: fi</span>
            <d id="fixed" title="" data-mdb-original-title="Version 0.1">V 0.1</d>
        </div>
        <script>const exampleEl = document.getElementById('fixed')
            const tooltip = new mdb.Tooltip(exampleEl);


        </script>

    </body><script>
        window.onload =function refref(){
            document.getElementById("submitButton").className = 'btn btn-primary btn-block'
        }
    </script>