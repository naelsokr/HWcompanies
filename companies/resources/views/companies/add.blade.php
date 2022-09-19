@extends('layouts.app')

@section('content')

<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add New Company
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('companies')}}" class="btn btn-success pull-right">All Companies</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    @if ($errors-> any())
                    
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">{{$error}}</div>
                        @endforeach

                    @endif
                    
                    <form class="form-horizontal" action="{{ url('add-company')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Company Name</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Company Name" class="form-control input-md" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Company Address</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Company Address" class="form-control input-md" name="address">
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
