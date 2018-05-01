app.controller('NhanVienController',function($scope,$route,$http,API){
		// Simple GET request example:
		var URL = API + '/quanlynhanvien';
		var vm = function(URL){
			var linkget = URL +'/getList';
		$http({
		  method: 'GET',
		  url: linkget,
		}).then(function successCallback(response) {
			$scope.nhanviens = response.data;
			
			
			console.log(response.data);
		    // this callback will be called asynchronously
		    // when the response is available
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		  });
		}

		vm(URL);

		$scope.modal = function(state,MaNhanVien){
			console.log("click them");
			$scope.state = state;
			$scope.MaNhanVien = MaNhanVien;
	      switch(state){
	         case "add":
	            $scope.frmTitle = "Thêm Nhân Viên";
	            break;
	         case "edit":
	            $scope.frmTitle = "Sửa Nhân Viên";
	  			 var url = URL + '/suanhanvien/' + MaNhanVien;
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
			$("#Modalnhanvien").modal('show');
		}
		
		$scope.save = function(state,MaNhanVien){
			switch (state){
				case "add":
					console.log($scope.nhanviena);
					var dataNV = $.param($scope.nhanviena);
					var linkpost = URL + '/themnhanvien';
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
				case "edit":
					var dataNV = $.param($scope.nhanviena);
					var linkpost = URL + '/suanhanvien/' + MaNhanVien;
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

		$scope.ComfirmDelete = function(MaNhanVien)
		{
				var isConfirmDelete = confirm("Bạn Có Chắc Chắn Muốn Xóa ???");
				if (isConfirmDelete) {
					$http({
					  method: 'GET',
					  url: URL+'/xoanhanvien/'+MaNhanVien
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