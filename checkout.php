<?php
include "functions.php";
session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= template_header('Comanda ta') ?>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

  
</head>

<body>
<h1 align="center">Comanda ta</h1>

    <div id="all">
        <header>





            <div id="content">
                
                <div class="center">
                    <style>
                        .center {
                            margin: 50px 250px;
                            width: 90%;

                            padding: 30px;
                        }
                    </style>
                    <div class="row">

                        <div class="col-md-9 clearfix" id="checkout">

                            <div class="box">
                                <form method="post" action="checkout2.php">

                                    <ul class="nav nav-pills nav-justified">
                                        <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Date de locatie</a></li>
                                        <li><a href="checkout2.php"><i class="fa fa-money"></i><br>Metoda de plata</a></li>

                                    </ul>

                                    <div class="content">

                                        <!-- /.row -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="firstname">Nume</label>
                                                    <input type="text" class="form-control" id="firstname">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lastname">Prenume</label>
                                                    <input type="text" class="form-control" id="lastname">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.row -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="company">Firma</label>
                                                    <input type="text" class="form-control" id="company">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-4">
                                                <div class="form-group">
                                                    <label for="street">Strada</label>
                                                    <input type="text" class="form-control" id="street">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-2">
                                                <div class="form-group">
                                                    <label for="streetnr">Numar</label>
                                                    <input type="text" class="form-control" id="zip">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->

                                        <div class="row">
                                            <div class="col-sm-6 col-md-2">
                                                <div class="form-group">
                                                    <label for="zip">Cod postal</label>
                                                    <input type="text" class="form-control" id="zip">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <div class="form-group">
                                                    <label for="city">Oras</label>
                                                    <input type="text" class="form-control" id="city">
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="country">Tara</label>
                                                    <select class="form-control" id="country">
                                                        <option value="germany">Romania</option>
                                                        <option value="austria">Italia</option>
                                                        <option value="swiss">Germania</option>
                                                        <option value="usa">USA</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone">Telefon</label>
                                                    <input type="text" class="form-control" id="phone">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">E-Mail</label>
                                                    <input type="text" class="form-control" id="email">
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.row -->
                                    </div>

                                    <div class="box-footer">
                                        <div class="pull-left">
                                            <a href="index.php?page=cart" class="btn btn-default"><i class="fa fa-chevron-left"></i>Inapoi</a>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-template-main">Urmatorul<i class="fa fa-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box -->


                        </div>
                        <!-- /.col-md-9 -->



                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->
            </div>
            <!-- /#content -->






    </div>
    <!-- /#all -->
     
    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>





</body>

</html>
