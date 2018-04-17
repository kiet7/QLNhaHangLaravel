<?php $__env->startSection('content'); ?>
            <div class="content-wrapper">
                 <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Món Ăn</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                <?php $__currentLoopData = $monan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th><?php echo e($ma->MaMonAn); ?></th>
                  <th><?php echo e($ma->TenMonAn); ?></th>
                  <th><?php echo e($ma->GiaTien); ?></th>
                  <th><?php echo e($ma->MaLoai); ?></th>
                  <th>
                    <button type="button" class="btn btn-primary">Sửa</button>
                    <button type="button" class="btn btn-primary">Xóa</button>
                  </th>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
             
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout.masteradmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>