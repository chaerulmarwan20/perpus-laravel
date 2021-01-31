@extends('admin.templates.default')

@section('content')
  <div class="row">
    <div class="col-xs-3">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $author }}</h3>

          <p>Penulis</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="{{ route('admin.author.index') }}" class="small-box-footer">Lihat selengkapnya <i
            class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-xs-3">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $book }}</h3>

          <p>Buku</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="{{ route('admin.book.index') }}" class="small-box-footer">Lihat selengkapnya <i
            class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-xs-3">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $borrow_history }}</h3>

          <p>Peminjaman Buku</p>
        </div>
        <div class="icon">
          <i class="fa fa-archive"></i>
        </div>
        <a href="{{ route('admin.borrow.index') }}" class="small-box-footer">Lihat selengkapnya <i
            class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-xs-3">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $user }}</h3>

          <p>Pengguna</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="{{ route('admin.user.index') }}" class="small-box-footer">Lihat selengkapnya <i
            class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
@endsection
