<?php $__env->startSection('content'); ?>
        <div ng-controller="NguyenLieuController">
          <div class="content-wrapper">
                          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-primary" ng-click="modal('add')">Thêm Nguyên Liệu</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mã Nguyên Liệu</th>
                  <th>Tên Nguyên Liệu</th>
                  <th>Ngày Nhập</th>
                  <th>Số Lượng</th>
                  <th>Đơn Vị Tính</th>
                  <th>Ngày Hết Hạn</th>
                  <th>Tình trạng</th>
                  <th>Mã Món Ăn</th>
                </tr>
                </thead>
                <tbody>

                              <tr ng-repeat="nl in nguyenlieu">
                                <td>%%nl.MaNguyenLieu%%</td>
                                <td>%%nl.TenNguyenLieu%%</td>
                                <td>%%nl.NgayNhap%%</td>
                                <td>%%nl.SoLuong%%</td>
                                <td>%%nl.DonViTinh%%</td>
                                <td>%%nl.NgayHetHan%%</td>
                                <td>%%nl.TinhTrang%%</td>
                                <td>%%nl.MaMonAn%%</td>
                                <td>
                                    <button type="button" class="btn btn-primary" ng-click="modal('edit',nl.MaNguyenLieu)">Sửa</button>
                                    <button type="button" class="btn btn-primary" ng-click="ComfirmDelete(nl.MaNguyenLieu)">Xóa</button>
                                    <button type="button" class="btn btn-primary">Thanh Toán</button>
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
        <div class="modal fade" id="Modalnguyenlieu" role="dialog" tabindex="-1">
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
                        <form class="form-horizontal" name="frmNguyenLieu">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" >
                                    Tên Nguyên Liệu
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="TenNguyenLieu" name="TenNguyenLieu" ng-model="nguyenlieus.TenNguyenLieu" ng-required="true" placeholder="Vui lòng nhập tên nguyên liệu" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNguyenLieu.TenNguyenLieu.$error.required">
                                        Vui lòng nhập tên Nguyên Liệu
                                    </span>
                                </div>
                                <label class="col-sm-3 control-label">
                                    Số Lượng
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="SoLuong" name="SoLuong" ng-model="nguyenlieus.SoLuong" ng-required="true" placeholder="Vui lòng nhập số lượng" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNguyenLieu.SoLuong.$error.required">
                                        Vui lòng nhập Số Lượng
                                    </span>
                                </div>
                                <label class="col-sm-3 control-label">
                                    Đơn Vị Tính
                                </label>
                                <div class="col-sm-9">
                                      <select class="form-control" id="DonViTinh" name="DonViTinh" ng-model="nguyenlieus.DonViTinh">
                                        <option>Chai</option>
                                        <option>Kilogam</option>
                                        <option>Gam</option>
                                        <option>Cái</option>
                                        <option>Chiếc</option>
                                      </select>
                                      <span class="help-block" id="helpBlock2" ng-show="!frmNguyenLieu.DonViTinh.$error.required">
                                        Vui lòng nhập Đơn Vị Tính
                                    </span>
                                </div>
                                <label class="col-sm-3 control-label" >
                                    Ngày Hết Hạn
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="NgayHetHan" name="NgayHetHan" ng-model="nguyenlieus.NgayHetHan" ng-required="true" placeholder="Vui lòng nhập ngày hết hạn" type="date"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNguyenLieu.NgayHetHan.$error.required">
                                        Vui lòng nhập Ngày Hết Hạn
                                    </span>
                                </div>
                                <label class="col-sm-3 control-label" >
                                    Tình Trạng
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="TinhTrang" name="TinhTrang" ng-model="nguyenlieus.TinhTrang" ng-required="true" placeholder="Vui lòng nhập tình trạng" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNguyenLieu.TinhTrang.$error.required">
                                        Vui lòng Chọn Tình Trạng
                                    </span>
                                </div>
                                <label class="col-sm-3 control-label">
                                      Mã Món Ăn
                                </label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="MaMonAn" name="MaMonAn" ng-model="nguyenlieus.MaMonAn" ng-required="true" placeholder="Vui lòng nhập tên loại món ăn" type="text"/>
                                    <span class="help-block" id="helpBlock2" ng-show="frmNguyenLieu.MaMonAn.$error.required">
                                        Vui lòng Chọn Mã Món Ăn
                                    </span>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" ng-click="save(state,nguyenlieus.MaNguyenLieu)" ng-disabled="frmNguyenLieu.$invalid" type="button">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout.masteradmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>