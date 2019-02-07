<!doctype html>
<html>

<body>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Punctuate</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <link href='http://fonts.googleapis.com/css?family=Alice' rel='stylesheet' type='text/css'>

  <style>
    body {
      margin-top: 75px;
      position: relative;
    }

    .navbar-default {
      background-color: #A764EF;
      border-color: #A764EF;
      opacity: 0.9;
    }

    .navbar-default .navbar-brand {
      color: #ffffff;
      font-family: alice;
      margin: 0 10px 0 0px;
      font-size: 25px;
    }

    .navbar-default .navbar-nav > li > a {
      color: #ffffff;
      font-family: alice;
      border-right: 1px solid #7733c0;

    }

    .navbar-default .navbar-nav {
      border-left: 1px solid #7733C0;
    }

    #topContainer {
      background-image: url("images/backgroundblue.png");
      width: 100%;
      background-size: cover;
      margin-top: -75px;
    }

    #topRow {
      margin-top: 250px;
      text-align: center;
    }

    #topRow h1 {
      font-size: 350%;
    }

    .navbar-default .navbar-form {
      margin: 9px -50px 0 0;
    }

    .bold {
      font-weight: bold;
    }

    #addon {
      position: relative;
      top: 0px;
    }

    .marginTop {
      margin-top: 30px;
    }

    #mailing {
      margin-top: 60px;
    }

    .center {
      text-align: center;
    }

    .title {
      margin-top: 60px;
      font-size: 3em;
    }

    #middleRow {
      margin-top: 50px;
    }

    .paddingLeft {
      padding-left: 35px;
    }

    #footer {
      background-color: skyblue;
      width: 100%;
      padding-top: 100px;
    }

    #register {
      text-align: center;
      font-size: 5em;
      margin-bottom: 50px;
    }

    .marginBottom {
      margin-bottom: 30px;
    }

    #signinemail {
      position: relative;
      right: 15px;
    }

    #signinpass {
      position: relative;
      right: 15px;
    }

    #signinbutton {
      position: relative;
      right: 15px;
    }

    #error {
      color: red;
    }
    
    #success {
      color: green;
      font-weight: bold;
    }

    .navbar-default .navbar-nav > .active > a {
      background-color: #7733C0;
      color: white;
    }

    .navbar-default .navbar-nav > li > a:hover {
      background-color: #7733C0;
      color: white;
    }

    .navbar-default .navbar-nav > li > a:focus {
      background-color: #7733C0;
      color: white;
    }

  </style>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

  <div class="navbar navbar-default navbar-fixed-top" role="banner">

    <div class="container">

      <div class="navbar-header">

        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">Punctuate</a>

      </div>

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#topContainer">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#footer">Register</a></li>
        </ul>

        <form class="navbar-form navbar-right">

          <div class="form-group">
            <input type="email" placeholder="Email" class="form-control" id="signinemail" />
          </div>

          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" id="signinpass" />
          </div>

          <button type="login" class="btn btn-success" id="signinbutton">Log in</button>

        </form>

      </div>

    </div>

  </div>

  <div class="container contentContainer" id="topContainer">

    <div class="row">

      <div class="col-md-8 col-md-offset-2" id="topRow">

        <h1>Learn how awesome English is!</h1>

        <p class="lead marginTop">Register now and start learning English.</p>

        <p class="bold" id="mailing">Interested? Join our mailing list!</p>

        <form class="marginTop">

          <div class="input-group">

            <span class="input-group-addon" id="addon">@</span>

            <input type="email" class="form-control" placeholder="Your email" />

          </div>

          <input type="submit" class="btn btn-success marginTop" />

        </form>

      </div>

    </div>

  </div>

  <div id="about" class="container contentContainer">
    <div class="row" id="middleRow">
      <h1 class="center rowHeader">What Makes Us Different</h1>
      <p class="lead center">An interactive website with quizzes, tutorials, and games</p>
      <div class="row marginBottom">
        <div class="col-md-4 paddingLeft">
          <h2>
            <span class="glyphicon glyphicon-education"></span> Tutorials</h2>
          <p>A brief description of this feature of the company. A bit of text will help to fill this area up and match the other blocks. A brief description of this feature of the company. A bit of text will help to fill this area up and match the other
            blocks.</p>
          <button class="btn btn-success">Register</button>
        </div>
        <div class="col-md-4 paddingLeft">
          <h2>
            <span class="glyphicon glyphicon-list-alt"></span> Quizzes</h2>
          <p>A brief description of this feature of the company. A bit of text will help to fill this area up and match the other blocks. A brief description of this feature of the company. A bit of text will help to fill this area up and match the other
            blocks.</p>
          <button class="btn btn-success">Register</button>
        </div>
        <div class="col-md-4 paddingLeft">
          <h2>
            <span class="glyphicon glyphicon-blackboard"></span> Games</h2>
          <p>A brief description of this feature of the company. A bit of text will help to fill this area up and match the other blocks. A brief description of this feature of the company. A bit of text will help to fill this area up and match the other
            blocks.</p>
          <button class="btn btn-success">Register</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container contentContainer" id="footer">

    <h1 id="register">Register</h1>
    
    <div id="success"></div>

    <div id="error"></div>

    <form id="validationForm">

      <div class="form-group">
        <input type="email" placeholder="Email" class="form-control" id="email" />
      </div>

      <div class="form-group">
        <input type="password" placeholder="Password" class="form-control" id="pass1" />
      </div>

      <div class="form-group">
        <input type="password" placeholder="Confirm password" class="form-control" id="pass2" />
      </div>

      <button type="login" class="btn btn-success">Register</button>

    </form>

  </div>
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script>
  
    $(".contentContainer").css("min-height", $(window).height());

    $("#validationForm").submit(function(event) {

      var errorMessage = "";
      var successMessage = "Email sent!";

      event.preventDefault();

      function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(
          /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i
        );
        return pattern.test(emailAddress);
      };

      if (!isValidEmailAddress($("#email").val())) {

        errorMessage = "<br />Please enter a valid email address";
      }

      if ($("#pass1").val() != $("#pass2").val()) {

        errorMessage = errorMessage + "<br />The passwords do not match";
      }

      if (errorMessage == "") {

    	$("#success").html(successMessage);
    	
    	
      } else {

        $("#error").html(errorMessage);

      }

    });
  
  </script>

</body>
</html>
