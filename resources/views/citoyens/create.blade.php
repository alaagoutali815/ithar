@extends('layouts.master')


@section('title')

        edit benevolat

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
        <form action="/register-create/" method="post">
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
        
      <div class="form-group row">
        <label for="RIB" class="col-md-4 col-form-label text-md-right">{{ __('RIB') }}</label>

        <div class="col-md-6">
            <input id="RIB" type="text" class="form-control @error('RIB') is-invalid @enderror" name="RIB" value="{{ old('RIB') }}" required autocomplete="RIB" autofocus>

            @error('RIB')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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