var adminPanel = angular.module('adminPanel', ['ngMaterial'])

adminPanel.controller('loginCtrl', function($scope) {
  $scope.logo = "https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfa1/v/t1.0-1/p160x160/1966841_10205564593336771_1131066954403916535_n.jpg?oh=e110c4b435cec1f8d2d99b8fad29f516&oe=55336522&__gda__=1428491118_1bfc83d6ec955ffa3107d05ea7629090";
});

function addAppDialogCtrl($scope, $mdDialog) {
  $scope.app;

  $scope.addApp = function() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        window.console.log('success');
      }
    }
    xmlhttp.open("POST","applications/addnew",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("data="+$scope.app);
  };
};

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
    $mdDialog.show({
      controller: addAppDialogCtrl,
      //templateUrl: 'dialog.tmpl.html',
      template: '<md-dialog aria-label="Add new application" style="width: 60%">' +
          '<md-content><md-subheader class="md-sticky-no-effect">Add new application</md-subheader>' +
          '<p>Add application details</p>' +
          '<md-text-float label="App name" ng-model="app.name" class="long"> </md-text-float>' +
          '<md-text-float label="Package name" ng-model="app.package" class="long"> </md-text-float>' +
          '<md-text-float label="Public key" ng-model="app.key" class="long"> </md-text-float>' +
          '</md-content><div class="md-actions" layout="row"><span flex></span>' +
          '<md-button ng-click="addApp()" class="md-raised md-primary">Add</md-button>' +
          '<md-button ng-click="#" class="md-raised md-warn">Cancel</md-button>' +
          '</div></md-dialog>', 
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


