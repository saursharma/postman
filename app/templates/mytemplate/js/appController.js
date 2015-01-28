var adminPanel = angular.module('adminPanel', ['ngMaterial'])

adminPanel.controller('loginCtrl', function($scope) {
  $scope.logo = "https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfa1/v/t1.0-1/p160x160/1966841_10205564593336771_1131066954403916535_n.jpg?oh=e110c4b435cec1f8d2d99b8fad29f516&oe=55336522&__gda__=1428491118_1bfc83d6ec955ffa3107d05ea7629090";
});

adminPanel.controller('adminCtrl', function($scope, $mdSidenav, $mdDialog) {
  $scope.title = 'Admin Panel';

  $scope.toggleLeft = function() {
    $mdSidenav('left').toggle()
        .then(function(){
      $log.debug("toggle left is done");
    });
  };

  // Show dialog (For Add new aplication)
  $scope.showDialog = function(ev) {
    window.console.log('in func');
    $mdDialog.show({
     // controller: DialogController,
      //templateUrl: 'dialog.tmpl.html',
      template: '<md-dialog> <md-content> <table> <thead> <tr><th><center> Add New Application </center></th> </tr>  </thead> <tbody><tr><td> Application name</td><td> <input type="text" id="app_name" name="app_name" value=""> </td></tr><tr><td> Package name</td><td> <input type="text" id="package_name" name="package_name" value=""> </td> </tr> <tr><td> Public Key </td><td> <input type="text" id="public_key" name="public_key" value=""> </td> </tr></tbody> </table><md-button ng-href="/applications/appdisplay"> Save </md-button> </md-content></md-dialog>', 
      targetEvent: ev
    });
  };
  
    // Show dialog (For add new messages)
  $scope.showDialog1 = function(ev) {
    window.console.log('in func');
    $mdDialog.show({
     // controller: DialogController,
      //templateUrl: 'dialog.tmpl.html',
      template: '<md-dialog> <md-content> <table class="table table-hover"> <thead> <tr><th><center> Add New Messgae </center></th> </tr>  </thead> <tbody><tr><td> Sender (Email Id)</td><td> <input type="text" id="sender_email" name="sender_email" value=""> </td></tr><tr><td> Message </td><td> <input type="text" id="message" name="message" value=""> </td> </tr> <tr><td> URL </td><td> <input type="text" id="message_url" name="message_url" value=""> </td> </tr></tbody> </table><md-button ng-href="/applications/addnew"> Save </md-button> </md-content></md-dialog>', 
      targetEvent: ev
    });
  };
});

adminPanel.controller('LeftCtrl', function($scope, $timeout, $mdSidenav, $log) {
  $scope.close = function() {
    $mdSidenav('left').close()
        .then(function(){
      $log.debug("close LEFT is done");
        });
  };

  // Icons at http://getbootstrap.com/components/
  $scope.menuItems = [{
    name : 'Home',
    icon: 'glyphicon-home',
    url: '/'
  }, {
    name : 'Applications',
    icon: 'glyphicon-wrench',
    url: '/applications'
  }, {
    name : 'Users',
    icon: 'glyphicon-off',
    url: '/users'
  }, {
    name : 'Messages',
    icon: 'glyphicon-off',
    url: '/messages'
  }];
});


