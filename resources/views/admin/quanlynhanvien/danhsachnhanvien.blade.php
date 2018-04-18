@extends('../layout.masteradmin')

@section('content')
          <div class="content-wrapper">
             <!-- /.box -->
          <div class="box">
            <div class="box-header">
              
              <div class="float-lg-right">
                <button type="button" class="btn btn-primary">Thêm Nhân Viên</button>
                <input type="text" name="">
                <button type="button" class="btn btn-primary">Tìm Kiếm</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mã Nhân Viên</th>
                  <th>Tên Nhân Viên</th>
                  <th>Tên Đăng Nhập</th>
                  <th>Mật Khẩu</th>
                  <th>CMND</th>
                  <th>Ảnh</th>
                  <th>Ngày Vào Làm</th>
                  <th>Quyền</th>
                  <th>Chức Năng</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($nhanvien as $nv)
                           <tr>
                            <td>{{$nv->MaNhanVien}}</td>
                            <td>{{$nv->TenNhanVien}}</td>
                            <td>{{$nv->TenDangNhap}}</td>
                            <td>{{$nv->MatKhau}}</td>
                            <td>{{$nv->CMND}}</td>
                            <td>Ảnh</td>
                            <td>{{$nv->NgayVaoLam}}</td>
                            <td>{{$nv->quyen}}</td>
                            <td>
                              <button type="button" class="btn btn-primary">Chi Tiết Nhân Viên</button>
                              <button type="button" class="btn btn-primary">Tính Lương</button>
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