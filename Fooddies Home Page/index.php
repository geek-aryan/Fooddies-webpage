


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food App</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/mycss.css" />
    <link rel="stylesheet" href="css/mediacss.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/mycart.css" />

</head>

<body data-spy="scroll" data-offset="20" data-target="#myScrollspy">

    <div class="contianer-fluid row topmost">
        <div class="row bgclr" id="rowbar">
            <div class="container ">
                <div id="header">
                    <nav class="navbar">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"><i>Fooddies</i> </a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li class=""><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a class="cart-icon">Cart</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#" data-toggle="collapse" data-target="#login"><span class="glyphicon glyphicon-user"></span> Login</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#" data-toggle="collapse" data-target="#login" 
                                        ><span class="glyphicon glyphicon-log-in"></span> Login</a
                                        >
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
             </div>

            <!-- collapse div login -->
            <?php
                                $login = false;
                                $showError = false;
                                if($_SERVER["REQUEST_METHOD"] == "POST" && isSet($_POST["login"])){
                                    include 'partials/_dbconnect.php';
                                    $username = $_POST["username"];
                                    $password = $_POST["password"]; 
                                    
                                    
                                    $sql = "Select * from users where username='$username' AND password='$password'";
                                    $result = mysqli_query($conn, $sql);
                                    $num = mysqli_num_rows($result);
                                    if ($num == 1){
                                        $login = true;
                                        session_start();
                                        $_SESSION['loggedin'] = true;
                                        $_SESSION['username'] = $username;
                                        $_SESSION['password'] = $password;
                                        header("location: main.php");

                                    } 
                                    else{
                                        $showError = "Invalid Credentials";
                                    }
                                }
                                    
            ?>

                    

            <?php
                                    if($_SERVER["REQUEST_METHOD"] == "POST" && isSet($_POST["login"]))
                                    {
                                        echo '<div id="login" class="collapse in">';
                                    }
                                    else{
                                        echo '<div id="login" class="collapse">';
                                    } 
                                ?>    
                                    <!-- <div id="login" class="collapse"> -->
                                <button class="close" data-toggle="collapse" data-target="#login">×</button>
                                <h3 align="center">Login on Fooddies</h3>

                                <?php
                                        if($login){
                                        echo ' 
                                        <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> You are logged in
                                    </div>
                                        ';
                                        }
                                        if($showError){
                                        echo '
                                        <div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Error!</strong>'. $showError.'
                                        </div>  
                                        ';
                                        }
            ?>


                        <form action="/foodapp 2.0/index.php" method="post" name="login">
                        <div class="inpt-mob form-group"><input class="form-control" type="text" name="username" placeholder="Enter your username*" required></div>
                        <div class="inpt-nm form-group"><input class="form-control" type="password" name="password" placeholder="Enter your password*"></div>
                        <!-- <div class="inpt-mail form-group"><input class="form-control" type="text" placeholder="Enter your email*"></div> -->
                        <div align="center" class="inpt-btn  form-group"><input class="btn btn-primary" type="submit" value="Login" name="login"></div>
                        <!-- <div class="or"> OR</div> -->
                        <!-- <div class="social-login fcbk">
                            <button class="btn"><span><i class="fa fa-facebook "></i></span>
                            Login With Facebook
                            </button> </div>
                        <div class="social-login ggl">
                            <button class="btn "><span><i class="fa fa-google "></i></span>
                            Login With Google
                            </button> </div> -->
                        <p align="center">New user? <a href="#" data-toggle="collapse" data-target="#signup,#login" >SignUp Here</a> </p>
                        </form>
                        </div>
                                                <!-- end of collapse div login -->

                            <!-- collapse div signup -->
                            <?php
                                    $showAlert = false;
                                    $showError = false;
                                    if($_SERVER["REQUEST_METHOD"] == "POST" && isSet($_POST["signup"])){
                                        include 'partials/_dbconnect.php';
                                        $username = $_POST["username"];
                                        $password = $_POST["password"];
                                        $cpassword = $_POST["cpassword"];
                                        // $exists=false;

                                        // Check whether this username exists
                                        $existSql = "SELECT * FROM `users` WHERE username = '$username'";
                                        $result = mysqli_query($conn, $existSql);
                                        $numExistRows = mysqli_num_rows($result);
                                        if($numExistRows > 0){
                                            // $exists = true;
                                            $showError = "Username Already Exists";
                                        }
                                        else{
                                            // $exists = false; 
                                            if(($password == $cpassword)){
                                                // $hash = password_hash($password, PASSWORD_DEFAULT);
                                                $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
                                                $result = mysqli_query($conn, $sql);
                                                if ($result){
                                                    $showAlert = true;
                                                }
                                            }
                                            else{
                                                $showError = "Passwords do not match";
                                            }
                                        }
                                    }
                                        
                                    ?>

                        <?php
                            if($_SERVER["REQUEST_METHOD"] == "POST" && isSet($_POST["signup"]))
                            {
                                echo '<div id="signup" class="collapse in">';
                            }
                            else{
                                echo '<div id="signup" class="collapse">';
                            } 
                        ?>  
                            <!-- <div id="signup" class="collapse"> -->
                                <button class="close" data-toggle="collapse" data-target="#signup">×</button>
                                <h3 align="center">Sign Up on Fooddies</h3>



                                <?php
                                    if($showAlert){
                                        echo '<div class="alert alert-success alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Success!</strong> Your account is now created and you can login
                                            </div>
                                            ';
                                            }
                                            if($showError){
                                            echo '
                                            
                                            <div class="alert alert-danger alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Error!</strong>' . $showError.'
                                            </div>
                                            
                                            
                                            ';
                                            }
                                            ?>
                                


                                <form action="/foodapp 2.0/index.php" method="post" name="signup">
                                    <div class="inpt-mob form-group"><input class="form-control" type="text" name="username" id="username" placeholder="Type your username*" required> </div>
                                    <div class="inpt-nm form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Type your password*" required></div>
                                    <div class="inpt-mail form-group"><input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Confirm your password*" required></div>
                                    <div align="center" class="inpt-btn  form-group"><input class="btn btn-primary" type="submit" value="signup" name="signup"></div>
                                    <p align="center">Forgot Password? <a href="#" data-toggle="collapse" data-target="#login,#signup">Click Here</a> </p>
                                    <p align="center">Already registered? <a href="#" data-toggle="collapse" data-target="#login,#signup">Login Here</a> </p>
                                </form>
                            </div>
                            <!-- end of collapse div signup -->

                            <!-- varification div  -->
                            <!-- <div id="verify" class="collapse">
                                <button class="close" data-toggle="collapse" data-target="#verify">×</button>
                                <h3>Please enter the 4-digit verification code we sent via SMS:</h3>
                                <span>(we want to make sure it's you before we contact our movers)</span>
                                <form action="">
                                    <div id="form">
                                        <input type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
                                        <input type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
                                        <input type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
                                        <input type="text" maxlength="1" size="1" min="0" max="9" pattern="[0-9]{1}">
                                        <br>
                                       
                                        <div align="center" class="form-group"><input class="btn btn-primary" type="button" value="Verify" data-toggle="collapse" data-target="#verify_succ,#verify"></div>

                                    </div>
                                </form>
                                <div>
                                    Didn't receive the code?<br>
                                    <a href="#">Send code again</a>
                                   
                                </div>

                            </div> -->
                            <!-- end of varification div  -->

                            <!-- <div id="verify_succ" class="collapse">
                                <button class="close" data-toggle="collapse" data-target="#verify_succ">×</button>
                                <h3 style="color: rgb(77, 201, 5); margin-top: 100px;">Varification Successfull...</h3>
                                <div>
                                    <img style="border-radius: 50%;" src="images/check-circle.gif" width="100" alt="">
                                </div><br>
                                <button class="btn btn-danger btn-embossed" data-toggle="collapse" data-target="#verify_succ">Close</button>
                            </div> -->

        </div>
    </div>
                <!-- end of header  -->
                <!-- <script>
                    window.onscroll=function(){
                    let header = document.querySelector('#rowbar');
                    header.classList.toggle('scrolling-active');
                
                }
                </script> -->
                
                <div class="container-fluid row">
                    <div class="slider">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <div>
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="images/s1.jpg" alt="Chania" />
                                        <div class="carousel-caption">
                                            <h1 class="cch">LA is always so much fun</h1>
                                            <p class="ccp">
                                                LA is always so much fun Lorem ipsum dolor sit, amet <br>

                                            </p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="images/s2.jpg" alt="Chicago" />
                                        <div class="carousel-caption">
                                        <h1 class="cch">LA is always so much fun</h1>
                                            <p class="ccp">
                                                LA is always so much fun Lorem ipsum dolor sit, amet <br>

                                            </p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="images/s3.jpg" alt="New York" />
                                        <div class="carousel-caption">
                                        <h1 class="cch">LA is always so much fun</h1>
                                            <p class="ccp">
                                                LA is always so much fun Lorem ipsum dolor sit, amet <br>

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class=" "></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class=" "></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of slider  -->



                <div class="container-fluid locate">
                    <div class="container ">
                        <h1 class="ch">WE GET WHAT YOU LOVE</h1>
                        <p class="cp">
                            LA is always so much fun Lorem ipsum dolor sit, amet consectetur adipisicing elit.!
                        </p>
                        <form>
                            <div class="text-center ">
                                <div class="col-md-offset-4 col-md-4">
                                    <input type="text" class="form-control" placeholder="Enter Your Delevery Location" />
                                </div>
                            </div>
                            <div class="text-center col-md-12 fbtn">
                                <button class="btn btn-warning" type="submit" class="btn btn-default">
        FIND FOOD
      </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end of locate  -->








                <div class="container-fluid row about">
                    <div class="container">
                        <h1>
                            POPULAR <span style="color: #ebc934">DISHES </span>TO ORDER!
                        </h1>
                        <div class="col-md-12 bodypack">
                            <div class="col-md-3">
                                <div class="panel">
                                    <span class="close">X</span>
                                    <div class="panel-body">
                                        <a >
                                            <img class="img-responsive img-rounded" src="images/a1.jpg" alt="" /></a>
                                    </div>
                                    <div class="panel-body">
                                        <h3 align="center">ABCD</h3>

                                        <p class="panel-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, reprehenderit excepturi est. </p>

                                    </div>
                                    <div class="panel-body btm">

                                        <div class="  outveg col-md-2"><span class=" veg"></span></div>

                                        <span class="price">  399 RS.</span>
                                        <button class="btn btn-default add-button">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel"><span class="close">X</span>
                                    <div class="panel-body">
                                        <a ><img class="img-responsive img-rounded" src="images/a2.jpg" alt="" /></a>
                                    </div>
                                    <div class="panel-body">
                                        <h3 align="center">ABCD</h3>
                                        <p class="panel-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, reprehenderit excepturi est. </p>
                                    </div>
                                    <div class="panel-body btm">

                                        <div class=" noutveg outveg col-md-2"><span class="nveg veg"></span></div>

                                        <span class="price"> 399 RS.</span>
                                        <button class="btn btn-default add-button">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel"><span class="close">X</span>
                                    <div class="panel-body">
                                        <a ><img class="img-responsive img-rounded" src="images/a3.jpg" alt="" /></a>
                                    </div>
                                    <div class="panel-body">
                                        <h3 align="center">ABCD</h3>
                                        <p class="panel-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, reprehenderit excepturi est. </p>
                                    </div>
                                    <div class="panel-body btm">

                                        <div class="  outveg col-md-2"><span class=" veg"></span></div>

                                        <span class="price"> 399 RS.</span>
                                        <button class="btn btn-default add-button">Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="panel"><span class="close">X</span>
                                    <div class="panel-body">
                                        <a ><img class="img-responsive img-rounded" src="images/a4.jpg" alt="" /></a>
                                    </div>
                                    <div class="panel-body ptext">
                                        <h3 align="center">ABCD</h3>
                                        <p class="panel-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, reprehenderit excepturi est. </p>
                                    </div>
                                    <div class="panel-body btm">

                                        <div class=" noutveg outveg col-md-2"><span class="nveg veg"></span></div>

                                        <span class="price"> 399 RS.</span>
                                        <button class="btn btn-default add-button">Add</button>
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                        <div class="col-md-offset-4 abt-btn">
                            <p>
                                and much more your favorite food
                                <button class="btn btn-warning">MORE CATEGORIES</button>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of about  -->
                <div class="container-fluid buy">
                    <div class="container">
                        <div class="row">
                            <nav class="col-sm-3" id="myScrollspy">
                                <h1>Collections</h1>
                                <ul class="nav nav-pills nav-stacked">
                                    <li class=""><a href="#section1">BOGO Pizza Combos</a></li>
                                    <li class=""><a href="#section2">Dynamic Group Combos</a></li>
                                    <li class=""><a href="#section3">Sides & Beverages</a></li>
                                    <li class=""><a href="#section4">Desserts.</a></li>


                                    <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#section41">Section 4-1</a></li>
                  <li><a href="#section42">Section 4-2</a></li>                     
                </ul>
              </li> -->
                                </ul>
                            </nav>
                            <div class="col-sm-9">
                                <div class="sec-div" id="section1" class="col-md-12">
                                    <h1>BOGO Pizza Combos</h1>
                                    <div class="panel col-md-5">
                                        <div class="panel-body">
                                            <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>Choose any 2 Veg Pizzas</h4>
                                            <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                            <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                            <p class="panel-price">299 RS</p>
                                            <button class="btn btn-warning">Add</button>
                                        </div>
                                    </div>
                                    <div class="panel col-md-5">
                                        <div class="panel-body">
                                            <a href=""><img class="img-responsive" src="images/b2.jpg" alt=""></a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>Choose 1 Veg & 1 Non-Veg Pizza</h4>
                                            <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                            <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                            <p class="panel-price">299 RS</p>
                                            <button class="btn btn-warning">Add</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="section2" class="col-md-12">
                                    <h1>Dynamic Group Combos</h1>
                                    <div class="panel col-md-5 ">
                                        <div class="panel-body">
                                            <a href=""><img class="img-responsive" src="images/b3.jpg" alt=""></a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>2 Signature Pizzas</h4>
                                            <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                            <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                            <p class="panel-price">299 RS</p>
                                            <button class="btn btn-warning">Add</button>
                                        </div>
                                    </div>
                                    <div class="panel col-md-5">
                                        <div class="panel-body">
                                            <a href=""><img class="img-responsive" src="images/b4.png" alt=""></a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>2 Signature Pizzas</h4>
                                            <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                            <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                            <p class="panel-price">299 RS</p>
                                            <button class="btn btn-warning">Add</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="section3" class="col-md-12">
                                    <h1>Sides & Beverages</h1>
                                    <div class="panel col-md-5">
                                        <div class="panel-body">
                                            <a href=""><img class="img-responsive" src="images/b5.jpg" alt=""></a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>SWIG Jeera Masala</h4>
                                            <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                            <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                            <p class="panel-price">50 RS</p>
                                            <button class="btn btn-warning">Add</button>
                                        </div>
                                    </div>
                                    <div class="panel col-md-5">
                                        <div class="panel-body">
                                            <a href=""><img class="img-responsive" src="images/b6.jpg" alt=""></a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>SWIG Green Apple </h4>
                                            <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                            <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                            <p class="panel-price">50 RS</p>
                                            <button class="btn btn-warning">Add</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="section4" class="col-md-12">
                                    <h1>Desserts.</h1>
                                    <div class="panel col-md-5">
                                        <div class="panel-body">
                                            <a href=""><img class="img-responsive" src="images/b7.jpg" alt=""></a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>Indulgence Brownie</h4>
                                            <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                            <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                            <p class="panel-price">110 RS</p>
                                            <button class="btn btn-warning">Add</button>
                                        </div>
                                    </div>
                                    <div class="panel col-md-5">
                                        <div class="panel-body">
                                            <a href=""><img class="img-responsive" src="images/b8.jpg" alt=""></a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>Brookie</h4>
                                            <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                            <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                            <p class="panel-price">89 RS</p>
                                            <button class="btn btn-warning">Add</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end of NEW DISH buying  -->










            <div class="container-fluid testimonial">
                <div class="shady row">
                    <div class="container">
                        <h1>CLIENTS ABOUT US</h1>
                        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <!-- <ol class="carousel-indicators">
              <li
                data-target="#myCarousel2"
                data-slide-to="0"
                class="active"
              ></li>
              <li data-target="#myCarousel2" data-slide-to="1"></li>
              <li data-target="#myCarousel2" data-slide-to="2"></li>
            </ol> -->

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active col-md-12">
                                    <div class="col-md-3 img-tstmnl">
                                        <img class="img-responsive img-circle" src="images/images.jfif" width="200" alt="" />
                                    </div>
                                    <div class="col-md-9">
                                        <h2>Mr. ABCD</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam qui in veritatis, alias numquam atque aut. Eaque laudantium a perspiciatis in distinctio repudiandae facere, molestiae velit ut reprehenderit dolore harum? Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Dolor sapiente reiciendis et nobis a. Fugiat dolore ipsam totam amet obcaecati corrupti accusantium, qui illo, et nesciunt perferendis eaque asperiores. Ullam!Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.
                                        </p>    
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-md-3 img-tstmnl">
                                        <img class="img-responsive img-circle" src="images/images (1).jfif" width="200" alt="" />
                                    </div>
                                    <div class="col-md-9">
                                        <h2>Mrs. ABCD</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam qui in veritatis, alias numquam atque aut. Eaque laudantium a perspiciatis in distinctio repudiandae facere, molestiae velit ut reprehenderit dolore harum? Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Dolor sapiente reiciendis et nobis a. Fugiat dolore ipsam totam amet obcaecati corrupti accusantium, qui illo, et nesciunt perferendis eaque asperiores. Ullam!Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.
                                        </p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-md-3 img-tstmnl">
                                        <img class="img-responsive img-circle" src="images/images (2).jfif" width="200" alt="" />
                                    </div>
                                    <div class="col-md-9">
                                        <h2>Mr. ABCD</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam qui in veritatis, alias numquam atque aut. Eaque laudantium a perspiciatis in distinctio repudiandae facere, molestiae velit ut reprehenderit dolore harum? Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Dolor sapiente reiciendis et nobis a. Fugiat dolore ipsam totam amet obcaecati corrupti accusantium, qui illo, et nesciunt perferendis eaque asperiores. Ullam!Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                                <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                                <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of testimonial  -->

            <div class="container-fluid city">
                <div class="container">
                    <div class="col-md-12 row">
                        <h2 class="col-md-12 ch">Cities we deliver to</h2>
                        <div class="col-md-4">Pune</div>
                        <div class="col-md-4">Mumbai</div>
                        <div class="col-md-4">Bangalore</div>
                        <div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Noida</div>
                        <div class="col-md-4">Gurgaon</div>
                        <div class="col-md-4">New Delhi</div>
                        <div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Hyderabad</div><div class="col-md-4 mob">Tirupati</div>
                        <div class="col-md-4">Chennai</div>
                        <div class="col-md-4">Indore</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Nagpur</div>
                        <div class="col-md-4">Faridabad</div>
                        <div class="col-md-4">Ahmedabad</div><div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Ghaziabad</div>
                        <div class="col-md-4">Coimbatore</div>
                        <div class="col-md-4">Dubai</div><div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Vadodra</div>
                        <div class="col-md-4">Bhopal</div>
                        <div class="col-md-4">Kolkata</div><div class="col-md-4">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Surat</div>
                        <div class="col-md-4">Mysore</div>
                        <div class="col-md-4">Pondicherry</div><div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Nashik</div>
                        <div class="col-md-4">Jaipur</div>
                        <div class="col-md-4">Panchukla</div><div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Mohali</div>
                        <div class="col-md-4">Chandigarh</div>
                        <div class="col-md-4">Vijaywada</div><div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Vellore</div>
                        <div class="col-md-4">Zirakpur</div>
                        <div class="col-md-4">Lucknow</div><div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Kochi</div>
                        <div class="col-md-4">Vizag</div>
                        <div class="col-md-4">Tirupati</div><div class="col-md-4 mob">Tirupati</div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-4">Tiruppur</div>
                        <div class="col-md-4">Kota</div>
                        <div class="col-md-4">Many more...</div><div class="col-md-4">Tirupati</div>
                    </div>
                    <div class="col-md-12 row chb">
                        <div class="col-md-4">
                            <h2>Legal</h2>
                            <div class="col-md-12 row">Terms & Condition</div>
                            <div class="col-md-12 row">Privacy Policy</div>
                        </div>
                        <div class="col-md-4">
                            <h2>Contact</h2>
                            <div class="col-md-12 row"><i class="fa fa-envelope-o"></i><span> abcd@xyz.com</span></div>
                            <div class="col-md-12 row"><i class="fa fa-phone "></i> 0123 456 78 90</div>
                        </div>
                        <div class="col-md-4 social">
                            <h2>Social</h2>
                            <div class="col-md-12 row _2nd">
                                <div class=" ficon">
                                    <ul>
                                        <li><a href="" style="padding: 5px 10px;"><i class="fa fa-facebook fa-2x"></i></a></li>
                                        <li><a href=""><i class="fa fa-instagram fa-2x"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-md-12 row farr">All Right Reserver &copy; 2021 Designed by Aryan</p>
                </div>

            </div>
        </div>
        <!-- end of city  -->
    <!-- add to cart  -->
                <div class="select">
                    <h1 class="text-center">CART</h1>
                    <p class="totalp">Total Price : <span class="tp">0</span> Rs. <button class="btn btn-warning total-buy">Buy</button></p>
                </div>
                <!-- end of section  -->

    <!-- end of add to cart  -->



        <script src="js/mycartjs.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script> -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scroll.js"></script>



        <!-- INSERT INTO `food_table` (`s_no`, `mob`, `name`, `email`) VALUES ('1', '1234567890', 'Testname', 'this@this.com'); -->
</body>

</html>