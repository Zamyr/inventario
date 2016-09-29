@extends('layouts.layout')

@section('content')

<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3>{{count($pr)}}</h3>

      <p>Productos</p>
    </div>
    <div class="icon">
      <i class="ion ion-document-text"></i>
    </div>
    <a href="{{url('productos')}}" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
@endsection