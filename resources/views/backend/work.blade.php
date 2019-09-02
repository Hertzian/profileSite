@extends('backend.layouts.app')

@section('content')

<h1>Work</h1>

<!-- DataTables Example -->
<div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>url</th>
                    <th>Github</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>url</th>
                    <th>Github</th>
                    <th>actions</th>
                </tr>
                </tfoot>
                <tbody>
                
                @if (count($works) >= 1)
                    @foreach ($works as $work)
                        <tr>
                            <td>{{ $work->id }}</td>
                            <td>{{ $work->name }}</td>
                            <td>{{ $work->url }}</td>
                            <td>{{ $work->github }}</td>
                            <td><a href="#" data-toggle="modal" data-target="#modal{{ $work->id }}" class="btn btn-primary">Details</a></td>
                            
                        </tr>                        
                    @endforeach                    
                @endif
                
                
                
                </tbody>
            </table>
            </div>
        </div>
        <div class="card-footer small text-muted"> - </div>
    </div>
    
    {{-- Modals --}}
    @if (count($works) >= 1)
        @foreach ($works as $work)
            <div class="modal fade" id="modal{{ $work->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $work->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal">Edit this work:</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                
                        <form action="{{ url('/admin/work/' . $work->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" value="{{ $work->name }}" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="url">url:</label>
                                <input type="text" name="url" value="{{ $work->url }}" id="url" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="github">Github:</label>
                                <input type="text" name="github" value="{{ $work->github }}" id="github" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="img">Image:</label>
                                <input type="file" id="img" name="img" class="form-control-file">
                            </div>
                        </div>
                        
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    
        @endforeach
    @endif
    
    @endsection