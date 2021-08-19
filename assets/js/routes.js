app.config(function($routeProvider) {
  $routeProvider

  .when("/index", {
    templateUrl : "index.html",
    controller :"myCtrl"
  })  
  .when("/shop", {
    templateUrl : "view/shop.html",
    controller :"myCtrl"
  })  
  .when("/shop_product", {
    templateUrl : "view/shop_product.html",
    controller :"myCtrl"
  }) 
  .when("/gallery", {
    templateUrl : "view/gallery.html",
    controller :"myCtrl"
  })
  .when("/blog", {
    templateUrl : "view/blog.html",
    controller :"myCtrl"
  })
  .when("/contactus", {
    templateUrl : "view/contactus.html",
    controller :"myCtrl"
  })
  .when("/wwoffer", {
    templateUrl : "view/wwoffer.html",
    controller :"myCtrl"
  })
  .when("/team", {
    templateUrl : "view/team.html",
    controller :"myCtrl"
  })
  .when("/blogpost", {
    templateUrl : "view/blogpost.html",
    controller :"myCtrl"
  })
  .when("/main", {
    templateUrl : "view/main.html",
    controller :"myCtrl"
  })
  .otherwise("/main", {
    templateUrl : "view/main.html",
    controller : "myCtrl"
  })
});

// app.config(function($routeProvider) {
//   $routeProvider
//   .when("/white", {
//     templateUrl : "white.htm",
//    })
//   .when("/red", {
//     templateUrl : "red.htm"
//    })
//   .when("/green", {
//     templateUrl : "green.htm"
//   })
//   .when("/blue", {
//     templateUrl : "blue.htm"
//   });
// });