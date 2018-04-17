@extends('../layout.masteradmin')

@section('content')
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

        @foreach($banan as $ba)
            <div class="col-sm-3">
          <div class="card" style="margin-top: 2rem;">
            <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title text-xs-center">{{$ba->tenban}}</h4>
              <p class="card-text">{{$ba->tinhtrang}}</p>
              <a href="#" class="btn btn-primary">Gọi Món</a>
            </div>

          </div>
        </div>
        @endforeach
    </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection