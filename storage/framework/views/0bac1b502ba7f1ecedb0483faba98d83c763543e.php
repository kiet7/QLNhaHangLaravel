<?php $__env->startSection('content'); ?>

          <div class="content-wrapper">
                          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-primary">Thêm Nguyên Liệu</button>
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
                      <?php $__currentLoopData = $nguyenlieu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($nl->MaNguyenLieu); ?></td>
                                <td><?php echo e($nl->TenNguyenLieu); ?></td>
                                <td><?php echo e($nl->NgayNhap); ?></td>
                                <td><?php echo e($nl->SoLuong); ?></td>
                                <td><?php echo e($nl->DonViTinh); ?></td>
                                <td><?php echo e($nl->NgayHetHan); ?></td>
                                <td><?php echo e($nl->TinhTrang); ?></td>
                                <td><?php echo e($nl->MaMonAn); ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary">Sửa</button>
                                    <button type="button" class="btn btn-primary">Xóa</button>
                                    <button type="button" class="btn btn-primary">Thanh Toán</button>
                                </td>
                                
                              </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
          </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout.masteradmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>