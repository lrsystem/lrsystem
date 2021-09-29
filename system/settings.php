<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: ../system/index.php?fail");
}

?>
<?php
include '../database.php';
$field = "emailgoogle";
$co = $_SESSION['username'];
$myem = "SELECT emailgoogle FROM `storage` WHERE `name` = '$co' ";
$result = mysqli_query($con, $myem);
$row = mysqli_fetch_array($result);
$hh =  $row[$field];
?>
<?php
$fieldd = "date";
$myemd = "SELECT date FROM `storage` WHERE `name` = '$co' ";
$resultd = mysqli_query($con, $myemd);
$rowd = mysqli_fetch_array($resultd);
$ee =  $rowd[$fieldd];
?>
<?php
include 'theme.html'?>
<script>
   window.onload = function r(){
var d =document
    if(window.location.search == "?exists"){
        var d =document

        d.getElementById("errererre").style.display="block"
    };
    if(window.location.search == "?done"){
        var d =document

        d.getElementById("htsr").style.display="block"
    };if(window.location.search == "?done2"){
        var d =document

            document.getElementById("ererrerr").style.display="block"
    };
    if(window.location.search == "?exists1"){
            var d =document;
        d.getElementById("erererrererererrer").style.display="block"
    };
    if(window.location.search == "?err"){
            var d =document;
        d.getElementById("pasw").style.display="block"
    };
    if(window.location.search == "?done3"){
            var d =document;
        d.getElementById("efwfefwefewwedwdferfWCefewfe").style.display="block"
    };
}
</script>
<div class="tobehidden">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" style="color:black;" id="exampleModalLabel">
               <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                  class="my-0 mb-1 bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
               </svg> Account Information
            </h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" style="color:black;">
            <div class="d-inline">
               <h6><strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="my-0 mb-1 bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                     </svg> Username: <span id="mynameeee">
                        <?php echo $_SESSION['username'];?>
                     </span></strong></h6>
            </div>


            <div class="d-inline" style="width: 100%;">
               <h6><strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="my-0 mb-1 bi bi-shield-lock-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                           d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                     </svg> <span>Password: </span>
                     <svg xmlns="http://www.w3.org/2000/svg" id="eye" width="16" height="16" onclick="openpasword()"
                        fill="currentColor" class="my-0 mb-1 bi bi-eye-fill yes" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                        <path
                           d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                     </svg>

                     <strong><input class="my-1" id="passinput"
                           style="pointer-events: none; border: none;outline: none;"
                           value="<?php echo $_SESSION['password']?>" type="password" /></strong></h6>


               </strong>
            </div>

            <script>
               function openpasword() {
                  var x = document.getElementById("passinput");

                  const xt = localStorage.getItem("accpas")
                  if (xt) {
                     document.getElementById("eye").style.display = "none"

                     x.type = "text";
                  } else {
                     var or = prompt("Please Type Your Account Password To Continue")
                     if (or == x.value) {

                        localStorage.setItem("accpas", "true")
                        x.type = "text"
                        document.getElementById("eye").style.display = "none"

                     }
                     else {
                        alert("Invalid Password")
                     }
                  }
               }

            </script>


            <div class="d-inline my-2">
               <h6><strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="my-0 mb-1 bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                           d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                     </svg> Email ID: <span>
                        <?php echo $hh;?>
                     </span></strong></h6>
            </div>
            <div class="d-inline my-2">
               <h6><strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="my-0 mb-1 bi bi-clock-fill" viewBox="0 0 16 16">
                        <path
                           d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                     </svg> Signed Up On: <span>
                        <?php echo $ee;?>
                     </span></strong></h6>
            </div>
            <div class="d-inline my-2">
               <h6><strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="my-0 mb-1 bi bi-clock-fill" viewBox="0 0 16 16">
                        <path
                           d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                     </svg> Logged In On: <span id="idlogin"></span></strong></h6>
           <div class="d-inline my-2">
               <h6><strong><svg version="1.1" fill="black" width="18" height="18" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="my-0 mb-1"
                        viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                        <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                        <g>
                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
                              <path
                                 d="M4621.5,5012.4c-446.6-46-797.3-116.9-1159.6-237.7C1984.1,4289.9,822.6,3128.4,337.7,1650.6C161.4,1115.8,98.1,709.5,100,107.7c0-488.8,34.5-780.1,139.9-1197.9c168.7-665.1,515.6-1351.3,950.7-1887.9c176.3-218.5,525.2-563.5,741.8-736c529-421.7,1203.7-757.1,1855.3-923.8c417.8-105.4,709.2-139.9,1197.9-139.9c460-1.9,609.5,11.5,1021.6,95.8c703.4,139.9,1485.4,511.7,2064.3,979.4c233.8,189.7,575,530.9,760.9,762.8c415.9,519.4,753.3,1201.8,916.2,1849.6c425.5,1690.5-59.4,3446.2-1286.1,4674.8c-759,759-1686.7,1222.9-2777.3,1391.5C5491.7,5004.8,4790.2,5029.7,4621.5,5012.4z M4650.2,3222.3v-941.1l-99.7,11.5c-322,38.3-546.3,72.8-732.2,115c-243.4,55.6-529,139.9-529,157.2c0,24.9,182.1,348.8,285.6,504.1c235.8,358.4,584.6,739.8,893.2,975.6c84.3,63.3,159.1,116.9,168.7,116.9C4644.5,4161.4,4650.2,3737.9,4650.2,3222.3z M5503.2,4061.8c306.7-228.1,672.7-628.7,914.3-994.8c101.6-153.3,283.7-477.3,283.7-502.2c0-17.3-285.6-101.6-529-157.2c-185.9-42.2-410.2-76.7-730.3-115l-101.6-11.5v941.1c0,515.6,5.7,939.2,15.3,939.2C5363.3,4161.4,5430.3,4115.4,5503.2,4061.8z M3423.6,4019.6c0-3.8-57.5-74.8-126.5-157.2c-159.1-191.7-373.8-513.7-523.2-782c-63.2-116.9-118.8-218.5-122.7-230c-7.7-23-168.7,65.2-392.9,212.8c-187.9,124.6-193.6,97.7,82.4,322c287.5,231.9,621,438.9,923.8,575C3425.5,4031.1,3423.6,4031.1,3423.6,4019.6z M6881.3,3881.6c260.7-130.3,580.8-339.2,810.8-530.9c95.8-80.5,180.2-153.3,185.9-164.8c7.7-9.6-59.4-65.2-145.7-122.7c-230-149.5-385.2-235.8-392.9-212.8c-3.8,11.5-59.4,113.1-122.7,230c-149.5,270.3-331.6,542.4-492.6,739.8c-170.6,208.9-172.5,210.8-105.4,185.9C6647.4,3994.7,6766.3,3939.1,6881.3,3881.6z M1790.6,2543.8c82.4-55.6,243.4-157.2,358.4-224.3c116.9-65.2,214.7-122.7,218.5-124.6c3.8-3.8-28.8-128.4-70.9-279.8c-105.4-366.1-168.7-693.8-207-1040.8c-15.3-157.2-34.5-316.3-38.3-348.8l-9.6-63.2h-621c-561.6,0-622.9,3.8-622.9,30.7c0,17.2,13.4,122.7,30.7,235.7c76.7,527.1,247.3,1019.7,509.8,1475.8c115,199.3,277.9,442.8,297.1,442.8C1641.1,2647.3,1710.1,2601.3,1790.6,2543.8z M8479.8,2480.5c293.2-437,481.1-860.6,605.7-1357c42.2-172.5,107.3-550.1,107.3-630.6c0-26.8-61.3-30.7-622.9-30.7h-622.9l-7.7,44.1c-5.8,23-13.4,115-21.1,205.1c-24.9,362.3-107.3,795.4-235.7,1243.9c-38.3,136.1-59.4,241.5-47.9,245.3c42.2,15.3,477.2,281.7,584.6,360.3c65.2,47.9,124.6,86.3,134.2,86.3C8360.9,2647.3,8418.4,2572.5,8479.8,2480.5z M3638.2,1738.8c212.7-49.8,628.7-113.1,883.6-136.1l128.4-13.4v-563.5V462.2h-956.4h-956.4l7.7,72.8c47.9,475.3,107.3,816.5,201.3,1148.1c32.6,113.1,63.2,212.7,67.1,218.5c3.8,7.7,97.8-15.3,208.9-51.8C3331.6,1815.4,3519.4,1765.6,3638.2,1738.8z M7044.2,1679.3c103.5-373.8,193.6-891.3,193.6-1123.2v-93.9H6289h-948.8v563.5v563.5l130.3,13.4c458.1,42.2,941.1,134.2,1291.8,247.3c109.3,34.5,203.2,57.5,208.9,51.8C6979,1895.9,7011.6,1796.3,7044.2,1679.3z M2051.2-308.3c5.8-46,15.3-141.8,21.1-216.6c32.6-404.4,143.8-943,285.6-1381.9c11.5-36.4-5.7-51.8-136.1-122.7c-122.7-67.1-404.4-247.2-561.6-360.3c-30.7-23-42.2-11.5-118.8,95.8c-285.6,402.5-517.5,912.3-634.4,1395.3C862.9-716.5,797.7-337,797.7-258.4c0,26.8,61.3,30.7,621,30.7h622.9L2051.2-308.3z M4646.4-787.4l-5.7-561.6l-182.1-13.4c-377.6-28.8-806.9-111.2-1217.1-235.8c-120.7-36.4-222.3-67.1-228.1-67.1c-3.8,0-32.6,92-65.2,207c-76.7,262.6-149.5,628.7-176.3,885.5c-11.5,111.2-23,233.8-26.8,274.1l-7.7,70.9h956.4h956.4L4646.4-787.4z M7245.4-298.7c-3.8-40.2-15.3-162.9-26.8-274.1c-26.8-251.1-99.7-619.1-174.4-881.7c-32.6-109.2-61.3-203.2-63.3-207c-3.8-1.9-107.3,24.9-230,61.3c-412.1,126.5-839.5,208.9-1219,237.7l-182.1,13.4l-5.7,561.6l-3.8,559.7h956.4h956.4L7245.4-298.7z M9192.8-258.4c0-80.5-65.2-458.1-107.3-630.6c-124.6-496.4-312.4-920-605.7-1357c-74.7-113.1-120.8-162.9-136.1-153.3c-13.4,9.6-116.9,78.6-233.8,157.2c-115,76.7-274.1,174.4-348.8,216.6c-76.7,42.2-139.9,78.6-139.9,82.4s21.1,74.8,47.9,157.2c107.3,343.1,201.2,803.1,239.6,1184.5c11.5,116.9,24.9,247.3,30.7,293.2l9.6,80.5h622.9C9131.4-227.8,9192.8-231.6,9192.8-258.4z M4650.2-2997.4c0-521.3-5.7-948.8-11.5-948.8c-36.4,0-337.3,251.1-527.1,440.8c-230,228.1-379.5,414-559.7,690c-139.9,218.5-287.5,492.6-268.3,504.1c28.8,17.3,419.7,126.5,563.5,157.2c214.7,47.9,590.3,101.6,703.4,103.5l99.7,1.9V-2997.4z M5708.3-2079.3c118.8-15.3,299-46,398.7-67.1c174.4-38.3,569.3-145.7,599.9-164.8c19.2-11.5-130.3-291.3-281.8-523.3c-254.9-389.1-590.3-757.1-916.2-1002.4c-80.5-59.4-151.4-109.2-157.2-109.2c-5.8,0-11.5,427.4-11.5,948.8v948.7h76.7C5457.2-2048.6,5589.4-2062,5708.3-2079.3z M2743.2-2805.7c134.2-251.1,366.1-603.7,532.8-810.8c70.9-86.3,118.8-157.2,107.3-157.2c-51.7,0-509.8,247.3-726.4,392.9c-228.1,153.3-555.8,415.9-555.8,446.6c1.9,24.9,479.2,329.7,519.4,329.7C2628.2-2604.5,2683.7-2694.5,2743.2-2805.7z M7536.8-2696.4c220.4-134.2,352.7-222.3,352.7-237.7c0-28.7-325.8-291.3-544.3-438.9c-205.1-138-690-400.6-739.8-400.6c-11.5,0,36.4,69,105.4,153.3c168.7,207,360.3,498.3,517.5,782c70.9,128.4,134.2,233.8,141.8,233.8C7379.6-2604.5,7452.4-2646.6,7536.8-2696.4z" />
                           </g>
                        </g>
                     </svg> Website: <span id="website"></span></strong></h6>
            </div>     </div>
        
            <div class="d-inline my-2">
               <h6><strong><svg version="1.1" fill="black" width="18" height="18" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="my-0 mb-1"
                        viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                        <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                        <g>
                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
                              <path
                                 d="M4621.5,5012.4c-446.6-46-797.3-116.9-1159.6-237.7C1984.1,4289.9,822.6,3128.4,337.7,1650.6C161.4,1115.8,98.1,709.5,100,107.7c0-488.8,34.5-780.1,139.9-1197.9c168.7-665.1,515.6-1351.3,950.7-1887.9c176.3-218.5,525.2-563.5,741.8-736c529-421.7,1203.7-757.1,1855.3-923.8c417.8-105.4,709.2-139.9,1197.9-139.9c460-1.9,609.5,11.5,1021.6,95.8c703.4,139.9,1485.4,511.7,2064.3,979.4c233.8,189.7,575,530.9,760.9,762.8c415.9,519.4,753.3,1201.8,916.2,1849.6c425.5,1690.5-59.4,3446.2-1286.1,4674.8c-759,759-1686.7,1222.9-2777.3,1391.5C5491.7,5004.8,4790.2,5029.7,4621.5,5012.4z M4650.2,3222.3v-941.1l-99.7,11.5c-322,38.3-546.3,72.8-732.2,115c-243.4,55.6-529,139.9-529,157.2c0,24.9,182.1,348.8,285.6,504.1c235.8,358.4,584.6,739.8,893.2,975.6c84.3,63.3,159.1,116.9,168.7,116.9C4644.5,4161.4,4650.2,3737.9,4650.2,3222.3z M5503.2,4061.8c306.7-228.1,672.7-628.7,914.3-994.8c101.6-153.3,283.7-477.3,283.7-502.2c0-17.3-285.6-101.6-529-157.2c-185.9-42.2-410.2-76.7-730.3-115l-101.6-11.5v941.1c0,515.6,5.7,939.2,15.3,939.2C5363.3,4161.4,5430.3,4115.4,5503.2,4061.8z M3423.6,4019.6c0-3.8-57.5-74.8-126.5-157.2c-159.1-191.7-373.8-513.7-523.2-782c-63.2-116.9-118.8-218.5-122.7-230c-7.7-23-168.7,65.2-392.9,212.8c-187.9,124.6-193.6,97.7,82.4,322c287.5,231.9,621,438.9,923.8,575C3425.5,4031.1,3423.6,4031.1,3423.6,4019.6z M6881.3,3881.6c260.7-130.3,580.8-339.2,810.8-530.9c95.8-80.5,180.2-153.3,185.9-164.8c7.7-9.6-59.4-65.2-145.7-122.7c-230-149.5-385.2-235.8-392.9-212.8c-3.8,11.5-59.4,113.1-122.7,230c-149.5,270.3-331.6,542.4-492.6,739.8c-170.6,208.9-172.5,210.8-105.4,185.9C6647.4,3994.7,6766.3,3939.1,6881.3,3881.6z M1790.6,2543.8c82.4-55.6,243.4-157.2,358.4-224.3c116.9-65.2,214.7-122.7,218.5-124.6c3.8-3.8-28.8-128.4-70.9-279.8c-105.4-366.1-168.7-693.8-207-1040.8c-15.3-157.2-34.5-316.3-38.3-348.8l-9.6-63.2h-621c-561.6,0-622.9,3.8-622.9,30.7c0,17.2,13.4,122.7,30.7,235.7c76.7,527.1,247.3,1019.7,509.8,1475.8c115,199.3,277.9,442.8,297.1,442.8C1641.1,2647.3,1710.1,2601.3,1790.6,2543.8z M8479.8,2480.5c293.2-437,481.1-860.6,605.7-1357c42.2-172.5,107.3-550.1,107.3-630.6c0-26.8-61.3-30.7-622.9-30.7h-622.9l-7.7,44.1c-5.8,23-13.4,115-21.1,205.1c-24.9,362.3-107.3,795.4-235.7,1243.9c-38.3,136.1-59.4,241.5-47.9,245.3c42.2,15.3,477.2,281.7,584.6,360.3c65.2,47.9,124.6,86.3,134.2,86.3C8360.9,2647.3,8418.4,2572.5,8479.8,2480.5z M3638.2,1738.8c212.7-49.8,628.7-113.1,883.6-136.1l128.4-13.4v-563.5V462.2h-956.4h-956.4l7.7,72.8c47.9,475.3,107.3,816.5,201.3,1148.1c32.6,113.1,63.2,212.7,67.1,218.5c3.8,7.7,97.8-15.3,208.9-51.8C3331.6,1815.4,3519.4,1765.6,3638.2,1738.8z M7044.2,1679.3c103.5-373.8,193.6-891.3,193.6-1123.2v-93.9H6289h-948.8v563.5v563.5l130.3,13.4c458.1,42.2,941.1,134.2,1291.8,247.3c109.3,34.5,203.2,57.5,208.9,51.8C6979,1895.9,7011.6,1796.3,7044.2,1679.3z M2051.2-308.3c5.8-46,15.3-141.8,21.1-216.6c32.6-404.4,143.8-943,285.6-1381.9c11.5-36.4-5.7-51.8-136.1-122.7c-122.7-67.1-404.4-247.2-561.6-360.3c-30.7-23-42.2-11.5-118.8,95.8c-285.6,402.5-517.5,912.3-634.4,1395.3C862.9-716.5,797.7-337,797.7-258.4c0,26.8,61.3,30.7,621,30.7h622.9L2051.2-308.3z M4646.4-787.4l-5.7-561.6l-182.1-13.4c-377.6-28.8-806.9-111.2-1217.1-235.8c-120.7-36.4-222.3-67.1-228.1-67.1c-3.8,0-32.6,92-65.2,207c-76.7,262.6-149.5,628.7-176.3,885.5c-11.5,111.2-23,233.8-26.8,274.1l-7.7,70.9h956.4h956.4L4646.4-787.4z M7245.4-298.7c-3.8-40.2-15.3-162.9-26.8-274.1c-26.8-251.1-99.7-619.1-174.4-881.7c-32.6-109.2-61.3-203.2-63.3-207c-3.8-1.9-107.3,24.9-230,61.3c-412.1,126.5-839.5,208.9-1219,237.7l-182.1,13.4l-5.7,561.6l-3.8,559.7h956.4h956.4L7245.4-298.7z M9192.8-258.4c0-80.5-65.2-458.1-107.3-630.6c-124.6-496.4-312.4-920-605.7-1357c-74.7-113.1-120.8-162.9-136.1-153.3c-13.4,9.6-116.9,78.6-233.8,157.2c-115,76.7-274.1,174.4-348.8,216.6c-76.7,42.2-139.9,78.6-139.9,82.4s21.1,74.8,47.9,157.2c107.3,343.1,201.2,803.1,239.6,1184.5c11.5,116.9,24.9,247.3,30.7,293.2l9.6,80.5h622.9C9131.4-227.8,9192.8-231.6,9192.8-258.4z M4650.2-2997.4c0-521.3-5.7-948.8-11.5-948.8c-36.4,0-337.3,251.1-527.1,440.8c-230,228.1-379.5,414-559.7,690c-139.9,218.5-287.5,492.6-268.3,504.1c28.8,17.3,419.7,126.5,563.5,157.2c214.7,47.9,590.3,101.6,703.4,103.5l99.7,1.9V-2997.4z M5708.3-2079.3c118.8-15.3,299-46,398.7-67.1c174.4-38.3,569.3-145.7,599.9-164.8c19.2-11.5-130.3-291.3-281.8-523.3c-254.9-389.1-590.3-757.1-916.2-1002.4c-80.5-59.4-151.4-109.2-157.2-109.2c-5.8,0-11.5,427.4-11.5,948.8v948.7h76.7C5457.2-2048.6,5589.4-2062,5708.3-2079.3z M2743.2-2805.7c134.2-251.1,366.1-603.7,532.8-810.8c70.9-86.3,118.8-157.2,107.3-157.2c-51.7,0-509.8,247.3-726.4,392.9c-228.1,153.3-555.8,415.9-555.8,446.6c1.9,24.9,479.2,329.7,519.4,329.7C2628.2-2604.5,2683.7-2694.5,2743.2-2805.7z M7536.8-2696.4c220.4-134.2,352.7-222.3,352.7-237.7c0-28.7-325.8-291.3-544.3-438.9c-205.1-138-690-400.6-739.8-400.6c-11.5,0,36.4,69,105.4,153.3c168.7,207,360.3,498.3,517.5,782c70.9,128.4,134.2,233.8,141.8,233.8C7379.6-2604.5,7452.4-2646.6,7536.8-2696.4z" />
                           </g>
                        </g>
                     </svg> Orgin: <span id="hel"></span></strong></h6>
            </div>
            <div class="d-inline">
               <h6><strong><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="my-0 mb-1 bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path
                           d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                     </svg> System Version: <span>V 0.1</span></strong></h6>
            </div>
         </div>
         <script>

            document.getElementById("idlogin").innerHTML = localStorage.getItem("logintimeforlr");
            var myhelp = document.getElementById("idlogin").innerHTML.replace('(Pacific Daylight Time)', '');
            document.getElementById("idlogin").innerHTML = myhelp;
            document.getElementById("hel").innerHTML = window.location.protocol
               if(websitename == ""){
                  document.getElementById("website").innerHTML = window.location.hostname
                  }
            else{
             document.getElementById("website").innerHTML = websitename
            }
         </script>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
               Close
            </button>
         </div>
      </div>
   </div>
</div>

<div class="container-fluid" style="position: fixed;bottom: 0;right: 0; width: 100%; " id="signupf">
   <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="shadow-lg p-3 text-center roundo px-3 mx-4"
         style="padding: 100%; padding-right: -5%; padding-left: -5%; width:max-content; height: max-content;">

         <div class="input-group">
            <div class="input-group-prepend mx-1">
               <i class="bi bi-archive-fill yes " data-mdb-toggle="tooltip" data-mdb-placement="bottom"
                  title="Delete Account" onclick="
                  const delelete = localStorage.getItem('accpas')
                  if(delelete){
                     var ft = confirm('Are You Sure To Delete This Account?')
                  if(ft == true){
                     location.href = '../modules/deleteaccount.php'

                  }else{
                     
                  } 
                  }else{
               var d = prompt('Please Enter Your Account Password To Delete This Account')
               if(d == document.getElementById('passinput').value){
                  var ft = confirm('Are You Sure To Delete This Account?')
                  if(ft == true){
                     location.href = '../modules/deleteaccount.php'

                  }else{
                     
                  }
               }else{
                  alert('Invalid Password')}}">
                  
               
               </i>

            </div>
            <input type="text" class="form-control form-controlp-sm"
               style="outline: none; border: transparent; pointer-events: none;" aria-label=""
               aria-describedby="basic-addon1">
            <div class="input-group-append mx-1">

               <i class="bi bi-info-circle yes" data-mdb-toggle="tooltip" data-mdb-placement="bottom"
                  title="Account Information" onclick="$('#exampleModal').modal('show')" style="cursor: pointer;"></i>

            </div>
         </div>
         <style>
            .yes {
               cursor: pointer;

            }
         </style>

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
               <h4 class="my-3"><strong><span id="">Welcome </span>
                     <?php echo  $_SESSION['username'];?></span>
                  </strong></h4>
            </div>
            <div class="my-1 hide" style="font-size:2px;"><span style="font-size:2px;">/</span></div>
            <div class="mx-3 my-0">
               <form class="" method="POST" action="../modules/updatename.php" id="element">
                  <!-- Email input -->
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="vv">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="my-0 mb-1 bi bi-person-fill" viewBox="0 0 16 16">
                           <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg> Enter A New Username</label>
                  </div>
                  <div class="form-outline mb-2">
                     <input type="text" id="vv" name="user" value="<?php echo $_SESSION['username'];?>"
                        class="form-control " required />
                     <label class="form-label gg" for="vv">Username</label>
                  </div>
                  <div class="d-flex justify-content-left align-items-left mb-2">
                     <button class="btn btn-danger btn-sm" type="submit"> Update User Name <i
                           class="bi bi-box-arrow-right"></i></button>
                     <button class="btn btn-dark mx-2 btn-sm" onclick="document.getElementById('vv').value='';"
                        type="button"> Clear <i class="bi bi-eraser"></i></button>


                  </div>
               </form>


               <form action="../modules/updatemail.php" method="post" id="er">
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="bb">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-envelope-fill my-0 mb-1" viewBox="0 0 16 16">
                           <path
                              d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                        </svg> Enter Your Email ID</label>
                  </div>
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                     <input type="email" id="bb" name="gmail" value="<?php echo $hh;?>" class="form-control" required />
                     <label class="form-label gg" for="bb">Email ID</label>
                  </div>
                  <div class="d-flex justify-content-left align-items-left mb-2">
                     <button class="btn btn-danger btn-sm" type="submit"> Update Email Id <i
                           class="bi bi-box-arrow-right"></i></button>
                     <button class="btn btn-dark mx-2 btn-sm" onclick="document.getElementById('bb').value='';"
                        type="button"> Clear <i class="bi bi-eraser"></i></button>


                  </div>
               </form>


               <button type="button" class="btn btn-primary btn-block mb-4" onclick="hdfvrtggti()" id="toh">Password
                  Settings


                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="my-0 mb-1 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                     <path fill-rule="evenodd"
                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                     <path fill-rule="evenodd"
                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                  </svg>
               </button>
               <script>
                  function hdfvrtggti() {
                     document.getElementById("toh").style.display = "none"
                     document.getElementById("er").style.display = "none"
                     document.getElementById("element").style.display = "none"
                     document.getElementById("f").style.display = "block"
                     document.getElementById("myhi").style.display = "block"
                  }
                  function gghi() {
                     document.getElementById("toh").style.display = "block"
                     document.getElementById("er").style.display = "block"
                     document.getElementById("element").style.display = "block"
                     document.getElementById("f").style.display = "none"
                     document.getElementById("myhi").style.display = "none"
                  }

               </script>
               <form action="../modules/resetpassword.php" method="post" id="f" style="display: none;">
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="trett">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-shield-lock-fill my-0 mb-1" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                        </svg> Enter Your Current Password</label>
                  </div>
                  <div class="form-outline mb-3 ">
                     <input type="password" id="trett" name="currentpas" class="form-control" required />
                     <label class="form-label gg" for="trett">Password</label>
                  </div>
                  <div class="text-left" style="align-items: flex-start;text-align: left;">
                     <label style="cursor: pointer;color: black;" class="form-label hh text-left" for="rrr">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-shield-lock-fill my-0 mb-1" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                        </svg> Enter A New Password</label>
                  </div>
                  <!-- Password input -->
                  <div class="form-outline mb-3">
                     <input type="password" id="rrr" name="newpass" class="form-control" required />
                     <label class="form-label gg" for="rrr">Password</label>
                  </div>
                  <div class="d-flex justify-content-left align-items-left mb-2">
                     <button class="btn btn-danger btn-sm" type="submit"> Update Password <i
                           class="bi bi-box-arrow-right"></i></button>
                     <button class="btn btn-dark mx-2 btn-sm"
                        onclick="document.getElementById('trett').value='';document.getElementById('rrr').value=''"
                        type="button"> Clear <i class="bi bi-eraser"></i></button>


                  </div>
               </form>
               <button type="button" class="btn btn-primary btn-block mb-4" style="display: none;" onclick="gghi()"
                  id="myhi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-box-arrow-left my-0 mb-1 " viewBox="0 0 16 16">
                     <path fill-rule="evenodd"
                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                     <path fill-rule="evenodd"
                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                  </svg><span class="hide">/</span> Back To Normal Settings



               </button>
               <div class="text-center my-2">
                  <a class="mx-3" onclick="location.href='welcome.php'"><span><svg xmlns="http://www.w3.org/2000/svg"
                           width="16" height="16" fill="currentColor" class="my-0 mb-1 bi bi-box-arrow-in-left mx-0"
                           viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                           <path fill-rule="evenodd"
                              d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg></span> <span id="getback1"></span> </a> <span
                     style="pointer-events: none;">&#x25CF;</span> <a class="mx-3" href="../modules/logout.php"><i
                        class="bi bi-power"></i> Logout Now</a>
               </div>
               <div class="text-center my-3">
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
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
      }
   </script>
</div>


<div class="toast-container" id="efwfefwefewwedwdferfWCefewfe"
   style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
      data-bs-autohide="false">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Password Reset Success</strong>
         <button type="button" class="btn-close" onclick="$('#efwfefwefewwedwdferfWCefewfe').hide()"
            aria-label="Close"></button>
      </div>
      <div class="toast-body">
         Password Has Been Successfully Updated </div>
   </div>


</div>
<div class="toast-container" role="alert" aria-live="assertive" aria-atomic="true" class="toast" id="htsr"
   data-bs-autohide="false" style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
      data-bs-autohide="false">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Username Update Success</strong>
         <button type="button" class="btn-close" onclick="$('#htsr').hide()" aria-label="Close"></button>
      </div>
      <div class="toast-body">
         Username Has Been Successfully Updated </div>
   </div>
</div>

<div class="toast-container" role="alert" aria-live="assertive" aria-atomic="true" class="toast" id="errererre"
   data-bs-autohide="false" style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast  show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
      data-bs-autohide="false">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-exclamation-triangle-fill"></i> Username Update Error</strong>
         <button type="button" class="btn-close" onclick="$('#errererre').hide()" aria-label="Close"></button>
      </div>
      <div class="toast-body">
         You or Someone Else owns This Username </div>
   </div>


</div>
<div class="toast-container" role="alert" aria-live="assertive" aria-atomic="true" class="toast" id="deler"
   data-bs-autohide="false" style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast  show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
      data-bs-autohide="false">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-exclamation-triangle-fill"></i> Account Deletion Error</strong>
         <button type="button" class="btn-close" onclick="$('#deler').hide()" aria-label="Close"></button>
      </div>
      <div class="toast-body">

         We Failed To Delete Your Account Please Try Again </div>
   </div>


</div>
<div class="toast-container" role="alert" aria-live="assertive" aria-atomic="true" class="toast" id="erererrererererrer"
   data-bs-autohide="false" style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast fade show">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-exclamation-triangle-fill"></i> Email Update Error</strong>
         <button type="button" class="btn-close" onclick="$('#erererrererererrer').hide()" aria-label="Close"></button>
      </div>
      <div class="toast-body">
         You or Someone Else owns This Email ID </div>
   </div>


</div>
<div class="toast-container" id="pasw" style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
      data-bs-autohide="false">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-exclamation-triangle-fill"></i> Password Reset Error</strong>
         <button type="button" class="btn-close" onclick="$('#pasw').hide()" aria-label="Close"></button>
      </div>
      <div class="toast-body">
         Current Password is Invalid </div>
   </div>

   <script>

      if (websitename == "") {
         document.title = "Account Settings"
      } else {
         document.title = websitename + " Account Settings"
      }

   </script>
</div>


<div class="toast-container" role="alert" aria-live="assertive" aria-atomic="true" class="toast" id="ererrerr"
   data-bs-autohide="false" style="position: absolute; top: 10px; right: 10px;display: none;">
   <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" class="toast"
      data-bs-autohide="false">
      <div class="toast-header">
         <strong class="me-auto"><i class="bi bi-check-circle-fill"></i> Email Update Success</strong>
         <button type="button" class="btn-close" onclick="$('#ererrerr').hide()" aria-label="Close"></button>
      </div>
      <div class="toast-body">
         Email ID Has Been Successfully Updated </div>
   </div>
</div>
</div>
<script src="../js/mdb.min.js"></script>

</body>

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
</body></div>
<script src="../lr-js/setting.js">
</script><script src="../lr-js/link2.js"></script>

<script src="../configurations.js"></script><script src="../lr-js/setting.js">
</script><script src="../lr-js/setting.js">
</script><script src="../lr-js/setting.js">
</script><script src="../lr-js/setting.js">
</script><script src="../lr-js/setting.js">
</script><script src="../lr-js/setting.js">
</script>