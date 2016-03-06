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
            Company
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
          WELDING <span>CO.</span>
        </h1>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row company-contacts">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <h3>Phone:</h3>
            <p>
              +1 959 603 6035 (585-order)
            </p>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <p>
              <h3>Location:</h3>
              <p>
                8901 Marmora Road
                Glasgow, DO4 69GR.
              </p>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="row welding-products">
      <div class="col-md-12">
        <h2>
          WELDING PRODUCTS
        </h2>
      </div>
      <div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 welding-pic">

        <img src="images/welding-products.jpg" alt="welding products" />
      </div>
      <div class="col-md-7 col-sm-7 col-xs-10 welding-features">
        <ul>
          <li>
            <img src="images/feature1.png" alt="icon" />
            <div class="feature-descr">
              <h4>
                CONSECTETUER ADIPISCING
              </h4>
              <p>
                Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </li>
          <li>
            <img src="images/feature2.png" alt="icon" />
            <div class="feature-descr">
              <h4>
                PRAESENT VESTIBULUM
              </h4>
              <p>
                Voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.
              </p>
            </div>
          </li>
          <li>
            <img src="images/feature3.png" alt="icon" />
            <div class="feature-descr">
              <h4>
                LOREM IPSUM DOLOR SIT AMET
              </h4>
              <p>
                Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numq
                uam. Magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>

   </body>
 </html>
