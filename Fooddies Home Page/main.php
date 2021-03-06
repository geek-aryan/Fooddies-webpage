<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}
?>


<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page-<?php echo $_SESSION['username']?></title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/mystyle2.css">

</head>

<body data-spy="scroll" data-offset="60" data-target="#myScrollspy">
    <div class="container-fluid navbar ">
        <!--navbar-fixed-top-->
        <nav class="col-md-12 row">
            <div class="col-md-3">
                <div class="logo"><img class="img-responsive" src="images/Baby Food.png" alt=""></div>
                <span class="dropdowns">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Bengaluru Karnataka
                        <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Pune</a></li>
                    <li><a href="#">Mumbai</a></li>
                    <li><a href="#">Noida</a></li>
                    <li><a href="#">Gurgaon</a></li>
                    <li><a href="#">Delhi</a></li>
                    <li><a href="#">Hyderabad</a></li>
                    <li><a href="#">Chennai</a></li>
                    <li><a href="#">Indore</a></li>
                    <li><a href="#">Nagpur</a></li>
                    <li><a href="#">Faridabad</a></li>
                    <li><a href="#">Ahmedabad</a></li>
                    <li><a href="#">Ghaziabad</a></li>
                </ul>
                </span>
            </div>
            <div class="form-group col-md-6">
                <input placeholder="Search pizza or more..." class="form-control" value="">
            </div>
            <div class="col-md-3">
                <div class="vegfilter">
                    <input id="" type="checkbox" name="vegFilter" class=""> Veg Only
                </div>
                <button class="btn sortbtn">Sort By</button>
                <a class="logbtn" href="logout.php">log out</a>
            </div>
        </nav>
    </div>
    <!-- end of header or navbar  -->


    <div class="container-fluid dishes">
        <div class="col-md-12 row">
            <nav class="col-md-3" id="myScrollspy" data-spy="affix" data-offset-top="205">
                <h1>Collections</h1>
                <ul class="nav nav-pills nav-stacked">
                    <li class=""><a href="#section1">BOGO Pizza Combos</a></li>
                    <li class=""><a href="#section2">Dynamic Group Combos</a></li>
                    <li class=""><a href="#section3">Sides & Beverages</a></li>
                    <li class=""><a href="#section4">Summer Special</a></li>
                    <li class=""><a href="#section5">Personal Half Pizzas (Semizzas)</a></li>
                    <li class=""><a href="#section6">Signature Pizzas</a></li>
                    <li class=""><a href="#section7">Cheese Burst Pizzas</a></li>
                    <li class=""><a href="#section8">Combos for 2</a></li>
                    <li class=""><a href="#section9">Value Combos (Serves 1)</a></li>
                    <li class=""><a href="#section10">Holiday Special Combos</a></li>
                    <li class=""><a href="#section11">Cheesy Pastas (by Firangi Bake)</a></li>
                    <li class=""><a href="#section12">Desserts.</a></li>
                </ul>
            </nav>
            <div class="col-md-6 mid">
                <div id="section1" class="row">
                    <h1>BOGO Pizza Combos</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b3.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b4.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section 1 -->
                <div id="section2" class="row">
                    <h1>Dynamic Group Combos</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b5.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b6.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b7.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b8.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section2 -->

                <div id="section3" class="row">
                    <h1>Sides & Beverages</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b9.webp" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b10.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b11.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b12.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section3 -->
                <div id="section4" class="row">
                    <h1>Summer Special</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b13.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b14.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b15.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b16.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->
                <div id="section5" class="row">
                    <h1>Personal Half Pizzas (Semizzas)</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b17.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b18.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b19.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b20.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->
                <div id="section6" class="row">
                    <h1>BOGO Pizza Combos</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b21.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->
                <div id="section7" class="row">
                    <h1>BOGO Pizza Combos</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->
                <div id="section8" class="row">
                    <h1>BOGO Pizza Combos</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->
                <div id="section9" class="row">
                    <h1>BOGO Pizza Combos</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->
                <div id="section10" class="row">
                    <h1>BOGO Pizza Combos</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->
                <div id="section11" class="row">
                    <h1>BOGO Pizza Combos</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b1.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->
                <div id="section12" class="row">
                    <h1>Desserts.</h1>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b32.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b33.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b34.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <a href=""><img class="img-responsive" src="images/b35.jpg" alt=""></a>
                            </div>
                            <div class="panel-body">
                                <h4>Choose any 2 Veg Pizzas</h4>
                                <p class="panel-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. </p>
                                <div class="identy-veg  outveg col-md-2"><span class=" veg"></span></div>
                                <p class="panel-price">299 RS</p>
                                <button class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section4 -->


            </div>
            <!-- end of mid of dishes  -->

            <div class="col-md-3 cart">
                <h1 align="center">Cart Empty</h1>
                <div class="cartemptyimg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 145"><g fill="none" fill-rule="evenodd"><path fill="#D8D9DD" d="M60.599 65.665s-5.331 2.94-18.056 3.16c-12.722.219-20.199-2.89-20.868-6.545-.67-3.658-3.686-14.27-3.686-14.27S7.053 46.478 2.734 33.026c-4.322-13.45 3.755-22.43 12.061-23.578 8.31-1.15 11.945 1.173 11.945 1.173S36.64-2.428 50.39.794c6.548 1.534 10.72 6.697 13.297 11.688 2.765-1.734 10.309-5.268 18.255 1.401 10.002 8.398 8.332 24.253-2.07 28.854-4.657 2.06-9.142 2.173-12.676 1.673-.235 4.211-.86 15.274-1.056 16.635-.24 1.683-10.463 3.39-16.989 3.672-6.525.282-10.684-1.317-10.684-1.317s11.298.094 17.561-1.692c6.266-1.786 7.167-2.936 7.386-5.024.188-1.783.42-10.477.48-12.963-2.463-.68-3.967-1.485-3.967-1.485s17.572 1.131 23.124-6.041c5.552-7.173-.227-18.158-5.632-20.5-4.223-1.828-9.802-.252-12.05.528 1.529 3.929 2.062 7.042 2.062 7.042S59.92 7.662 48.781 6.445C37.646 5.232 30.786 16.66 30.786 16.66s-12.64-4.961-18.103-.77c-5.461 4.193-8.793 14.98-2.591 22.174 3.1 3.592 7.159 5.245 10.446 5.997 14.503.835 28.865-8.342 28.865-8.342-9.269 9.457-19.842 11.074-25.038 11.237-.597 1.253-.976 3.1-.456 5.727 1.211 6.119 1.87 9.1 1.87 9.1s13.54 8.428 34.82 3.882"></path><path fill="#D5D9E2" d="M6.97 114.365s-.398-4.007-4.275-10.29c-3.874-6.276-1.335-6.68.802-14.696C5.635 81.363 1.092 75.75 1.092 75.75s8.817 5.077 6.948 13.762c-1.872 8.685-5.477 8.019-3.608 12.294 1.872 4.274 3.608 9.351 2.538 12.559zm18.44 3.34s-4.808-3.208-1.869-9.219c2.94-6.014-.268-12.963-.268-12.963 10.565 12.634.976 14.37 2.137 22.182zm63.536-7.347a1.803 1.803 0 1 1-1.806 1.803c0-.998.808-1.803 1.806-1.803zm-17.837-9.222a.802.802 0 1 1-.001 1.605.802.802 0 0 1 0-1.605zM90.95 87.242a1.803 1.803 0 1 1 0 3.606 1.803 1.803 0 0 1 0-3.606zm-17.304 24.452a2.671 2.671 0 0 1 0 5.342 2.672 2.672 0 1 1 0-5.342zM67.033 89.11a1.403 1.403 0 1 1-1.405 1.402c0-.774.63-1.402 1.405-1.402zm-29.528 26.055a1.803 1.803 0 0 1 0 3.609 1.804 1.804 0 1 1 0-3.609zm4.474-12.96a2.672 2.672 0 1 1 .004 5.344 2.672 2.672 0 0 1-.004-5.343zm-25.187-8.82a1.27 1.27 0 1 1 0 2.538 1.27 1.27 0 0 1 0-2.538zm-3.808 16.303a2.004 2.004 0 1 1 0 4.009 2.004 2.004 0 0 1 0-4.01zm67.847-2.898c11.713-4.927-3.628-16.778 2.685-26.53-13.339 14.115 1.186 16.894-2.685 26.53zm-37.085 15.902H2.032s2.118 15.415 14.569 19.33c-3.584.684-10.19 2.008-7.563 2.008H78.453c2.627 0-3.98-1.324-7.563-2.007 7.073-2.224 10.812-8.157 12.72-12.872l.002-.003c1.687-2.32 3.728-6.03 3.728-6.03h17.569c2.472 0 4.214 1.581 4.543 1.67.33.088 21.178 0 24.452 0 3.273 0 5.41-.066 5.41-2.674 0-2.605-2.872-3.473-2.872-3.473H94.02c-7.551 0-12.628 4.051-12.628 4.051H43.746zm-9.722 1.629H77.85s-1.803 9.888-7.416 13.897c-5.61 4.006-19.107 3.205-19.107 3.205 14.429-1.474 32.838-13.408 8.146-15.228l-25.45-1.874zm26.472-10.226c8.47-9.473-10.47-13.601-8.95-25.118-5.998 18.471 8.314 14.752 8.95 25.118z"></path></g></svg>
                </div>
                <div class="cartEmptyMessage">Chef Luca is ready to cook something awesome for you.<br><span>Add a pizza!</span></div>
            </div>
            <!-- end of cart  -->
        </div>
    </div>
    <!-- end of dishes  -->









    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>