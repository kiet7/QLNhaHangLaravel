app.controller('KyGuiController',function($scope,$route,$http,API){
		// Simple GET request example:
		var URL = API + '/quanlykygui';
		var vm = function(URL){
			var linkget = URL +'/getList';
		$http({
		  method: 'GET',
		  url: linkget,
		}).then(function successCallback(response) {
			$scope.kyguis = response.data;
			
			
			//console.log(response);
			console.log(response);
		    // this callback will be called asynchronously
		    // when the response is available
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		  });
		}

		vm(URL);

		$scope.modal = function(state,MaKyGui){
			//console.log("click them");
			$scope.state = state;
			$scope.MaKyGui = MaKyGui;
	      switch(state){
	         case "add":
	            $scope.frmTitle = "Thêm Ký Gửi";
	            break;
	         case "edit":
	            $scope.frmTitle = "Sửa Ký Gửi";
	  			 var url = URL + '/suakygui/' + MaKyGui;
				$http({
					method : 'GET',
					url : url,
				}).then(function successCallback(response) {
					console.log(response);
					$scope.nhanviens = response.data[0];

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
			$("#Modalkygui").modal('show');
		}
		
		$scope.save = function(state,MaKyGui){
			switch (state){
				case "add":
					console.log($scope.kyguis);
					var dataKG = $.param($scope.kyguis);
					var linkpost = URL + '/themkygui';
					$http({
						method : 'POST',
						url : linkpost,
						data : dataKG,
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
					var dataNV = $.param($scope.kyguis);
					var linkpost = URL + '/suakygui/' + MaKyGui;
					$http({
						method : 'POST',
						url : linkpost,
						data : dataNV,
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

		$scope.ComfirmDelete = function(MaKyGui)
		{
				var isConfirmDelete = confirm("Bạn Có Chắc Chắn Muốn Xóa ???");
				if (isConfirmDelete) {
					$http({
					  method: 'GET',
					  url: URL+'/xoakygui/'+MaKyGui
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