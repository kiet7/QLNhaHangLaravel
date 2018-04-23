app.controller('LoaiMonAnController', function($scope, $route, $http, API) {
    // Simple GET request example:
    var URL = API + '/quanlyloaimonan';
    var vm = function(URL) {
        var linkget = URL + '/getList';
        $http({
            method: 'GET',
            url: linkget,
        }).then(function successCallback(response) {
            $scope.loaimonans = response.data;
            console.log(response.data);
            // this callback will be called asynchronously
            // when the response is available
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
    }
    vm(URL);
    $scope.modal = function(state, MaLoai) {
        $scope.state = state;
        $scope.MaLoai = MaLoai;
        console.log($scope.loaimonan);
        switch (state) {
            case "add":
                $scope.frmTitle = "Thêm Loại Món Ăn";
                break;
                
            case "edit":
                $scope.frmTitle = "Sửa Loại Món Ăn";
                var url = URL + '/sualoaimonan/' + MaLoai;
                $http({
                    method: 'GET',
                    url: url,
                }).then(function successCallback(response) {
                    console.log(response);
                    $scope.loaimonan = response.data[0];
                    // this callback will be called asynchronously
                    // when the response is available
                }, function errorCallback(response) {
                    console.log(response);
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
                break;
            default:
                break;
        }
        $("#Modalloaimonan").modal('show');
    }
    $scope.save = function(state, MaLoai) {
        switch (state) {
            case "add":
                var dataMA = $.param($scope.loaimonan);
                var linkpost = URL + '/themloaimonan';
                $http({
                    method: 'POST',
                    url: linkpost,
                    data: dataMA,
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
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
                var dataMA = $.param($scope.loaimonan);
                var linkpost = URL + '/sualoaimonan/' + MaLoai;
                $http({
                    method: 'POST',
                    url: linkpost,
                    data: dataMA,
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
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
            default:
                break;
        }
    }
    $scope.ComfirmDelete = function(MaLoai) {
        var isConfirmDelete = confirm("Bạn Có Chắc Chắn Muốn Xóa ???");
        if (isConfirmDelete) {
            $http({
                method: 'GET',
                url: URL + '/xoaloaimonan/' + MaLoai
            }).then(function successCallback(response) {
                console.log(response);
                vm(URL);
                // this callback will be called asynchronously
                // when the response is available
            }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
            });
        } else {}
    }
});