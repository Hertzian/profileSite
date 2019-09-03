@extends('backend.layouts.app')

@section('content')

<h1>Jobs</h1>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-fw fa-chart-area"></i>
        Edit your Jobs</div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>#</th>
                <th>Company</th>
                <th>Job</th>
                <th>Assignment</th>
                <th>actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Company</th>
                <th>Job</th>
                <th>Assignment</th>
                <th>actions</th>
            </tr>
            </tfoot>
            <tbody>
            
            @if (count($jobs) >= 1)
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ $job->company }}</td>
                        <td>{{ $job->job }}</td>
                        <td>{{ $job->assignment }}</td>
                        <td><a href="#" data-toggle="modal" data-target="#modal{{ $job->id }}" class="btn btn-primary">Details</a></td>
                        
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
@if (count($jobs) >= 1)
    @foreach ($jobs as $job)
        <div class="modal fade" id="modal{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $job->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Edit this job:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
            
                    <form action="{{ url('/admin/job/' . $job->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="company">Company:</label>
                            <input type="text" name="company" value="{{ $job->company }}" id="company" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="job">Job:</label>
                            <input type="text" name="job" value="{{ $job->job }}" id="job" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="assignment">Assignment:</label>
                            <input type="text" name="assignment" value="{{ $job->assignment }}" id="assignment" class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label for="show">show:</label>
                            <input type="text" name="show" value="" id="show" class="form-control">
                        </div> --}}
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