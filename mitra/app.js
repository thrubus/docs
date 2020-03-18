var app = angular.module('app', []);

app.controller('InvestorController', function InvestorController($scope, $http) {
  $http({method : 'GET',url : './investor.json'})
  .then(function (response) {
    $scope.investors = JSON.parse(JSON.stringify(response)).data;
  })
});