<?php $__env->startSection('content'); ?>
        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Bàn
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php $__currentLoopData = $banan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3">
          <div class="card text-center" style="margin-top: 2rem;">
            <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title text-xs-center"><?php echo e($ba->TenBan); ?></h4>
              <p class="card-text"><?php echo e($ba->TinhTrang); ?></p>
              <a href="#" class="btn btn-primary">Gọi Món</a>
            </div>

          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout.masteradmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>