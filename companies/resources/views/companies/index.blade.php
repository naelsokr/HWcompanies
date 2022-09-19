@extends('layouts.app')

@section('content')

<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">All Companies</div>
                        <div class="col-md-6">
                            <a href=" {{ route('add-company') }} " class="btn btn-success pull-right">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Company Name</th>
                                <th>Address</th>
                                <th>Employees</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies  as $comp)
                                <tr>
                                    <td>{{$comp->id}}</td>
                                    <td>{{$comp->name}}</td>
                                    <td>{{$comp->address}}</td>
                                    <td>
                                        @foreach($emps as $e)
                                            <p>  {{ ($e->comp_id == $comp->id)? $e->vorname : "" }}  </p>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-company/'.$comp->id) }}" class="btn btn-danger">Delete</a>
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
