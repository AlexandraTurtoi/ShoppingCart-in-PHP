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
                                <form method="post" action="index.php?page=placeorder">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="checkout.php"><i class="fa fa-map-marker"></i><br>Date de locatie</a></li>
                                        <li class="active"><a href="#"><i class="fa fa-money"></i><br>Metoda de plata</a></li>

                                    </ul>

                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box payment-method">

                                                    <h4>Card</h4>

                                                    <div class="panel panel-info">
                                                        <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Plata securizata</div>
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <div class="col-md-12"><strong>Card Type:</strong></div>
                                                                <div class="col-md-12">
                                                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                                                        <option value="5">Visa</option>
                                                                        <option value="6">MasterCard</option>
                                                                        <option value="7">American Express</option>
                                                                        <option value="8">Discover</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                                                                <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12"><strong>Card CVV:</strong></div>
                                                                <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <strong>Expiration Date</strong>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <select class="form-control" name="">
                                                                        <option value="">Month</option>
                                                                        <option value="01">01</option>
                                                                        <option value="02">02</option>
                                                                        <option value="03">03</option>
                                                                        <option value="04">04</option>
                                                                        <option value="05">05</option>
                                                                        <option value="06">06</option>
                                                                        <option value="07">07</option>
                                                                        <option value="08">08</option>
                                                                        <option value="09">09</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <select class="form-control" name="">
                                                                        <option value="">Year</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2023">2023</option>
                                                                        <option value="2024">2024</option>
                                                                        <option value="2025">2025</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <span> Plateste in siguranta folosind cardul!</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box-footer text-center">
                                                        <input type="radio" name="payment" id="1" value="payment1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box payment-method">

                                                    <h4 align="center">La primirea coletului</h4>

                                                    <p align="center">Plata se va efectua la primirea coletului.

                                                    </p>

                                                    <div class="box-footer text-center ">

                                                        <input type="radio" name="payment" id="2" value="payment2">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.row -->
                                    <div class="box-footer">
                                        <div class="pull-left">
                                            <a href="checkout.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Inapoi</a>
                                        </div>
                                        <div class="pull-right">

                                            <button href="index.php?page=placeorder" id="btn" name="send" class="btn btn-default ">Plaseaza comanda<i class="fa fa-chevron-right"></button></i>
                                            </li>
                                        </div>
                                    </div>
                            </div>

                            <script type="text/javascript">
                                btn.disabled = true;

                                $(function() {
                                    $("input[name='payment']").click(function() {
                                        if (($("#1").is(":checked")) || ($("#2").is(":checked"))) {
                                            $("#btn").removeAttr("disabled");

                                        } else {

                                            btn.disabled = true;
                                        }
                                    });
                                });
                            </script>


                        </div>

</body>

</html>