<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shobjob</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/main.css" rel="stylesheet" />

        <style>

nav.navbar.navbar-expand-lg.navbar {
    background-color: white;
}
.content {
  padding: 36px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
h3 {
  margin-top: 20px;
}
</style>
</head>
<body>
<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar">
        <div class="container px-5">
            <a class="navbar-brand"  href="index.php">Shob<span>job</span></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="ti-menu">
              
            </span>
          </button>

          

            <div class="navbar-collapse collapse show" id="navbarNav" style="">

   
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link"style="color:#000000" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link"style="color:#000000" href="alljobs.php">All Jobs</a></li>
                    <li class="nav-item"><a class="nav-link"style="color:#000000" href="post.php">Post a Job</a></li>
                   
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-user"></i>Login</button>

                    &nbsp&nbsp&nbsp&nbsp
                    <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><i class="fa fa-user-plus"></i>SignUp</button>
                    
                    
                    
                   
                </ul>
                
            </div>
            
        </div>
    </nav>
</div>
 <div id="id01" class="modal">

                        <form class="modal-content animate" action="/action_page.php" method="post">
                          <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                          
                            <a class="navbar-brand" href="#!">Shob<span>job</span></a>
                          </div>
                      
                          <div class="c1">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>
                      
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                              
                            <button type="submit">Login</button>
                            <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                          </div>
                      
                          <div class="container" style="background-color:#f1f1f1">
                            
                            <span class="psw">Forgot <a href="#">password?</a></span>
                          </div>
                          
                        </form>
                      </div>


                    
                    <div id="id02" class="modal">

                        <form class="modal-content animate" action="/action_page.php" method="post">
                          <div class="imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                         
                            <a class="navbar-brand" href="#!">Shob<span>job</span></a>
                          </div>
                      
                          <div class="c1">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter email" name="email" required>

                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>
                      
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <label for="cpsw"><b>Confirm Password</b></label>
                            <input type="password" placeholder="Retype Password" name="cpsw" required>
                              
                            <button type="submit">SignUp</button>
                            <label>
                              <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                          </div>
                      
                          <div class="container" style="background-color:#f1f1f1">
                          
                            <span class="psw">Forgot <a href="#">password?</a></span>
                          </div>
                          
                        </form>
                      </div>
                      



