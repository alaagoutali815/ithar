@extends('layouts.master')


@section('title')

        Registred benevolats

@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registred benevolats</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                      user_id
                      </th>
                      <th>
                      dureeBenevolat
                      </th>
                      <th>
                      description
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                   
                    </thead>
                    <tbody>
                      @foreach ($benevolat as $row)
                          
                     
                      <tr>
                        <td>
                        {{  $row->user_id }}
                        </td>
                        <td>
                          {{  $row-> dureeBenevolat }}
                        </td>
                        <td>
                          {{  $row-> description}}
                        </td>
                        <td>
                        <a href="edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                        </td>
                         <td>
                           <form action="delete/{{ $row->id }}" method="post">
                            {{  csrf_field()  }}
                            {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>

@endsection

@section('scripts')


@endsection