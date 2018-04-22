var app = angular.module('myApp',['ngRoute']).constant('API', 'http://localhost:8080/QLNhaHang/public/admin');
	
	app.config(function($interpolateProvider) {
	    $interpolateProvider.startSymbol('%%');
	    $interpolateProvider.endSymbol('%%');
	  });
	app.controller('MonAnController',function($scope,$route,$http,API){
		// Simple GET request example:
		var URL = API + '/quanlymonan';
		var vm = function(URL){
			var linkget = URL +'/getList';
		$http({
		  method: 'GET',
		  url: linkget,
		}).then(function successCallback(response) {
			$scope.monans = response.data;
		    // this callback will be called asynchronously
		    // when the response is available
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		  });
		}
		vm(URL);

		

		$scope.modal = function(state,MaMonAn){
			$scope.state = state;
			$scope.MaMonAn = MaMonAn;
	      switch(state){
	         case "add":
	            $scope.frmTitle = "Thêm Món Ăn";
	            break;
	         case "edit":
	            $scope.frmTitle = "Sửa Món Ăn";
	  			 var url = URL + '/suamonan/' + MaMonAn;
				$http({
					method : 'GET',
					url : url,
				}).then(function successCallback(response) {
					console.log(response);
					$scope.monan = response.data[0];

			    // this callback will be called asynchronously
			    // when the response is available
				  }, function errorCallback(response) {
				  	console.log(response);
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				  });
				
	            break;
	         default :

	         	break;
	      }
			$("#Modalmonan").modal('show');
		}
		
		$scope.save = function(state,MaMonAn){
			switch (state){
				case "add":
					var dataMA = $.param($scope.monan);
					var linkpost = URL + '/themmonan';
					$http({
						method : 'POST',
						url : linkpost,
						data : dataMA,
						headers : {'Content-Type' : 'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						console.log(response);
						vm(URL);

				    // this callback will be called asynchronously
				    // when the response is available
					  }, function errorCallback(response) {
					  	console.log(response);
					    // called asynchronously if an error occurs
					    // or server returns response with an error status.
					  });
					break;
				case "edit":
					var dataMA = $.param($scope.monan);
					var linkpost = URL + '/suamonan/' + MaMonAn;
					$http({
						method : 'POST',
						url : linkpost,
						data : dataMA,
						headers : {'Content-Type' : 'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						console.log(response);
						vm(URL);

				    // this callback will be called asynchronously
				    // when the response is available
					  }, function errorCallback(response) {
					  	console.log(response);
					    // called asynchronously if an error occurs
					    // or server returns response with an error status.
					  });
					break;
				default :
					break;

			}

			
			}

		$scope.ComfirmDelete = function(MaMonAn)
		{
				var isConfirmDelete = confirm("Bạn Có Chắc Chắn Muốn Xóa ???");
				if (isConfirmDelete) {
					$http({
					  method: 'GET',
					  url: URL+'/xoamonan/'+MaMonAn
					}).then(function successCallback(response) {
						console.log(response);
						vm(URL);
					    // this callback will be called asynchronously
					    // when the response is available
					  }, function errorCallback(response) {
					    // called asynchronously if an error occurs
					    // or server returns response with an error status.
					  });
					}
				else{

				}
			
			
		}
	}
		
);