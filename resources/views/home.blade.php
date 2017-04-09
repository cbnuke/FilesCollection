@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">List Storages</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($storages as $storage)
                                <tr>
                                    <td>{{$storage->name}}</td>
                                    <td>{{$storage->description}}</td>
                                    <td><a href="{{url('storage/'.$storage->id)}}"
                                           class="btn btn-xs btn-danger">delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">List Files</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($files as $file)
                                <tr>
                                    <td>{{$file->name}}</td>
                                    <td>{{$file->description}}</td>
                                    <td><a href="{{url('file/'.$file->id)}}"
                                           class="btn btn-xs btn-danger">delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Storage</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('storage') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Description</label>

                                <div class="col-md-8">
                                    <input id="description" type="text" class="form-control" name="description"
                                           value="{{ old('description') }}">

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="reset" class="btn btn-default">
                                        Clear
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Add new file</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('file') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Description</label>

                                <div class="col-md-8">
                                    <input id="description" type="text" class="form-control" name="description"
                                           value="{{ old('description') }}">

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('storages_id') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Storage</label>

                                <div class="col-md-8">
                                    <select name="storages_id" class="form-control">
                                        @foreach($items_storage as $item)
                                            @if($item->id==old('storages_id'))
                                                <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    @if ($errors->has('storages_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('storages_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="reset" class="btn btn-default">
                                        Clear
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
