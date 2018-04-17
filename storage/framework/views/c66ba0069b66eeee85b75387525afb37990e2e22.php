<?php $__env->startSection('content'); ?>
            <div class="content-wrapper">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                  <?php $__currentLoopData = $kygui; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($kg->MaKyGui); ?></td>
                  <td><?php echo e($kg->MaGoiMon); ?>

                  </td>
                  <td><?php echo e($kg->MaKhachHang); ?></td>
                  <td><?php echo e($kg->TenMon); ?></td>
                  <td><?php echo e($kg->created_at); ?></td>
                  <td><?php echo e($kg->NgayHetHan); ?></td>
                  <td><?php echo e($kg->TinhTrang); ?></td>
                  <td>
                    <button type="button" class="btn btn-primary">Trả Hàng</button>
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