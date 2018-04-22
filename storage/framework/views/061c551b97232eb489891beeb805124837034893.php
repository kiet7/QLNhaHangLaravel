<?php $__env->startSection('content'); ?>
<div ng-controller="MonAnController">
        <div class="content-wrapper" >
                 <!-- /.box -->

          <div class="box">
            <div class="box-header">

              <h3 class="box-title text-xs-center">Danh Sách Món Ăn</h3>
             


            </div>
            <!-- /.box-header -->
            <div class="box-body" >
              <button type="button" class="btn btn-info btn-lg" ng-click="modal('add')">Thêm Món Ăn</button>
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mã Món Ăn</th>
                  <th>Tên Món Ăn</th>
                  <th>Giá Tiền</th>
                  <th>Mã Loại Món Ăn</th>
                  <th>Chức Năng</th>
                </tr>
                </thead>
                <tbody>
                
                <tr ng-repeat="ma in monans">
                  <th>%% ma.MaMonAn %%</th>
                  <th>%% ma.TenMonAn %%</th>
                  <th>%% ma.GiaTien %%</th>
                  <th>%% ma.MaLoai %%</th>
                  <th>
                    <button type="button" class="btn btn-primary" ng-click="modal('edit',ma.MaMonAn)">Sửa</button>
                    <button type="button" class="btn btn-primary" ng-click="ComfirmDelete(ma.MaMonAn)">Xóa</button>
                  </th>
                </tr>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
            <!-- Modal -->
            <!-- Modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="Modalmonan">
              <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">%%frmTitle%%</h4>
                </div>
                <div class="modal-body">
                <form name="frmMonAn" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tên Món Ăn</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="TenMonAn" name="TenMonAn" placeholder="Vui lòng nhập tên món ăn" ng-model="monan.TenMonAn" ng-required="true" />
                      <span id="helpBlock2" class="help-block" ng-show="frmMonAn.TenMonAn.$error.required">Vui lòng nhập tên món ăn</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Giá Tiền</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="GiaTien" name="GiaTien" placeholder="Vui lòng nhập giá tiền" ng-model="monan.GiaTien" ng-required="true" >
                      <span id="helpBlock2" class="help-block" ng-show="frmMonAn.GiaTien.$error.required">Vui lòng nhập giá tiền</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Mã Loại Món Ăn</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="MaLoai" name="MaLoai" placeholder="Vui lòng nhập mã loại món ăn" ng-model="monan.MaLoai" ng-required="true" />
                      <span id="helpBlock2" class="help-block" ng-show="frmMonAn.MaLoai.$error.required">Vui lòng nhập mã loại món ăn</span>
                    </div>
                  </div>
                </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" ng-disabled="frmMonAn.$invalid" ng-click="save(state,monan.MaMonAn)">Lưu</button>
                </div>
              </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- Modal -->
</div>         
             
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout.masteradmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>