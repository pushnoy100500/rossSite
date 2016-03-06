<?php

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="initial-scale=1, maximum-scale=1">

     <title></title>
     <link rel="stylesheet" href="stylesheets/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
   </head>
   <body>
    <nav class="navbar navbar-inverse navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse-target" aria-expanded="false" class="navbar-toggle collapsed">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            Maziro
          </a>
        </div>
        <div id="collapse-target" class="collapse navbar-collapse">
          <ul class="navbar-nav nav navbar-right">
            <li><a href="#">Products</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Contacts</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="row company-brief">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <h1 class="company-name">
          MAZIRO <span>INC.</span>
        </h1>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row company-contacts">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <h3>Phone:</h3>
            <p>
              +416-833-3996
            </p>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <p>
              <h3>Location:</h3>
              <p>
                1669 Flint Road
                Ontario, M3J 2W8
              </p>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row image-slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/slide1.jpg" alt="...">
          </div>
          <div class="item">
            <img src="images/slide2.jpg" alt="...">
          </div>
          <div class="item">
            <img src="images/slide3.jpg" alt="...">
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="company-services">
      <div class="row">
        <div class="col-md-10 col-sm-12 col-xs-10 col-sm-offset-1 col-md-offset-1 col-xs-offset-1">
          <div class="row">
            <div class="serv service1 col-md-3 col-sm-10">
              <h4>
                <span>HIGH QUALITY</span><br> TOOL & DIE PROTOTYPE COMPANY
              </h4>
              <p>
                Since 2001 Maziro has been specializing in the building of the automated equipment, customized machinery and also prototyping of the plastic or metal components and assemblies for the automotive and consumer goods manufacturer.
              </p>
              <a href="#">LEARN MORE >></a>
            </div>
            <div class="service2 serv col-md-3 col-sm-10">
              <img src="images/worksmanship.png" alt="" />
              <h4>
                TOP WORKSMANSHIP
              </h4>
              <p>
                Maziro Inc. is an ISO 9001- 2000 Standard registered company and specialize in custom projects.
              </p>
            </div>
            <div class="service3 serv col-md-3 col-sm-10">
              <img src="images/timely.png" alt="" />
              <h4>
                TIMELY COMPLETION
              </h4>
              <p>
                All project deliverables are guaranteed to be delivered on time accordingly project scope.
              </p>
            </div>
            <div class="service4 serv col-md-3 col-sm-10">
              <img src="images/topquality.png" alt="" />
              <h4>TOP QUALITY</h4>
              <p class="">
                We consider this step as an indication of our commitment and drive to provide you with the excellent service and the high quality products to all our customers.
              </p>
            </div>

        </div>
      </div>
    </div>

   </body>
 </html>
