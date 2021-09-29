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
<script src="../lr-js/module.js"></script>
<script src="../configurations.js"></script>


<body >
<div class="tobehidden">
   <div class="container-fluid" style="position: fixed;bottom: 0;right: 0; width: 100%;" id="main">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
         <div class="shadow-lg p-3 text-center round px-3 mx-4"
            style="padding: 100%; padding-right: -5%; padding-left: -5%; width:max-content; height: max-content;"><span
               class="hide">/</span>
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
                  <h4 class="my-3"><strong><span id="web"></span></strong></h4>
               </div>
               <div class="my-3 hide" style="font-size:2px;"><span style="font-size:2px;">/</span></div>
               <form class="mx-3 my-2" method="POST" action="../modules/signin.php">
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="form2Example1">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="my-0 mb-1 bi bi-person-fill" viewBox="0 0 16 16">
                           <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg> Enter Your Username</label>
                  </div>
                  <div class="form-outline mb-2">
                     <input type="text" id="form2Example1" name="user" class="form-control" required />
                     <label class="form-label gg" for="form2Example1">Username</label>
                  </div>
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="form2Example2">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-shield-lock-fill my-0 mb-1" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                        </svg> Enter Your Password</label>
                  </div>
                  <div class="form-outline mb-4">
                     <input type="password" id="form2Example2" name="password" class="form-control" required />
                     <label class="form-label gg" for="form2Example2">Password</label>
                  </div>

                  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in

                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="my-0 mb-1 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                           d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd"
                           d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                     </svg>
                  </button>
   <div class="text-center my-0">
      <a href="superadmin.php">Login As Admin <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-in-right my-0 mb-1" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
         <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
       </svg></a>
   </div>
                  <div class="text-center my-3">
                     <a class="mx-3" onclick="resetpass()">Lost Password?</a> <span
                        style="pointer-events: none;">&#x25CF;</span> <a class="mx-4" onclick="sing();">Signup Now</a>
                  </div>
                  <div class="text-center my-3">
                     <a> <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="my-0 mb-1 bi bi-box-arrow-in-left mx-0" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                 d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                              <path fill-rule="evenodd"
                                 d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                           </svg></span> <a id="getback3" class="mx-0"></a></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid" style="position: fixed;bottom: 0;right: 0; width: 100%; display:none;" id="reset">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
         <div class="shadow-lg p-3 text-center roundo px-3 mx-4"
            style="padding: 100%; padding-right: -5%; padding-left: -5%; width:max-content; height: max-content;"><span
               class="hide">/</span>
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
                  <h4 class="my-3"><strong><span></span>Reset Password</strong></h4>
               </div>
               <div class="my-3 hide" style="font-size:2px;"><span style="font-size:2px;">/</span></div>
               <form class="mx-3 my-2" method="POST" action="../modules/resetpass.php">
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="nn">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="my-0 mb-1 bi bi-person-fill" viewBox="0 0 16 16">
                           <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg> Enter Your Username</label>
                  </div>
                  <div class="form-outline mb-2">
                     <input type="text" id="nn" class="form-control" name="user" required />
                     <label class="form-label gg" for="nn">Username</label>
                  </div>
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="g">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-envelope-fill my-0 mb-1" viewBox="0 0 16 16">
                           <path
                              d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                        </svg> Enter Your Email ID</label>
                  </div>
                  <div class="form-outline mb-2">
                     <input type="email" id="g" name="gmail" class="form-control" required />
                     <label class="form-label gg" for="">Email ID</label>
                  </div>
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="zz">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-shield-lock-fill my-0 mb-1" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                        </svg> Enter A New Password</label>
                  </div>
                  <div class="form-outline mb-4">
                     <input type="password" id="zz" name="password" class="form-control" required />
                     <label class="form-label gg" for="">Password</label>
                  </div>
               

                  <button type="submit" class="btn btn-primary btn-block mb-4">Reset Password

                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="my-0 mb-1 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                           d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd"
                           d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                     </svg>
                  </button>

                  <div class="text-center my-3">
                     <a class="mx-3" onclick="backto()">Back To Signin</a> <span
                        style="pointer-events: none;">&#x25CF;</span> <a class="mx-4" onclick="helloworld()">Signup
                        Now</a>
                  </div>
                  <div class="text-center my-3">
                     <a> <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="my-0 mb-1 bi bi-box-arrow-in-left mx-0" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                 d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                              <path fill-rule="evenodd"
                                 d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                           </svg></span> <a id="getback2" class="mx-0"></a></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid" style="position: fixed;bottom: 0;right: 0; width: 100%; display:none;" id="signupf">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
         <div class="shadow-lg p-3 text-center roundo px-3 mx-4"
            style="padding: 100%; padding-right: -5%; padding-left: -5%; width:max-content; height: max-content;"><span
               class="hide">/</span>
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
                  <h4 class="my-3"><strong><span id="myid"></span></strong></h4>
               </div>
               <div class="my-3 hide" style="font-size:2px;"><span style="font-size:2px;">/</span></div>
               <form class="mx-3 my-2" method="POST" action="../modules/signup.php">
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="vv">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="my-0 mb-1 bi bi-person-fill" viewBox="0 0 16 16">
                           <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg> Enter A Username</label>
                  </div>
                  <div class="form-outline mb-2">
                     <input type="text" id="vv" name="user" class="form-control" required />
                     <label class="form-label gg" for="vv">Username</label>
                  </div>
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="ssdd">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-shield-lock-fill my-0 mb-1" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                        </svg> Enter A Password</label>
                  </div>
                  <div class="form-outline mb-4">
                     <input type="password" id="ssdd" name="password" class="form-control" required />
                     <label class="form-label gg" for="">Password</label>
                  </div>
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="bb">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-envelope-fill my-0 mb-1" viewBox="0 0 16 16">
                           <path
                              d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                        </svg> Enter Your Email ID</label>
                  </div>
                  <div class="form-outline mb-4">
                     <input type="email" id="bb" name="gmail" class="form-control" required />
                     <label class="form-label gg" for="bb">Email ID</label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up

                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="my-0 mb-1 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                           d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd"
                           d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                     </svg>
                  </button>

                  <div class="text-center my-3">
                     <a class="mx-3" onclick="signo()">Back To Signin</a> <span
                        style="pointer-events: none;">&#x25CF;</span> <a class="mx-3" target="_blank" id="tcprivacy"
                        href="https://policies.google.com/privacy">Terms & Privacy</a>
                  </div>
                  <div class="text-center my-3">
                     <a> <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="my-0 mb-1 bi bi-box-arrow-in-left mx-0" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                 d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                              <path fill-rule="evenodd"
                                 d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                           </svg></span> <a id="getback1" class="mx-0"></a></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <script type="text/javascript" src="../js/mdb.min.js"></script>
   <div class="toast-container" id="tos" style="position: absolute; top: 10px; right: 10px;display: none;">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
         data-bs-autohide="false">
         <div class="toast-header">
            <strong class="me-auto"><i class="bi bi-exclamation-triangle-fill"></i> Login Error</strong>
            <button type="button" class="btn-close" onclick="$('#tos').hide()" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            Invalid User ID or Password </div>
      </div>


   </div>
   <div class="toast-container" id="fatal" style="position: absolute; top: 10px; right: 10px;display: none;">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
         data-bs-autohide="false">
         <div class="toast-header">
            <strong class="me-auto"><i class="bi bi-exclamation-triangle-fill"></i> Error</strong>
            <button type="button" class="btn-close" onclick="$('#fatal').hide()" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            Seems You Are Logged Out Please Log In </div>
      </div>


   </div>




   <div class="toast-container" id="pong" style="position: absolute; top: 10px; right: 10px;display: none;">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
         data-bs-autohide="false">
         <div class="toast-header">
            <strong class="me-auto"><i class="bi bi-exclamation-triangle-fill"></i> Password Reset Error</strong>
            <button type="button" class="btn-close" onclick="$('#pong').hide()" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            Invalid User ID or Email ID </div>
      </div>


   </div>
   <div class="toast-container" id="don" style="position: absolute; top: 10px; right: 10px;display: none;">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
         data-bs-autohide="false">
         <div class="toast-header">
            <strong class="me-auto"><i class="bi bi-exclamation-triangle-fill"></i> Sign Up Error</strong>
            <button type="button" class="btn-close" onclick="$('#don').hide()" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            A User Exists With That Same Username </div>
      </div>


   </div>
   <div class="toast-container" id="xyz" style="position: absolute; top: 10px; right: 10px;display: none;">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
         data-bs-autohide="false">
         <div class="toast-header">
            <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Sign Up Success</strong>
            <button type="button" class="btn-close" onclick="$('#xyz').hide()" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            You Have Been Successfully Signed Up  <span id="myxy"></span> </div>
      </div>


   </div>
   <div class="toast-container" id="r443r4r" style="position: absolute; top: 10px; right: 10px;display: none;">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
         data-bs-autohide="false">
         <div class="toast-header">
            <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Account Deletion Success</strong>
            <button type="button" class="btn-close" onclick="$('#r443r4r').hide()" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            We Have Successfully Deleted Your Account </div>
      </div>

      <script>
         if (window.location.search == "?del") {
            document.getElementById("r443r4r").style.display = "block"

         }
      </script>
   </div>
   <div class="toast-container" id="yz" style="position: absolute; top: 10px; right: 10px;display: none;">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
         data-bs-autohide="false">
         <div class="toast-header">
            <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Password Reset Success</strong>
            <button type="button" class="btn-close" onclick="$('#yz').hide()" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            Your Password Has Been Successfully Updated </div>
      </div>


   </div>
   <div class="toast-container" id="logout" style="position: absolute; top: 10px; right: 10px;display: none;">
      <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
         data-bs-autohide="false">
         <div class="toast-header">
            <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Logout Success</strong>
            <button type="button" class="btn-close" onclick="$('#logout').hide()" aria-label="Close"></button>
         </div>
         <div class="toast-body">
            You Have Been Successfully Logged Out </div>
      </div>


   </div>
</body>
<script >

</script>
<head>
   <style>
      div.fixed {
         position: fixed;
         bottom: 0;
         right: 0;
         width: 300px;
      }
   </style>
</head>

<body>

   <div class="fixed mb-2" data-mdb-toggle="tooltip">
      <span class="hide">This div element has position: fi</span>
      <d id="fixed" title="Version 0.1">V 0.1</d>
   </div>
   <script>const exampleEl = document.getElementById('fixed')
      const tooltip = new mdb.Tooltip(exampleEl);


   </script>
</body>
</div>
</html>