<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: ../system/index.php?fail");
}

?>
<?php include 'theme.html'?>

<head>
   <!-- add Your Styles Here -->
   <!-- before doing anything here pls remove<?php include 'theme.html'?> line -->
</head>
<script src="../lr-js/link1.js"></script>
<script src="../lr-js/module.js"></script>
<script src="../lr-js/module2.js"></script>
<div class="tobehidden">

<a href="" hidden id="tcprivacy"></a>
<a href="" hidden id="web"></a>
<a href="" hidden id="webna"></a>

<script src="../configurations.js"></script>
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
               <h4 class="my-3"><strong><span>Welcome <span id="mynameeee">
                           <?php echo $_SESSION['username'];?>
                        </span> </span></strong></h4>
            </div>
            <div class="my-3 hide" style="font-size:2px;"><span style="font-size:2px;">/</span></div>
            <div class="mx-3 my-2 text-center">

               <H5><strong>Please Choose Any Of The Options Below</strong></H5>
               <div class="text-center my-4">

                  <a class="btn btn-light btn-lg mx-3" id="settings" href="settings.php"><i class="bi bi-gear"></i>
                     settings</a>
                  <a class="btn btn-light btn-lg mx-3" id="logout" href="../modules/logout.php"><i
                        class="bi bi-power"></i> logout</a>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<div class="toast-container" id="fatal" style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast fade show">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Login Success</strong>
         <button type="button" class="btn-close" onclick="$('#fatal').hide()" aria-label="Close"></button>
      </div>
      <div class="toast-body">
         You Have Logged In With Username "
         <?php echo $_SESSION['username'];?>"
      </div>
   </div>


</div>
<div class="toast-container" id="d" style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast fade show">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Session Restore Success</strong>
         <button type="button" class="btn-close" onclick="$('#d').hide()" aria-label="Close"></button>
      </div>
      <div class="toast-body">
         Session Has Been Successfully Restored </div>
   </div>


</div>
<script src="../js/mdb.min.js"></script>

<script>

   if (websitename == "") {
      document.title = "Welcome " + document.getElementById("mynameeee").innerHTML
   } else {
      document.title = websitename
   }

</script></div>