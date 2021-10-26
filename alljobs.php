<?php  include("nav.php");?>

<style>
.tdropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.tdropbtn:hover, .tdropbtn:focus {
  background-color: #2980B9;
}

.tdropdown {
  position: relative;
  display: inline-block;
}

.tdropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.tdropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.tdropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>





<div class="container">


  <div class="row px-5">
    <div class="col-2">
      <div class="sidenav">
      <div class="d-none d-lg-block">
        
        <div class="nav">
         <button onclick="myFunction1()" class="dropbtn"><i class="fa fa-search"></i><br>Search</button>
         <button onclick="myFunction2()" class="dropbtn"><i class="fa fa-list-alt"></i><br>Category</button>
         <button onclick="myFunction3()" class="dropbtn"><i class="fa fa-building"></i><br>Organization</button>
         <button onclick="myFunction4()" class="dropbtn"><i class="fa fa-compass"></i><br>Location</button>
         <button onclick="myFunction5()" class="dropbtn"><i class="fa fa-filter"></i><br>other</button>
        </div>
        </div>
        <div class="dropdown">
              
          <div id="myDropdown1" class="dropdown-content1">
       
           <form>
             <div class="row gs my-5">
             <div class="col-lg-10">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         </div>
         <div class="col-lg-2">
                <input type="submit" class="form-control btn btn-success search-action-button">
         </div>
       </div>
           </form>
          </div>
          <div id="myDropdown2" class="dropdown-content2">
       
           <form action="/action_page.php">
             <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
             <label for="vehicle1">service</label><br>
             <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
             <label for="vehicle2">corporate</label><br>
             <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
             <label for="vehicle3">special skill</label><br><br>
             <input type="submit" value="Submit">
           </form>
          </div>
          <div id="myDropdown3" class="dropdown-content3">
        
            <form action="/action_page.php">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> Government</label><br>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2">NGO</label><br>
              <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
              <label for="vehicle3">Multinational</label><br><br>
              <input type="submit" value="Submit">
            </form>
          </div>
          <div id="myDropdown4" class="dropdown-content4">
        
            <form action="/action_page.php">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1">Dhaka</label><br>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2">Chittagong</label><br>
              <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
              <label for="vehicle3">Khulna</label><br><br>
              <input type="submit" value="Submit">
            </form>
            </div>
          <div id="myDropdown5" class="dropdown-content5">
        
          <form action="/action_page.php">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">specially abled</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
            <label for="vehicle2">Transgender</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3">other</label><br><br>
            <input type="submit" value="Submit">
          </form>
          </div>
        </div>
     </div>
     
    </div>

     
     <div class="col-10">
       
      <!-- main -->

            <div class="main">
                        
              <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-12">
                  <div class="card-body">
                    
                    <div class="row gx-4 gx-lg-5 align-items-center my-5">
                        <div class="col-lg-2">
                          <img src="data:image/png;base64,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" class="img-thumbnail" alt="Cinque Terre">

                        </div>

                      <div class="col-lg-10">
                        <h2 class="card-title">Genex</h2><br>
                        <p class="card-text">
                        Position: Sr. Manager <br>
                        Type: Full Time <br>
                        Vacancy: 2
                        </p>
                        <a class="btn btn-primary btn-sm" href="details.php">View Details</a>
                      </div>
                    </div>   
                        
                  </div>
                  </div>
                  <div class="card-footer">
                  </div>
              </div>

              <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-12">
                  <div class="card-body">
                    
                    <div class="row gx-4 gx-lg-5 align-items-center my-5">
                        <div class="col-lg-2">
                          <img src="data:image/png;base64,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" class="img-thumbnail" alt="Cinque Terre">

                        </div>

                      <div class="col-lg-10">
                        <h2 class="card-title">Genex</h2><br>
                        <p class="card-text">
                        Position: Sr. Manager <br>
                        Type: Full Time <br>
                        Vacancy: 2
                        </p>
                        <a class="btn btn-primary btn-sm" href="details.php">View Details</a>
                      </div>
                    </div>   
                        
                  </div>
                  </div>
                  <div class="card-footer">
                  </div>
              </div>

            </div>
     </div>
  </div>
</div>
<?php  include("footer.php");?>
<!------------------------------------------------------------------------------------>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}
function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}
function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show");
}
function myFunction4() {
  document.getElementById("myDropdown4").classList.toggle("show");
}
function myFunction5() {
  document.getElementById("myDropdown5").classList.toggle("show");
}
function myFunction6() {
  document.getElementById("myDropdown6").classList.toggle("show");
}


function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}                      // Get the modal
                      var modal = document.getElementById('id01');
                      
                      // When the user clicks anywhere outside of the modal, close it
                      window.onclick = function(event) {
                          if (event.target == modal) {
                              modal.style.display = "none";
                          }
                      }
                      // Get the modal
                      var modal = document.getElementById('id02');
                      
                      // When the user clicks anywhere outside of the modal, close it
                      window.onclick = function(event) {
                          if (event.target == modal) {
                              modal.style.display = "none";
                          }
                      }
                      function mytFunction() {
  document.getElementById("mytDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.tdropbtn')) {
    var dropdowns = document.getElementsByClassName("tdropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>

