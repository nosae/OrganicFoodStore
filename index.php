<!DOCTYPE html>

<?php
include("functions/functions.php")
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OFS HomePage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!--This is for the search bar and shopping cart-->
<style>
#box{
  border-color: white;
}

#btn{
  background-image:url(images/searchicon.png);
  background-size:100% 100%;
  width:30px;
  height:28px;
}
</style>


<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                 	<li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="signIn.html">Sign in</a>
                    </li>
                    <li>
                        <a href="aboutUs.html">About Us</a>
                    </li>
                    <li>
                        <a href="contact/contact.html">Contact Us</a>
                    </li>

                    <li>
                      <div class = "navbar-form"
                      <form>
                          <input type="text" placeholder="Search..." id='box'><input type="submit" value=" " id="btn">
                      </form>
                    </div>
                    </li>

                    <li>
                          <a href="shoppingcart.php">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a>
                  </li>
                </ul>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p><center><img src = "images/logo.png" style = "width:200px;height:100px;"></center></p>
                <center><p class="lead">Products</p></center>
                <div class="list-group">

                    <?php getCats(); ?>

                    <!--
                    <a href="fruits.html" class="list-group-item">Fruits</a>
                    <a href="vegetables.html" class="list-group-item">Vegetables</a>
                    <a href="dairy.html" class="list-group-item">Dairy</a>
                    <a href="nutsAndSeeds.html" class="list-group-item">Nuts and Seeds</a>
                    <a href="meats.html" class="list-group-item">Meats</a>
                    <a href="snacks.html" class="list-group-item">Snacks</a>
                  -->

                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/slideImage1.png" style = "width:900px;height:500px">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slideImage2.png" style = "width:900px;height:500px">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slideImage3.png" style = "width:900px;height:500px">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Title -->
                     <div class="row">
                           <div class="col-sm-4 col-lg-4 col-md-4">
                             <h3>Featured Items</h3>
                         </div>
                     </div>

                     

                      <div class="row">
                        <?php getProducts(); ?>

                        <!--
                          <div class="col-sm-4 col-lg-4 col-md-4">
                              <div class="thumbnail">
                                  <img src="images/redApple.png" style = "width:180px;height:190px;">
                                  <div class="caption">
                                      <h4><center><a href="#">Red Apples</a></center></h4>
                                      <p><center>$0.15 /each</center></p>
                                      <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>


                    <div class="col-sm-4 col-lg-4 col-md-4">
                              <div class="thumbnail">
                             <img src="images/orange.png" style = "width:180px;height:190px;">
                             <div class="caption">
                                 <h4><center><a href="#">Oranges</a></center></h4>
                                 <p><center>$0.20 /each</center></p>
                                 <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                             </div>
                         </div>
                     </div>

                      <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/corn.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                  <h4><center><a href="#">Corn</a></center></h4>
                                  <p><center>$0.15 /each</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>

                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/tomato.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Tomatoes</a></center></h4>
                                   <p><center>$0.15 /each</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>


                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/grapes.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Grapes</a></center></h4>
                                   <p><center>$0.30 /lb</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>

                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/pistachios.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Pistachios</a></center></h4>
                                   <p><center>$0.50 /lb</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>

                     -->

                </div>

            </div>

        </div>

    </div>




    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center><p>CS160 &copy; OFS Team One 2017</p></center>
                </div>
                <div>
                  <center><img src = "images/heart.png" style = "width:90px;height:80px;"></center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
