@extends('../layout.masteradmin')

@section('content')
          <div ng-controller="KyGuiController">
            <div class="content-wrapper">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Hàng Ký Gửi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <button class="btn btn-info btn-lg" ng-click="modal('add')" type="button">
                    Thêm Ký Gửi
                </button>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Mã Gọi Món</th>
                  <th>Tên Khách Hàng</th>
                  <th>Tên Món</th>
                  <th>Ngày Gửi</th>
                  <th>Ngày Hết Hạn</th>
                  <th>Trạng Thái</th>
                  <th>Chức Năng</th>
                </tr>
                </thead>
                <tbody>

                <tr ng-repeat="kg in kyguis">
                  <td>%% $index + 1 | number %%</td>
                  <td>%%kg.MaGoiMon%%</td>
                  <td>%%kg.TenKhachHang%%</td>
                  <td>%%kg.TenMon%%</td>
                  <td>%%kg.NgayGui%%</td>
                  <td>%%kg.NgayHetHan%%</td>
                  <td ng-if="kg.TinhTrang == 1">Đang Còn</td>
                  <td ng-if="kg.TinhTrang == 0">Hết</td>
                  <td>
                    <button type="button" class="btn btn-primary">Trả Hàng</button>
                  </td>
                </tr>

                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>
             <!-- Modal -->
            <div class="modal fade" id="Modalkygui" role="dialog" tabindex="-1">
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
                            <form class="form-horizontal" name="frmKyGui">
                              <div class="form-group">
                                    <label class="col-sm-3 control-label" >
                                        Mã Gọi Món
                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="MaGoiMon" name="MaGoiMon" ng-model="kygui.MaGoiMon" ng-required="true" placeholder="Vui lòng nhập Mã Gọi Món" type="text"/>
                                        <span class="help-block" id="helpBlock2" ng-show="frmKyGui.MaGoiMon.$error.required">
                                            Vui lòng Mã Gọi Món
                                        </span>
                                    </div>
                                </div>
                              <div class="form-group">
                                    <label class="col-sm-3 control-label" >
                                        Tên Khách hàng
                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="TenKhachHang" name="TenKhachHang" ng-model="kygui.TenKhachHang" ng-required="true" placeholder="Vui lòng nhập tên Khách Hàng" type="text"/>
                                        <span class="help-block" id="helpBlock2" ng-show="frmKyGui.TenKhachHang.$error.required">
                                            Vui lòng nhập tên món ăn
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" >
                                        Tên Món Ăn
                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="TenMonAn" name="TenMonAn" ng-model="kygui.TenMonAn" ng-required="true" placeholder="Vui lòng nhập tên món ăn" type="text"/>
                                        <span class="help-block" id="helpBlock2" ng-show="frmKyGui.TenMonAn.$error.required">
                                            Vui lòng nhập tên món ăn
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" ng-click="save(state,kygui.MaKyGui)" ng-disabled="frmKyGui.$invalid" type="button">
                                Lưu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
@endsection