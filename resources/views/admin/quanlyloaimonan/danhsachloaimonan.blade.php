@extends('../layout.masteradmin')

@section('content')
<div ng-controller="LoaiMonAnController">
    <div class="content-wrapper">
        <!-- /.box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    Danh Sách Loại Món Ăn
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <button class="btn btn-primary" ng-click="modal('add',lma.MaLoai)" type="button">
                    Thêm Mới
                </button>
                <table class="table table-bordered table-striped" id="example1">
                    <thead>
                        <tr>
                            <th>
                                Mã Loại Món Ăn
                            </th>
                            <th>
                                Tên Loại Món Ăn
                            </th>
                            <th>
                                Thời gian tạo
                            </th>
                            <th>
                                Thời gian cập nhật
                            </th>
                            <th>
                                Chức Năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="lma in loaimonans">
                            <td>
                                %%lma.MaLoai%%
                            </td>
                            <td>
                                %%lma.TenLoai%%
                            </td>
                            <td>
                                %%lma.created_at%%
                            </td>
                            <td>
                                %%lma.updated_at%%
                            </td>
                            <td>
                                <button class="btn btn-primary" ng-click="modal('edit',lma.MaLoai)" type="button">
                                    Sửa
                                </button>
                                <button class="btn btn-primary" ng-click="ComfirmDelete(lma.MaLoai)" type="button">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- Modal -->
        <div class="modal fade" id="Modalloaimonan" role="dialog" tabindex="-1">
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
                        <form class="form-horizontal" name="frmLoaiMonAn">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="inputEmail3">
                                    Tên Loại Món Ăn
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="TenLoai" name="TenLoai" ng-model="loaimonan.TenLoai" ng-required="true" placeholder="Vui lòng nhập tên loại món ăn" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmLoaiMonAn.TenMonAn.$error.required">
                                        Vui lòng nhập tên loại món ăn
                                    </span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" ng-click="save(state,loaimonan.MaLoai)" ng-disabled="frmLoaiMonAn.$invalid" type="button">
                                    Lưu
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</div>
{{-- end ng-controler --}}

@endsection
