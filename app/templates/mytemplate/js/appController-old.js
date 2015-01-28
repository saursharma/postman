var adminPanel = angular.module('adminPanel',['ngMaterial']);

adminPanel.controller('adminCtrl', function($scope, $mdSidenav) {
  $scope.title = 'Admin Panel';


  $scope.toggleLeft = function() {
    $mdSidenav('left').toggle()
        .then(function(){
      $log.debug("toggle left is done");
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
  
  /**
  {
    name : 'Home',
    icon: 'glyphicon-home',
	url: 'www.google.com'
  }
  */
  $scope.menuItems = [{
    name : 'Home',
    icon: 'glyphicon-home',
	url: 'www.google.com'
  }, {
    name : 'Applications',
    icon: 'glyphicon-wrench'
  }, {
    name : 'Users',
    icon: 'glyphicon-wrench'
  }, {
    name : 'Send Message',
    icon: 'glyphicon-wrench'
  }, {
    name : 'History',
    icon: 'glyphicon-wrench'
  }, {
    name : 'LogOut',
    icon: 'glyphicon-off'
  }];
})
