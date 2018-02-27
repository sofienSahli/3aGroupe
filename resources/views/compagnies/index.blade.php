@extends('layouts.app')
@section('content')
<div class="card col-md-8 col-mg-8 offset-md-2" >
  <h5 class="card-title">List des Entreprises </h5>
  <div class="card-body">
    <div class="list-group">
      @foreach($compagnies as $compagny)
    <a href="/compagnie/{{$compagny->id}}">  <button type="button" class="list-group-item list-group-item-action"> {{$compagny->name}}</button></a>
      @endforeach
    </div>
</div>
</div>
@endsection
