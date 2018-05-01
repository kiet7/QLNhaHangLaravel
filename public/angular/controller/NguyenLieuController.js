app.controller('NguyenLieuController',function($scope,$route,$http,API){
		// Simple GET request example:
		var URL = API + '/quanlynguyenlieu';
		var vm = function(URL){
			var linkget = URL +'/getList';
		$http({
		  method: 'GET',
		  url: linkget,
		}).then(function successCallback(response) {
			$scope.nguyenlieu = response.data;
			//$scope.loaimonans = response.data[1];
			//console.log(response.data);
			//console.log(response.data[1]);
		    // this callback will be called asynchronously
		    // when the response is available
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		  });
		}
		vm(URL);
		
		$scope.modal = function(state,MaNguyenLieu){
			$scope.state = state;
			$scope.MaNguyenLieu = MaNguyenLieu;
	      switch(state){
	         case "add":
	            $scope.frmTitle = "Thêm Nguyên Liệu";
	            break;
	         case "edit":
	            $scope.frmTitle = "Sửa Nguyên Liệu";
	  			 var url = URL + '/suanguyenlieu/' + MaNguyenLieu;
				$http({
					method : 'GET',
					url : url,
				}).then(function successCallback(response) {
					console.log(response);
					$scope.nguyenlieus = response.data[0];

			    // this callback will be called asynchronously
			    // when the response is available
				  }, function errorCallback(response) {
				  	//console.log(response);
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				  });
				
	            break;
	         default :

	         	break;
	      }
			$("#Modalnguyenlieu").modal('show');
		}
		
		$scope.save = function(state,MaNguyenLieu){
			switch (state){
				case "add":
					var dataNL = $.param($scope.nguyenlieus);
					console.log($scope.nguyenlieus);
					var linkpost = URL + '/themnguyenlieu';
					$http({
							method : 'POST',
							url : linkpost,
							data : dataNL,
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
					var dataNL = $.param($scope.nguyenlieus);
					var linkpost = URL + '/suanguyenlieu/' + MaNguyenLieu;
					$http({
						method : 'POST',
						url : linkpost,
						data : dataNL,
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

		$scope.ComfirmDelete = function(MaNguyenLieu)
		{
				var isConfirmDelete = confirm("Bạn Có Chắc Chắn Muốn Xóa ???");
				if (isConfirmDelete) {
					$http({
					  method: 'GET',
					  url: URL+'/xoanguyenlieu/'+MaNguyenLieu
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