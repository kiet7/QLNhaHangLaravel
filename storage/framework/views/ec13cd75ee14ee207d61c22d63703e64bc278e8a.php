<?php $__env->startSection('content'); ?>

            <div class="content-wrapper">
                   <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Loại Món Ăn</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mã Loại Món Ăn</th>
                  <th>Tên Loại Món Ăn</th>
                  <th>Chức Năng</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $loaimonan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($lma->MaLoai); ?></td>
                  <td><?php echo e($lma->TenLoai); ?>

                  </td>
                  <td>
                    <button type="button" class="btn btn-primary">Sửa</button>
                    <button type="button" class="btn btn-primary">Xóa</button>
                  </td>
                 
                </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>
             
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout.masteradmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>