@extends('layouts.app')

@section('content')

<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add New Employee
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('employees')}}" class="btn btn-success pull-right">All Employees</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    
                    @if ($errors-> any())
                    
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">{{$error}}</div>
                        @endforeach

                    @endif
                    
                    <form class="form-horizontal" action="{{ url('addEmployee')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Vorname</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Vorname" class="form-control input-md" name="vorname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Nachname</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Nachname" class="form-control input-md" name="nachname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Email</label>
                            <div class="col-md-4">
                                <input type="email" placeholder="Email" class="form-control input-md" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Company</label>
                            <div class="col-md-4">
                                <select class="form-control" name="company">
                                    @foreach ($companies  as $comps)
                                        <option value="{{$comps->id}}">{{$comps->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for=""></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
