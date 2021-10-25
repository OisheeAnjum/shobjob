
<?php  include("nav.php");?>
<style>

nav.navbar.navbar-expand-lg.navbar {
    background-color: white;
    z-index: 1;
}
.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body>







        <div class="container py-5 px-lg-5">
          <!-- Heading Row-->
          <div class="row gx-4 gx-lg-5 align-items-center my-5">
              
      
               <div class="col-lg-9">
                  <div class="card-body">
                    <h2 class="card-title">American International</h2>
                    <p class="card-text">
                    
                  <b>Vacancy: 02</b><br>
<b>Job Context</b>
A Well Reputed 100% Export Oriented Group of Companies (RMG) is looking for skilled, dynamic and self-motivated individuals to establish a strong Executive / Sr. Executive for its Finance & Accounts department.
Job Responsibilities
Handle day to day petty cash transaction.
Prepare and maintain cash, bank and journal voucher
Posting day to day voucher to the Tally ERP software.
Checking document/ instruments of the petty cash expenses, and prepare the summary for payments.
Proper documentation and file management.
Reporting to office from time to time.
<b><br>Employment Status:</b>Full-time

<b><br>Educational Requirements:</b>
Masters in Accounting
<b><br>Experience Requirements:</b>
1 to 3 year(s)
<b><br>Additional Requirements:</b>
The applicants should have experience in the following area(s):Petty cash management
The applicants should have experience in the following business area(s):Garment Industries
Experience in Tally ERP
Strong command over computer applications, Excel in particular
Good communication skills, both written and verbal.
Individual should be smart, intelligent and proactive.
<b><br>Job Location:</b>
Dhaka, Dhaka (Ashulia, Savar)

<br><b>Salary:</b>
Tk. 25000 - 30000 (Monthly)

                      </p>
                </div>
             
            </div>
      
              <div class="col-lg-3">
                <div class="card-body">
                  <h2 class="card-title">Job Summary</h2>
                  <p class="card-text">
                  Position: Sr. Manager <br>
                  Type: Full Time <br>
                  Vacancy: 2<br>
                  Remundation: Negociable.<br>
                  Location: Mathijhil,Dhaka.
                  </p>
                     <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Apply Now</button>
              </div>

         
          
              <div id="id03" class="modal">
                
                <form class="modal-content animate" action="/action_page.php" method="post">
                   <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

                  <div class="c1">
                    <label for="cname"><b>Name</b></label>
                    <input type="text" placeholder="Enter name" name="name" required>
              
                    <label for="req"><b>Educational Qualification</b></label>
                    <input type="text" placeholder="" name="qua" required>
    
                    <label for="rem"><b>Location</b></label>
                    <input type="text" placeholder="Enter Prefered Locations" name="rem" required>
                    <form action="/action_page.php">
                      <label for="myfile"><b>Select Resume file:<b></label><br><br>
                      <input type="file" id="myfile" name="myfile"><br><br>
 
                    </form> 
                    <button type="submit">Apply</button>
               
                  </div>
              
                  <div class="container" style="background-color:#000000">
                  
                  </div>
                </form>
              </div>
            </div>
              <script>
              // Get the modal
              var modal = document.getElementById('id03');
              
              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                  if (event.target == modal) {
                      modal.style.display = "none";
                  }
              }
              </script>
          </div>
              
        </div>
             
          </div>
      

<!-- footer------------------------------------------------------------------------------------------------------------->
<?php  include("footer.php");?>