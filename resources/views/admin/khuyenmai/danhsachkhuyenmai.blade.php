@extends('../layout.masteradmin')

@section('content')
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
                  @foreach($khuyenmai as $km)
                      <tr>
                        <td>{{$km->MaKhuyenMai}}</td>
                        <td>{{$km->TenKhuyenMai}}</td>
                        <td>Ảnh</td>
                        <td>{{$km->NgayBatDau}}</td>
                        <td>{{$km->NgayKetThuc}}</td>
                        <td>{{$km->PhanTram}}</td>
                        <td>
                          <button type="button" class="btn btn-primary">Sửa</button>
                          <button type="button" class="btn btn-primary">Xóa</button>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection