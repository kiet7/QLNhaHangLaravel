@extends('../layout.masteradmin')

@section('content')

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
                      @foreach($nguyenlieu as $nl)
                              <tr>
                                <td>{{$nl->MaNguyenLieu}}</td>
                                <td>{{$nl->TenNguyenLieu}}</td>
                                <td>{{$nl->NgayNhap}}</td>
                                <td>{{$nl->SoLuong}}</td>
                                <td>{{$nl->DonViTinh}}</td>
                                <td>{{$nl->NgayHetHan}}</td>
                                <td>{{$nl->TinhTrang}}</td>
                                <td>{{$nl->MaMonAn}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary">Sửa</button>
                                    <button type="button" class="btn btn-primary">Xóa</button>
                                    <button type="button" class="btn btn-primary">Thanh Toán</button>
                                </td>
                                
                              </tr>
                      @endforeach
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
          </div>

@endsection