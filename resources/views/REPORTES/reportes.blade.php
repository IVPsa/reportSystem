@extends('layouts.app')
@section('content')

<br />
<br />
<h1 class="text-center">REPORTES</h1>

<div class="row">
    <div class="col-md-12">
      <div class="table-responsive">

        <table class="table table-bordered">
          <tr>
            <td width="50px">ID</td>
            <td>OT</td>
            <td>DESCRIPCION</td>
            <td>ACCION</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td width="50px"><a href="{{route('hojaReporte')}}"><button class="btn btn-lg btn-success">VER</button></a></td>
          </tr>
        </table>

      </div>
    </div>
</div>
<div style="height:350px;">

</div>

@endsection
