@extends('../layout.masteradmin')

@section('content')
            <div class="content-wrapper">
                 <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Món Ăn</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Mã Món Ăn</th>
                  <th>Tên Món Ăn</th>
                  <th>Giá Tiền</th>
                  <th>Mã Loại Món Ăn</th>
                  <th>Chức Năng</th>
                </tr>
                </thead>
                <tbody>
                @foreach($monan as $ma)
                <tr>
                  <th>{{$ma->MaMonAn}}</th>
                  <th>{{$ma->TenMonAn}}</th>
                  <th>{{$ma->GiaTien}}</th>
                  <th>{{$ma->MaLoai}}</th>
                  <th>
                    <button type="button" class="btn btn-primary">Sửa</button>
                    <button type="button" class="btn btn-primary">Xóa</button>
                  </th>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
             
@endsection