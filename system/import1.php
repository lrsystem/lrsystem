<link rel="stylesheet" href="../css/mdb.min.css">

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
  crossorigin="anonymous"></script>
  <div class="mx-3" style="overflow-y: auto;">
    
    <div class="text-center align-items-center justify-content-center d-flex" style="display:inline" style="position: fixed; ">
          <a class=" mx-0 mb-3 btn btn-danger" id="excel" onclick="ExportToExcel('xlsx')">
            
            
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-0 mb-1 bi bi-download" viewBox="0 0 16 16">
              <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
              <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
            </svg> Export As Excel Sheet</a> 
           </div>
      
           <script type="text/javascript">
          function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('tableId');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('Users.' + (type || 'xlsx')));
    }
        </script>
         
<?php
include '../database.php';
include 'theme.html';



$sql = "SELECT name, password, emailgoogle, date FROM storage";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo "<div class='d-flex justify-content-center align-items-center text-center'><table  id='tableId' class='table table-striped  text-center' style='width:100%;word-wrap: break-word;'><tr><th class='col mx-2' >Username</th><th class='col mx-2'>Email</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["name"]."</td><td>" .$row["emailgoogle"] ;
  }
  echo "</table></div>";
} else {
  echo "<script> document.getElementById('excel').style.display='none' </script><div class='d-flex justify-content-center align-items-center text-center my-5'> <strong>No Registered Users Found! Promote the website to get Users.</strong> </div>";
}
$con->close();
?>
<style>
    a {
      cursor: pointer;
      color: hotpink;
    }
    a:hover{
      color:rgb(245, 171, 184);
    }
  
    .toast-header {
      color: black;
    }
  
    h4 {
      color: black;
    }
  
    .bi-person-circle {
      fill: black;
    }
    .d-none{
      display:none;
    }
  </style>
  </div>