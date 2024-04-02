@extends('layouts.master')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Karyawan</h1>
</div>

<div class="row">
  @foreach ($employees as $employee)
  <div class="col-lg-3">
    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ $employee->name }}</h6>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Menu:</div>
            <a class="dropdown-item" href="#">Lihat Detail</a>
            <a class="dropdown-item" href="#">Edit Data</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Hapus Data</a>
          </div>
        </div>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src="img/undraw_profile_2.svg" alt="...">
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection