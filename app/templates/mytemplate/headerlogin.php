<!doctype html>
<html ng-app='adminPanel'>
  <head>
  <!-- JS -->
  <?php helpers\assets::js(helpers\url::template_path() . 'bower_components/angular/angular.min.js') ?>
  <?php helpers\assets::js(helpers\url::template_path() . 'bower_components/angular-material/angular-material.min.js') ?>
  <?php helpers\assets::js(helpers\url::template_path() . 'bower_components/hammerjs/hammer.min.js') ?>
  <?php helpers\assets::js(helpers\url::template_path() . 'bower_components/angular-aria/angular-aria.min.js') ?>
  <?php helpers\assets::js(helpers\url::template_path() . 'bower_components/angular-animate/angular-animate.min.js') ?>
  <?php helpers\assets::js(helpers\url::template_path() . 'bower_components/bootstrap/dist/js/bootstrap.min.js') ?>
  <?php helpers\assets::js(helpers\url::template_path() . 'js/appController.js') ?>
  <?php helpers\assets::js(helpers\url::template_path() . 'js/odometer.js') ?>
  
  <!-- CSS -->
	<?php helpers\assets::css(helpers\url::template_path() . 'bower_components/angular-material/angular-material.min.css') ?>
	<?php helpers\assets::css(helpers\url::template_path() . 'bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
	<?php helpers\assets::css(helpers\url::template_path() . 'css/app.css') ?>
	<?php helpers\assets::css(helpers\url::template_path() . 'css/odometer-theme-default.css') ?>
</head>

<body ng-controller="adminCtrl">
 </body>
</html>
