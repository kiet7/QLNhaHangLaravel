<?php $__env->startSection('content'); ?>
          <div ng-controller="NhanVienController">
          <div class="content-wrapper">
             <!-- /.box -->
          <div class="box">
            <div class="box-header">

              <div class="float-lg-right">
                <button type="button" class="btn btn-primary" ng-click="modal('add')">Thêm Nhân Viên</button>
                <input type="text" name="">
                <button type="button" class="btn btn-primary">Tìm Kiếm</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mã Nhân Viên</th>
                  <th>Tên Nhân Viên</th>
                  <th>Tên Đăng Nhập</th>
                  <th>Mật Khẩu</th>
                  <th>CMND</th>
                  <th>Ảnh</th>
                  <th>Ngày Vào Làm</th>
                  <th>Quyền</th>
                  <th>Chức Năng</th>
                </tr>
                </thead>
                <tbody>

                           <tr ng-repeat="nvs in nhanviens">
                            <td>
                              %%nvs.MaNhanVien%%
                            </td>
                            <td>
                              %%nvs.TenNhanVien%%
                            </td>
                            <td>
                              %%nvs.TenDangNhap%%
                            </td>
                            <td>
                              %%nvs.MatKhau%%
                            </td>
                            <td>
                              %%nvs.CMND%%
                            </td>
                            <td>
                              Ảnh
                            </td>
                            <td>
                              %%nvs.NgayVaoLam%%
                            </td>
                            <td >
                              %%nvs.quyen%%
                            </td>
                            <td>

                              <button type="button" class="btn btn-primary">Chi Tiết Nhân Viên</button>
                              <button type="button" class="btn btn-primary">Tính Lương</button>
                              <button type="button" class="btn btn-primary" ng-click="ComfirmDelete(nvs.MaNhanVien)">Xóa</button>
                            </td>
                          </tr>

                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            <!-- Modal -->
        <div class="modal fade" id="Modalnhanvien" role="dialog" tabindex="-1">
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
                        <form class="form-horizontal" name="frmNhanVien">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" >
                                    Tên Nhân Viên
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="TenNhanVien" name="TenNhanVien" ng-model="nhanviena.TenNhanVien" ng-required="true" placeholder="Vui lòng nhập tên Nhân Viên" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNhanVien.TenNhanVien.$error.required">
                                        Vui lòng nhập tên Nhân Viên
                                    </span>
                                </div>
                                <label class="col-sm-3 control-label">
                                    Tên Đăng Nhập
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="TenDangNhap" name="TenDangNhap" ng-model="nhanviena.TenDangNhap" ng-required="true" placeholder="Vui lòng nhập Tên Đăng Nhập" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNhanVien.TenDangNhap.$error.required">
                                        Vui lòng nhập Tên Đăng Nhập
                                    </span>
                                </div>
                                <label class="col-sm-3 control-label">
                                    Mật Khẩu
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="MatKhau" name="MatKhau" ng-model="nhanviena.MatKhau" ng-required="true" placeholder="Vui lòng nhập Mật Khẩu" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNhanVien.MatKhau.$error.required">
                                        Vui lòng nhập Mật Khẩu
                                    </span>
                                </div>



                                <label class="col-sm-3 control-label" >
                                    Số Chứng Minh
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="CMND" name="CMND" ng-model="nhanviena.CMND" ng-required="true" placeholder="Vui lòng nhập chứng minh nhân dân" type="number"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNhanVien.CMND.$error.required">
                                        Vui lòng nhập Chứng minh nhân dân
                                    </span>
                                </div>
                                <label class="col-sm-3 control-label" >
                                    Ngày Vào Làm
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="NgayVaoLam" name="NgayVaoLam" ng-model="nhanviena.NgayVaoLam" ng-required="true" placeholder="Vui lòng nhập tình trạng" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNhanVien.NgayVaoLam.$error.required">
                                        Vui lòng Chọn Ngày Vào Làm
                                    </span>
                                </div>

                                


                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" ng-click="save(state,nhanviena.MaNhanVien)" ng-disabled="frmNhanVien.$invalid" type="button">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout.masteradmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>