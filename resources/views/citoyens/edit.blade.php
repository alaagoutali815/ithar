@extends('layouts.master')


@section('title')

        edit benevolat

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
        <form action="/register-update/{{  $benevolat->id  }}" method="post">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
    <div class="form-group">
        <label class="control-label col-sm-2" for="user_id">User_id:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="user_id" placeholder="Enter User_id" name="user_id">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="dureeBenevolat">Duree Benevolat:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter Duree Benevolat" name="dureeBenevolat">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">Description:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
        </div>
      </div>
      
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div></div>
  </form>
</div>
</div>
</div>
  @section('scripts')
  @endsection