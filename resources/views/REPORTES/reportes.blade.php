@extends('layouts.app')
@section('content')

<br />
<br />
<h1 class="text-center">REPORTES</h1>

<div class="row">
    <div class="col-md-12">
      <div class="table-responsive">

        <table class="table table-hover table-dark table-bordered table-striped" align="center">
          <thead class="thead-dark">

            <tr>
              <th width="50px">ID</th>
              <th width="50px">OT</th>
              <th>DESCRIPCION</th>
              <th>ACCION</th>
            </tr>
          </thead>

          @foreach ($buscarReporte as $buscarReportes)
          <tr>
            <td>{{$buscarReportes->REP_COD}}</td>
            <td>{{$buscarReportes->REP_OT_ID}}</td>
            <td>{{$buscarReportes->REP_DES}}</td>
            <td width="50px"><a href="{{route('hojaReporte', $buscarReportes->REP_COD )}}"><button class="btn btn-lg btn-success">VER</button></a></td>
          </tr>
          @endforeach
        </table>
        {{ $buscarReporte->links('pagination::bootstrap-4') }}
      </div>
    </div>
</div>

@endsection
