var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http) {
  
//inicijalizacija
$scope.success=false;
$scope.error=false;

function postJSON(dataObject){
  $http({
    method:"post",
    url:'model/insert.php',
    data: dataObject,
    headers:{'Content-Type':'application/x-www-form-irlencoded'}
  });
}
$scope.translate_word=[];
$scope.translate = function(language){
  $http.get("translate/translate_"+language+".php")
  .then(function (response)
  {$scope.translate_word=response.data.records;});
}


/******************************************************************************/
/****************************      JSON       *********************************/
/******************************************************************************/

//show contact
$scope.contact = [];
$http.get("model/select.php?table_name=contact").then(function (response)
{$scope.contact = response.data.records});

//show chef
$scope.chef = [];
$http.get("model/select.php?table_name=chef").then(function (response)
{$scope.chef = response.data.records});

//show product
$scope.chef = [];
$http.get("model/select.php?table_name=product").then(function (response)
{$scope.chef = response.data.records});


/******************************************************************************/
/****************************    FUNCTION     *********************************/
/******************************************************************************/

// Delete od Form za site html -------
$scope.deleteRow=function(table_name,pk_value){
  var deleteJSON=[{"table_name":table_name,"pk_value":pk_value}];
  console.log(deleteJSON);
  $http({
    method:"post",
    url:'model/delete.php',
    data:deleteJSON,
    headers:{'Content-Type':'aplication/x-www-form-urlencoded'}
  })
}
//Insert Chef Form -----NAPRAVENO----------
$scope.details_chef_fun=function(full_name,cover_chef,description,facebook,linkedin,instagram)
{
         //alert("zdravo "+eu+""+marka_name+""+country+""+edb+""+adresa);
        // console.log("zdravo "+eu+""+marka_name+""+country+""+edb+""+adresa);
  var chefJSON=
  [
    {"full_name":full_name,"cover_chef":cover_chef,"description":description,"facebook":facebook,"linkedin":linkedin,"instagram":instagram,"table_name":"chef"}
  ]
  console.log(chefJSON);
  postJSON(chefJSON);
  $scope.error=false;
  $scope.success=true;   
}

// Insert Product Form -------
$scope.details_product_fun = function(product_name,product_description,product_categorie,product_action,product_time,product_weight,product_box,product_price,product_cover_1,product_cover_2,product_cover_3)
{ var productJSON= 
  [ 
    {"product_name":product_name,"product_description":product_description,"product_categorie":product_categorie,"product_action":product_action,"product_time":product_time,
    "product_weight":product_weight,"product_box" : product_box,"product_price":product_price,"product_cover_1":product_cover_1,"product_cover_2":product_cover_2,"product_cover_3":product_cover_3,"table_name":"product"} 
  ]
  console.log(productJSON);
  postJSON(productJSON);
  $scope.error=false;
  $scope.success=true;
}


//funkcija za Formi da vraka gresno popolneto-----
$scope.error_fun = function() //ne parametarska funkcija
{
  $scope.success=false;
  $scope.error=true;
}


// logout function 
$scope.logout_function=function(){
  $http({
  method:"post",
  url:'logout.php',
  })
  window.location="http://localhost/giftshop/admin/index.html"
}
});






// ================== vtor controler =================
app.controller('loginCtrl', function($scope,$http) {

  function postJSON(dataObject){
    $http({
      method:"post",
      url:'model/login_proc.php',
      data: dataObject,
      headers:{'Content-Type':'application/x-www-form-urlencoded'}
    }).then(function(response){
      //console.log("admin login")
     var checkSession = response.data.records;

     console.log("Admin login: "+checkSession[0].login_status);
     if(checkSession[0].login_status=="true"){
      // console.log("tuka");
       window.location="http://localhost/giftshop/admin/main.php";
     } if(checkSession[0].login_status !="true"){
       window.location="http://localhost/giftshop/admin/index.html"
     }
    });
  }
$scope.login_function = function(username,password){
  //alert(username+" - "+password);

  var administratorJSON =
  [{ "admin_username":username,
     "admin_password":password}];
    postJSON(administratorJSON);
}
});//controller login