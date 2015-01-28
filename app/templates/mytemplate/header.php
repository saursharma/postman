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
  <md-toolbar md-scroll-shrink>
    <div class="md-toolbar-tools">
      <md-button ng-click="toggleLeft()">
         <md-icon icon="<?=\helpers\url::template_path()?>img/ic_menu_white_24dp.png">
         
         </md-icon>
      </md-button>
      <h2> {{title}} </h2>
    </div>
  </md-toolbar>
  <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
    <md-toolbar class="md-theme-indigo" ng-controller="LeftCtrl">
    <div layout="row">
      <div flex>
      <span style="padding: 12%;" class="glyphicon glyphicon-arrow-left" aria-hidden="true" ng-click="close()"></span> 
      </div><div flex>
      <h1 class="md-toolbar-tools">Menu</h1>
      </div></div>
    </md-toolbar>
    <md-content class="md-padding" ng-controller="LeftCtrl">
       <md-list>
         <md-item ng-repeat="item in menuItems"> 
           <md-item-content>
           <md-button style="width:100%" ng-href="{{item.url}}">
             <div layout="row">
             <div flex>
               <span class="glyphicon {{item.icon}}" aria-hidden="true"></span> 
             </div>
             <div flex>
               <span> {{item.name}} </span>
             </div>
           </div>
           </md-button>
           <hr/>
           </md-item-content>
          </md-item>
       </md-list>
    </md-content>
  </md-sidenav>

  <!-- Floating button at bottom right corner -->
  <!-- <md-button id="addPopUp" class="md-fab md-raised" ng-click="showDialog($event)" aria-label="Add anything.. :)">
    <md-tooltip> Yo!! Add tooltip here </md-tooltip>
    <md-icon icon="<?=\helpers\url::template_path()?>img/ic_add_24px.svg" style="width: 24px; height: 24px;"></md-icon>
  </md-button> -->

</html>
