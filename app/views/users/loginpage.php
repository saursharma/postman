<!doctype html>
<html ng-app='adminPanel' class='login-body'>
  <head>
  <script src="bower_components/angular/angular.min.js"></script>
  <script src="bower_components/angular-material/angular-material.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bower_components/angular-material/angular-material.min.css">
  <script src="bower_components/hammerjs/hammer.min.js"></script>
  <script src="bower_components/angular-aria/angular-aria.min.js"></script>
  <script src="bower_components/angular-animate/angular-animate.min.js"></script>
  <script src="js/appController.js"></script>
  <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body ng-controller="loginCtrl" class="login-body">
<md-card class="login-window">
  <md-toolbar class="md-accent login-toolbar">
    <div class="md-toolbar-tools">
      <span class="md-flex"> Please provide your credentials!!! </span>
    </div>
  </md-toolbar>
  <center>
    <img class="logo" src="{{logo}}">
  </center>
  <md-content class="md-padding">
    <md-text-float label="Email ID" ng-model="user.email" class="long"> </md-text-float>
    <md-text-float label="Password" ng-model="user.password" type="password" class="long"> </md-text-float>
    <center>
      <md-button class="md-raised md-primary">Grant me access.. :)</md-button>
    </center>
  </md-content>
</md-card>
</body>
</html>
