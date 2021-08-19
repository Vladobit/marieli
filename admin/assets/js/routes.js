app.config(function($routeProvider) {
  $routeProvider
  .when("/index", {
    templateUrl : "index.html",
    controller :"loginCtrl"
  })  
  .when("/main", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "main.php",
    controller :"loginCtrl"
  })  
  .when("/chef", {
     templateUrl : "view/chef.html",
    controller :"myCtrl"
  })
  .when("/list_chef", {
    templateUrl : "view/list_chef.html",
    controller : "myCtrl"
  })
  .when("/contact", {
    templateUrl : "view/contact.html",
    controller : "myCtrl"
  })
  .when("/product", {
    templateUrl : "view/product.html",
    controller : "myCtrl"
  })
  .when("/product_list", {
    templateUrl : "view/product_list.html",
    controller : "myCtrl"
  })
  
//   .when("/details_prodazba", {
//     resolve:{
//       "check": function($http,$window){
//         var checkSession = [];
//         //get value from session
//         $http.get('model/checkSessionUser.php')
//         .then(function(response){
//           checkSession=response.data.records;
//           // if login ==false then show login  form
//           if (checkSession[0],loggIn == 'false')
//           {$window.location.href='index.html';}
//         });//end http.get
//       }
//     },
//     templateUrl : "view/details_prodazba.html",
//   controller : "myCtrl"
// })
});

