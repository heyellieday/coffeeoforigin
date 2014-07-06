var app = angular.module('app', ['ngSanitize']);

app.run(['$rootScope', function($rootScope){
  // the following data is fetched from the JavaScript variables created by wp_localize_script(), and stored in the Angular rootScope
  $rootScope.dir = BlogInfo.url;
  $rootScope.site = BlogInfo.site;
  $rootScope.api = AppAPI.url;
}]);

app.controller('PageCtrl', ['$scope', '$http',"$sce", function($scope, $http, $sce) {


$(document).ready(function(){

            $("#slider").skippr();
                $scope.$apply(function(){
               $scope.currentPage = "home";
               $http({
        method: 'GET',
        url: $scope.api + "/get_page/?slug="+$scope.currentPage // derived from the rootScope
      }).
      success(function(data, status, headers, config) {

        $scope.page = data.page;
      }).
      error(function(data, status, headers, config) {
      });
          });

});

$( ".openSlideout" ).click(function(event) {

$( "#slideout_inner" ).toggleClass( "slideout_out" ).toggleClass("slideout_in");
$( ".openSlideout" ).toggleClass( "slideopen_out" ).toggleClass("slideopen_in");
});

$scope.sidePages = {"home": "home", "about": "about", "our-coffee": "our-coffee"};
$scope.currentPage = $scope.sidePages.home;

$.each($scope.sidePages, function(index, value) {
    $( ".menu-"+value ).click(function(event) {
    event.preventDefault();
    $scope.$apply(function(){
               $scope.currentPage = $scope.sidePages[value];
               $http({
        method: 'GET',
        url: $scope.api + "/get_page/?slug="+$scope.currentPage // derived from the rootScope
      }).
      success(function(data, status, headers, config) {

        $scope.page = data.page;
      }).
      error(function(data, status, headers, config) {
      });
          });
      $( "#slideout_inner" ).addClass( "slideout_out" ).removeClass("slideout_in");
      $( ".openSlideout" ).addClass( "slideopen_out" ).removeClass("slideopen_in");
    });
});

  // load posts from the WordPress API
}]);