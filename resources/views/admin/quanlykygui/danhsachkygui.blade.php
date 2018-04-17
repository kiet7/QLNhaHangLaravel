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
                  @foreach($kygui as $kg)
                <tr>
                  <td>{{$kg->MaKyGui}}</td>
                  <td>{{$kg->MaGoiMon}}
                  </td>
                  <td>{{$kg->MaKhachHang}}</td>
                  <td>{{$kg->TenMon}}</td>
                  <td>{{$kg->created_at}}</td>
                  <td>{{$kg->NgayHetHan}}</td>
                  <td>{{$kg->TinhTrang}}</td>
                  <td>
                    <button type="button" class="btn btn-primary">Trả Hàng</button>
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