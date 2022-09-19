@extends('layouts.app')

@section('content')

<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">All Employees</div>
                        <div class="col-md-6">
                            <a href=" {{ route('add-employee') }} " class="btn btn-success pull-right">Add New</a>
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
                                <th>Vorname</th>
                                <th>Nachname</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees  as $emp)
                                <tr>
                                    <td>{{$emp->id}}</td>
                                    <td>{{$emp->vorname}}</td>
                                    <td>{{$emp->nachname}}</td>
                                    <td>{{$emp->email}}</td>
                                    <td>{{ $emp->company->name }}</td>
                                    <td>
                                        <a href="{{ url('delete-employee/'.$emp->id) }}" class="btn btn-danger">Delete</a>
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
