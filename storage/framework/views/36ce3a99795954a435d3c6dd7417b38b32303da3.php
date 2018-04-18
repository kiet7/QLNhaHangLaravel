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
                  <th>Mã Khuyến Mãi</th>
                  <th>Tên Khuyến Mãi</th>
                  <th>Ảnh</th>
                  <th>Ngày Bắt Đầu</th>
                  <th>Ngày Kết Thúc</th>
                  <th>Phần Trăm</th>
                  <th>Chức Năng</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($km->MaKhuyenMai); ?></td>
                        <td><?php echo e($km->TenKhuyenMai); ?></td>
                        <td>Ảnh</td>
                        <td><?php echo e($km->NgayBatDau); ?></td>
                        <td><?php echo e($km->NgayKetThuc); ?></td>
                        <td><?php echo e($km->PhanTram); ?></td>
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