@extends('../layout.masteradmin')

@section('content')
<div ng-controller="MonAnController">
    <div class="content-wrapper">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title text-xs-center">
                    Danh Sách Món Ăn
                </h3>
                <div class="pull-right">
                    <input type="text" placeholder="Nhập Tên Món Ăn"  ng-model="tenmonan">
                </div>



            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <button class="btn btn-info btn-lg" ng-click="modal('add')" type="button">
                    Thêm Món Ăn
                </button>
                <select name="MaLoai" id="search" ng-model="search.MaLoai">
                    <option ng-repeat="y in loaimonans" selected="%%y.MaLoai%%" value="%%y.MaLoai%%" >
                        %%y.TenLoai%%
                    </option>
                </select>
                <button type="button" class="btn btn-primary" ng-click="Loc()">Lọc</button>
                <table class="table table-bordered table-striped" id="example1">
                    <thead>
                        <tr>
                            <th>
                               STT
                            </th>
                            <th>
                                Tên Món Ăn
                            </th>
                            <th>
                                Giá Tiền
                            </th>
                            <th>
                                Mã Loại Món Ăn
                            </th>
                            <th>
                                Chức Năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-init="start = 0" ng-repeat="ma in monans|filter:tenmonan">
                            <th>
                                %% $index + 1 | number %%
                            </th>
                            <th>
                                %% ma.TenMonAn %%
                            </th>
                            <th>
                                %% ma.GiaTien %%
                            </th>
                            <th>
                                %% ma.loaimonan.TenLoai %%
                            </th>
                            <th>
                                <button class="btn btn-primary" ng-click="modal('edit',ma.MaMonAn)" type="button">
                                    Sửa
                                </button>
                                <button class="btn btn-primary" ng-click="ComfirmDelete(ma.MaMonAn)" type="button">
                                    Xóa
                                </button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="Modalmonan" role="dialog" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal" type="button">
                                ×
                            </button>
                            <h4 class="modal-title">
                                %%frmTitle%%
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" name="frmMonAn">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" >
                                        Tên Món Ăn
                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="TenMonAn" name="TenMonAn" ng-model="monan.TenMonAn" ng-required="true" placeholder="Vui lòng nhập tên món ăn" type="text"/>
                                        <span class="help-block" id="helpBlock2" ng-show="frmMonAn.TenMonAn.$error.required">
                                            Vui lòng nhập tên món ăn
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" >
                                        Giá Tiền
                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="GiaTien" name="GiaTien" ng-model="monan.GiaTien" ng-required="true" placeholder="Vui lòng nhập giá tiền" type="text">
                                            <span class="help-block" id="helpBlock2" ng-show="frmMonAn.GiaTien.$error.required">
                                                Vui lòng nhập giá tiền
                                            </span>
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" >
                                        Mã Loại Món Ăn
                                    </label>
                                    <div class="col-sm-9">
                                        <select name="MaLoai" ng-model="monan.MaLoai">
                                            <option ng-repeat="x in loaimonans" selected="%%x.MaLoai%%" value="%%x.MaLoai%%" >
                                                %%x.TenLoai%%
                                            </option>
                                        </select>

                                        <span class="help-block" id="helpBlock2" ng-show="frmMonAn.MaLoai.$error.required">
                                            Vui lòng nhập mã loại món ăn
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" ng-click="save(state,monan.MaMonAn)" ng-disabled="frmMonAn.$invalid" type="button">
                                Lưu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.modal-content -->
<!-- /.modal-dialog -->
<!-- /.modal -->
<!-- /.box-body -->
<!-- /.box -->
@endsection
