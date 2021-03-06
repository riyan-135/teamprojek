@extends('admin.layout.master')
@section('tittle', 'sidebar')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Simple Tables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data APD</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bordered Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Lama kerja</th>
                    <th>Gaji</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Data as $muncul)
                  <tr>
                    @for ($i = 0; $i <count($muncul); $i++)    
                    @if ($i<0)
                      <td>{{ $muncul[$i] }}</td> 
                    @continue 
                    @endif
                    @if ($muncul[3] <= 5)
                      <td class="bg bg-success">{{ $muncul[$i]  }}</td>
                    @continue
                    @endif
                     <td class="bg bg-danger">{{ $muncul[$i]  }}</td>
                    @endfor
                      
                  </tr>                
                  @endforeach
                </tbody>
              </table>
            </div>
            {{-- //table kedua --}}
          
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bordered Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Lama kerja</th>
                    <th>Gaji</th>
                    <th>THR</th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                   <td></td>
                 </tr>
                </tbody>
              </table>
            </div>
            {{-- //table kedua --}}
          
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

  @endsection