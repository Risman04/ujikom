@extends('layouts.main')

@section('judul')
Halaman Home
@endsection

@section('isi')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Selamat Datang, {{ $user->username }}</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="alert alert-success">
            Halo, Selamat Datang
        </div>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <a  href="?page=pengguna"> <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>Data Users</h4></div>
          
        </div>
        <div class="col-auto">
          <i class="fas fa-calendar fa-2x text-black-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <a  href="?page=supplier"> <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h4>Data Supplier</h4></div>
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
            
            </div>
            <div class="col">
             
            </div>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-clipboard-list fa-2x text-black-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <a  href="?page=gudang"> <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h4>Data Gudang</h4></div>
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
            
            </div>
            <div class="col">
             
            </div>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-clipboard-list fa-2x text-black-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>


 <!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <a  href="?page=barangmasuk"> <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h4>Barang Masuk</h4></div>
       
        </div>
        <div class="col-auto">
          <i class="fas fa-dollar-sign fa-2x text-black-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
         <a  href="?page=barangkeluar"> <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h4>Barang Keluar</h4></div>

        </div>
        <div class="col-auto">
          <i class="fas fa-comments fa-2x text-black-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
