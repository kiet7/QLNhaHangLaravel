<?php $__env->startSection('content'); ?>
  <div ng-controller="MainController">
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>%%dulieu.listgoimon%%</h3>

              <p>Gọi Món Mới</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Doanh Thu</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>%% dulieu.listnhanvien %%</h3>

              <p>Nhân Viên</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>%% dulieu.listkygui %%</h3>

              <p>Ký Gửi</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">




          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Gọi Món Mới Nhất</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Bàn</th>
                    <th>Trạng Thái</th>
                    <th>Nhân Viên</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr ng-repeat="ds in dsgoimon">
                    <td><a href="pages/examples/invoice.html">%%ds.MaGoiMon%%</a></td>
                    <td>Bàn %%ds.MaBan%%</td>
                    <td><span class="label label-success">%%ds.TinhTrang%%</span></td>
                    <td>
                      <span class="label label-success">%%ds.TenNhanVien%%</span>
                    </td>
                  </tr>


                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
              <button onclick="SendRequest()">Click Me!!!</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Đặt Bàn Mới Nhất</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Mã Đặt Bàn</th>
                    <th>Bàn</th>
                    <th>Thời Gian</th>
                    <th>Khách Hàng</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr ng-repeat="ds in dsgoimon">
                    <td>%%ds.MaGoiMon%%</td>
                    <td>Bàn %%ds.MaBan%%</td>
                    <td><span class="label label-warning">%%ds.TinhTrang%%</span></td>
                    <td>
                      <span class="label label-danger">%%ds.TenNhanVien%%</span>
                    </td>
                  </tr>


                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">

              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>

            </div>
            <!-- /.box-footer -->
          </div>



        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">






          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout.masteradmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>