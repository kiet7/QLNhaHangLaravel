app.controller('MainController',function($scope,$route,$http,API){
		// Simple GET request example:
		var URL = API + '/maindata';
		var vm = function(URL){
			var linkget = URL;
			$http({
				method: 'GET',
				url: linkget,
			}).then(function successCallback(response) {
			//$scope.kyguis = response.data;
			
			
			//console.log(response);
			//console.log(response.data);
			console.log(response.data.dsgoimon);
			$scope.dulieu = response.data;
			$scope.dsgoimon = response.data.dsgoimon;
			
			//console.log($scope.goimon);
			//console.log(response.data['listnhanvien']);
			//console.log(response.data['listkygui']);
		    // this callback will be called asynchronously
		    // when the response is available
		}, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		});
		}

		vm(URL);

	}

	);