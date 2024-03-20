@extends('layouts.master')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Jadwal Terkini</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Jadwal</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Jadwal Bulan {{ \Carbon\Carbon::now()->month(4)->translatedFormat('F') }} Tahun {{ now()->year }}</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th rowspan="3" class="text-center align-middle">Nama</th>
            <th colspan="{{ \Carbon\Carbon::now()->month(4)->daysInMonth }}" class="text-center">Hari / Tanggal</th>
          </tr>
          <tr>
            @for ($i = 1; $i < \Carbon\Carbon::now()->month(4)->daysInMonth + 1; $i++) @php $myDate=$i . '/4/2024' ; @endphp <th class="text-center text-vertical">
                {{ \Carbon\Carbon::createFromFormat("d/m/Y", $myDate)->translatedFormat("l") }}
              </th>
              @endfor
          </tr>
          <tr>
            @for ($i = 1; $i < \Carbon\Carbon::now()->month(4)->daysInMonth + 1; $i++) <th class="text-center">{{ $i }}</th>
              @endfor
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mustofa</td>
            @if (\Carbon\Carbon::now()->month(4)->daysInMonth == 31)
            @elseif (\Carbon\Carbon::now()->month(4)->daysInMonth == 30)
              @php
                $i=1;
              @endphp
              @while ($i < \Carbon\Carbon::now()->month(4)->daysInMonth + 1)
                <td class="text-center align-middle">S</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">P</td>
                @php
                  $i++;
                @endphp
                @if ($i == 28)
                  <td class="text-center align-middle">S</td>
                @else
                  <td class="text-center align-middle bg-danger text-white">L</td>
                @endif
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
              @endwhile
            @else
            @endif
          </tr>
          <tr>
            <td>Ulum</td>
            @if (\Carbon\Carbon::now()->month(4)->daysInMonth == 31)
            @elseif (\Carbon\Carbon::now()->month(4)->daysInMonth == 30)
              @php
                $i=1;
              @endphp
              @while ($i < \Carbon\Carbon::now()->month(4)->daysInMonth + 1)
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">S</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">P</td>
                @php
                  $i++;
                @endphp
                @if ($i == 29)
                  <td class="text-center align-middle">S</td>
                @else
                  <td class="text-center align-middle bg-danger text-white">L</td>
                @endif
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
              @endwhile
            @else
            @endif
          </tr>
          <tr>
            <td>Roni</td>
            @if (\Carbon\Carbon::now()->month(4)->daysInMonth == 31)
            @elseif (\Carbon\Carbon::now()->month(4)->daysInMonth == 30)
              @php
                $i=1;
              @endphp
              @while ($i < \Carbon\Carbon::now()->month(4)->daysInMonth + 1)
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">S</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">P</td>
                @php
                  $i++;
                @endphp
                @if ($i == 30)
                  <td class="text-center align-middle">S</td>
                @else
                  <td class="text-center align-middle bg-danger text-white">L</td>
                @endif
                @php
                  $i++;
                @endphp
              @endwhile
            @else
            @endif
          </tr>
          <tr>
            <td>Supri</td>
            @if (\Carbon\Carbon::now()->month(4)->daysInMonth == 31)
            @elseif (\Carbon\Carbon::now()->month(4)->daysInMonth == 30)
              @php
                $i=1;
              @endphp
              @while ($i < \Carbon\Carbon::now()->month(4)->daysInMonth + 1)
                @if ($i == 1)
                  <td class="text-center align-middle">S</td>
                @else
                  <td class="text-center align-middle bg-danger text-white">L</td>
                @endif
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">S</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">P</td>
                @php
                  $i++;
                @endphp
              @endwhile
            @else
            @endif
          </tr>
          <tr>
            <td>Eko</td>
            @if (\Carbon\Carbon::now()->month(4)->daysInMonth == 31)
            @elseif (\Carbon\Carbon::now()->month(4)->daysInMonth == 30)
              @php
                $i=1;
              @endphp
              @while ($i < \Carbon\Carbon::now()->month(4)->daysInMonth + 1)
                <td class="text-center align-middle">P</td>
                @php
                  $i++;
                @endphp
                @if ($i == 2)
                  <td class="text-center align-middle">S</td>
                @else
                  <td class="text-center align-middle bg-danger text-white">L</td>
                @endif
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">M</td>
                @php
                  $i++;
                @endphp
                <td class="text-center align-middle">S</td>
                @php
                  $i++;
                @endphp
              @endwhile
            @else
            @endif
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection