@extends('../layout.masteradmin')

@section('content')

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
                  @foreach($loaimonan as $lma)
                <tr>
                  <td>{{$lma->MaLoai}}</td>
                  <td>{{$lma->TenLoai}}
                  </td>
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