<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   

    <title>Game Hub</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet"> 

  </head>

  <body class="main-page">
    
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Game Hub</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="nav_menu active"><a href="<?php echo base_url(); ?>">Home</a></li>        

            <?php if(!$this->session->userdata('logged_in')) : ?>
              <li class="nav_menu " ><a href="<?php echo base_url(); ?>users/register">Create Account</a></li>              
            <?php endif; ?>            
          </ul>
          
          <?php if(!$this->session->userdata('logged_in')) : ?>
          <form method="post" action="<?php echo base_url(); ?>users/login" class="navbar-form navbar-right">
            <div class="form-group">
              <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>
            <button name="submit" type="submit" class="btn btn-default">Login</button>
          </form>
          <?php else: ?>
            <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/logout">
              <button name="submit" type="submit" class="btn btn-default" >Logout</button>
            </form>
          <?php endif; ?>

        </div><!--/.nav-collapse -->
      </div>
    </div>      

    <div class="jumbotron">
    <div class="container">
      <h1>The Game Hub</h1>
      <p>Get the latest action adventure games. <!--Call of Duty, Destiny, Watch Dogs, Sniper Elite, Batman, Shadow of Modor. --></p>
      <p>All the best titles. All in one place.</p>   
      <!-- <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p> -->
    </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-4">
            <?php $this->load->view('layouts/includes/sidebar'); ?>          
        </div>

        </div> 
        
          <div class="col-md-8">
          <div class="panel panel-default">
          <div class="panel-heading panel-heading-green">
            <h3 class="panel-title">Game Hub</h3>
          </div>
          <div class="panel-body">


            <script
              src="https://code.jquery.com/jquery-3.3.0.min.js"
              integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4="
              crossorigin="anonymous">
            </script>
            
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script> -->

            <script type="text/javascript">    
            $(document).ready(function(){
                $('.nav_menu').click(function(){
                    $('.nav_menu.active').removeClass('active');
                    $(this).addClass('active');
                });
            });
            </script>