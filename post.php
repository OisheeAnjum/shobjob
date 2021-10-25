<?php  include("nav.php");?>

<!-- main----------------------------------------------------------------------------------------------------------------->
 <div class="container">
 <div class="content">
    
        <br><h2>Terms and condition here!</h2>
        <p> I light the fuse
            And i watch it burn
            And somewhere deep inside i know there's a lesson to be learned
            It's not the crime but the way that we pay for
            Feelings unmutual
            You go upstairs
            And i hang my head
            Somebody said i let myself down as i crawled into bed
            I wandered why the hell i'd ever paid for
            Feelings unmutual
            I'm tired of living in the shadows
            I light the fuse
            And i watch it burn
            And somewhere deep inside i know there's a lesson to be learned
            It's not the crime but the way that we pay for
            Feelings unmutual
            You go upstairs
            And i hang my head
            Somebody said i let myself down as i crawled into bed
            I wandered why the hell i'd ever paid for
            Feelings unmutual
            I'm tired of living in the shadows
            These paper walls i can't break through
            I'm sick of standing by your window
            Tracing silhouettes of you
            But when it gets dark
            You light the spark
            And all the lies i tried to live by start falling apart
            Whoever knew that it could be so painful
            Feelings unmutual
            Now i can't escape
            These things i've done
            But my anxieties have promised me the worst is to come
            So give up living for the life that you paid for
            Feelings unmutual have won
            I'm tired of living in the shadows
            These paper walls i can't break through
            I'm sick of standing by your window
            Tracing silhouettes of you
            Tracing silhouettes of you
            Tracing silhouettes of you
            Tracing silhouettes of you
            Tracing silhouettes of you
            I light the fuse
            And i watch it burn
            And somewhere deep inside i know there's a lesson to be learned
            It's not the crime but the way that we pay for
            Feelings unmutual</p>
        <label>
            <input type="checkbox" name="agreed"> I Agree To The Terms And Condition!
        
          </label>
        
        <br><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Post A Job</button>
        
        <div id="id03" class="modal">
          
          <form class="modal-content animate" action="/action_page.php" method="post">
          <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
        
            <div class="c1">
              <label for="cname"><b>Company name</b></label>
              <input type="text" placeholder="Enter company name" name="cname" required>
        
              <label for="req"><b>requirement</b></label>
              <input type="text" placeholder="Enter candidate Requirement" name="req" required>

              <label for="rem"><b>Remuneration</b></label>
              <input type="text" placeholder="Enter Remuneration ammount" name="rem" required>
                
              <button type="submit">Post</button>
        
            </div>
        

          </form>
        </div>
      </div>




</div>
     

<script>


window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


/////////////////////////////////////////////////////////////////// Get the modal
var modal = document.getElementById('id01');
                      
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
{
  if (event.target == modal) 
  {
   modal.style.display = "none";
  }
}
 /////////////////////////////////////////////////////////////////////

                      // Get the modal
                      var modal = document.getElementById('id02');
                      
                      // When the user clicks anywhere outside of the modal, close it
                      window.onclick = function(event) {
                          if (event.target == modal) {
                              modal.style.display = "none";
                          }
                      }
                 
        // Get the modal
        var modal = document.getElementById('id03');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
</script>                   

<?php  include("footer.php");?>
