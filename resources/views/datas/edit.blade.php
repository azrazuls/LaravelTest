@extends('datas.layout')
@section('content')
 
<div class="card">
  <div class="d-flex justify-content-between align-items-center">
    <h1>Edit Product</h1>

    <!-- Back Button -->
    <a href="{{ url()->previous() }}" class="btn btn-primary" style="margin-right: 1%">Back</a>
  </div>

  <div class="card-body">
      
      <form action="{{ url('data/' .$datas->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$datas->id}}" id="id" />
        <label>Name:</label></br>
        <input type="text" name="name" id="name" value="{{$datas->name}}" class="form-control"></br>
        <label>Price (RM):</label></br>
        <input type="text" name="price" id="price" value="{{$datas->price}}" class="form-control"></br>
        <label>Details:</label></br>
        <input type="text" name="details" id="mobile" value="{{$datas->details}}" class="form-control"></br>
        <label>Publish:</label><br>
        <label><input type="radio" name="publish" value="1" {{ $datas->publish == 1 ? 'checked' : '' }}> Yes</label><br>
        <label><input type="radio" name="publish" value="0" {{ $datas->publish == 0 ? 'checked' : '' }}> No</label><br><br>
        
        <input type="submit" value="Update and Submit" class="btn btn-success mx-auto d-block"></br>
    </form>
   
  </div>
</div>
 
@stop