<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopping Cart</title>

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

<!--This is css for the search bar-->
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

img{
    width:100%;
    }
</style>

<style type="text/css"></style></head>


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
                          <a href="shoppingcart.html">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a>

                  </li>



                </ul>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
       <div class="container">

           <!-- Jumbotron Header -->
          <header class="jumbotron hero-spacer">
            <center><img src = "images/logo.png" style = "width:150px;height:80px;"></center>
               <center><h1>Shopping Cart</h1></center>


           </header>

           <hr>

           <table id="cart" class="table table-hover table-condensed">
                       <thead>
                           <tr>
                               <th style="width:50%">Product</th>
                               <th style="width:10%">Price</th>
                               <th style="width:8%">Quantity</th>
                               <th style="width:22%" class="text-center">Subtotal</th>
                               <th style="width:10%"></th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td data-th="Product">
                                   <div class="row">
                                       <div class="col-sm-2 hidden-xs"><img src="images/redApple.png" alt="..." class="img-responsive"></div>
                                       <div class="col-sm-10">
                                           <h4 class="nomargin">Apple</h4>
                                           <p>The best apple you ever had, guarenteed or your money back.</p>
                                       </div>

                                          <div class="col-sm-2 hidden-xs"><img src="images/corn.png" alt="..." class="img-responsive"></div>
                                       <div class="col-sm-10">
                                           <h4 class="nomargin">Corn</h4>
                                           <p>This corn will make you wanna slap your mother, guaranteed or your money back.</p>
                                       </div>


                                   </div>
                               </td>
                               <td data-th="Price">$1.99</td>

                               <td data-th="Quantity">
                                   <input type="number" class="form-control text-center" value="1">
                               </td>
                               <td data-th="Subtotal" class="text-center">1.99</td>



                           </tr>


                       </tbody>
                       <tfoot>
                           <tr class="visible-xs">
                               <td class="text-center"><strong>Total 1.99</strong></td>
                           </tr>
                           <tr>
                               <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                               <td colspan="2" class="hidden-xs"></td>
                               <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                               <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                           </tr>
                       </tfoot>
                   </table>

           <hr>


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
