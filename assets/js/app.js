var app = angular.module('app', ['ngSanitize']);

app.run(['$rootScope', function($rootScope){
  // the following data is fetched from the JavaScript variables created by wp_localize_script(), and stored in the Angular rootScope
  $rootScope.dir = BlogInfo.url;
  $rootScope.site = BlogInfo.site;
  $rootScope.api = AppAPI.url;
}]);

app.controller('PageCtrl', ['$scope', '$http',"$sce", function($scope, $http, $sce) {
$scope.currentPage = "home";
$( ".welcomeText" ).click(function() {
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
  $( "#slideout_inner" ).toggleClass( "slideout_out" ).toggleClass("slideout_in");
});
  // load posts from the WordPress API
}]);