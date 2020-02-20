@extends('backend.layouts.app')

@section('content')

<h1>Work</h1>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Edit your works</div>
    <div class="card-body">
        <a href="" data-toggle="modal" data-target="#newWork" class="btn btn-primary mb-2">Add Work</a>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>url</th>
                <th>Github</th>
                <th>Show</th>
                <th>actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>url</th>
                <th>Github</th>
                <th>Show</th>
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
                        @if($work->show)
                        <td class="text-success">
                            <i class="far fa-check-circle"></i>
                        @else
                        <td class="text-danger">
                            <i class="far fa-times-circle"></i>
                            @endif
                        </td>
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
                    <h5 class="modal-title" id="modal">Edit {{ $work->name}}:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
            
                    <form action="{{ url('/admin/work/' . $work->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="{{ $work->name }}" id="name-{{ $work->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="url">url:</label>
                            <input type="text" name="url" value="{{ $work->url }}" id="url-{{ $work->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="github">Github:</label>
                            <input type="text" name="github" value="{{ $work->github }}" id="github-{{ $work->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="img">Image:</label>
                            <input type="file" id="img-{{ $work->id }}" name="img" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="description1">Description 1:</label>
                            <textarea name="description1" id="description1" cols="50" rows="6">{{ $work->description1 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description2">Description 2:</label>
                            <textarea name="description2" id="description1" cols="50" rows="6">{{ $work->description2 }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="assignment">Do you want to show?</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="show" id="showYes-{{ $work->id }}" value="1" {{ $work->show ? 'checked' : ''}}>
                                <label class="form-check-label" for="showYes">
                                    Yes.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="show" id="showNo-{{ $work->id }}" value="0" {{ !$work->show ? 'checked' : '' }}>
                                <label class="form-check-label" for="showNo">
                                    Nope.
                                </label>
                            </div>

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

<div class="modal fade" id="newWork" tabindex="-1" role="dialog" aria-labelledby="newWork" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal">New Work:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
    
            <form action="{{ url('/admin/addwork') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="url">url:</label>
                    <input type="text" name="url" placeholder="url" id="url" class="form-control">
                </div>
                <div class="form-group">
                    <label for="github">Github:</label>
                    <input type="text" name="github" placeholder="gith" id="github" class="form-control">
                </div>
                <div class="form-group">
                    <label for="img">Image:</label>
                    <input type="file" id="img" name="img" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="description1">Description 1:</label>
                    <textarea name="description1" id="description1" cols="50" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="description2">Description 2:</label>
                    <textarea name="description2" id="description1" cols="50" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="assignment">Do you want to show?</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="show" id="showYes" value="1">
                        <label class="form-check-label" for="showYes">
                            Yes.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="show" id="showNo" value="0">
                        <label class="form-check-label" for="showNo">
                            Nope.
                        </label>
                    </div>

                </div>
            </div>
            
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection