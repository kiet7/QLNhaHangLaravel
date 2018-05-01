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
                  <th>Mã Ký Gửi</th>
                  <th>Mã Gọi Món</th>
                  <th>Mã Khách Hàng</th>
                  <th>Tên Món</th>
                  <th>Ngày Gửi</th>
                  <th>Ngày Hết Hạn</th>
                  <th>Tình Trạng</th>
                  <th>Chức Năng</th>
                </tr>
                </thead>
                <tbody>

                <tr ng-repeat="kg in kyguis">
                  <td>%%kg.MaKyGui%%</td>
                  <td>%%kg.MaGoiMon%%
                  </td>
                  <td>%%kg.MaKhachHang%%</td>
                  <td>%%kg.TenMon%%</td>
                  <td>%%kg.created_at%%</td>
                  <td>%%kg.NgayHetHan%%</td>
                  <td>%%kg.TinhTrang%%</td>
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
                                        Tên Món Ăn
                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="TenMonAn" name="TenMonAn" ng-model="monan.TenMonAn" ng-required="true" placeholder="Vui lòng nhập tên món ăn" type="text"/>
                                        <span class="help-block" id="helpBlock2" ng-show="frmKyGui.TenMonAn.$error.required">
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
                                            <span class="help-block" id="helpBlock2" ng-show="frmKyGui.GiaTien.$error.required">
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

                                        <span class="help-block" id="helpBlock2" ng-show="frmKyGui.MaLoai.$error.required">
                                            Vui lòng nhập mã loại món ăn
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" ng-click="save(state,monan.MaMonAn)" ng-disabled="frmKyGui.$invalid" type="button">
                                Lưu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
@endsection