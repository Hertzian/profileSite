@extends('backend.layouts.app')

@section('content')

<h1>Jobs</h1>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-fw fa-chart-area"></i>
        Edit your Jobs</div>
    <div class="card-body">
        <a href="" data-toggle="modal" data-target="#newJob" class="btn btn-primary mb-2">Add Job</a>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>#</th>
                <th>Company</th>
                <th>Job</th>
                <th>Year</th>
                {{-- <th>Assignment</th> --}}
                <th>Show</th>
                <th>actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Company</th>
                <th>Job</th>
                <th>Year</th>
                {{-- <th>Assignment</th> --}}
                <th>Show</th>
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
                        <td>{{ $job->year }}</td>
                        {{-- <td>{{ $job->assignment }}</td> --}}

                        @if($job->show)
                        <td class="text-success">
                            <i class="far fa-check-circle"></i>
                        @else
                        <td class="text-danger">
                            <i class="far fa-times-circle"></i>
                            @endif
                        </td>
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
                    <h5 class="modal-title" id="modal">Edit {{ $job->company }}:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
            
                    <form action="{{ url('/admin/job/' . $job->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="company">Company:</label>
                            <input type="text" name="company" value="{{ $job->company }}" id="company-{{ $job->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="job">Job:</label>
                            <input type="text" name="job" value="{{ $job->job }}" id="job-{{ $job->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="year">Year:</label>
                            <input type="text" name="year" value="{{ $job->year }}" id="year-{{ $job->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="assignment">Assignment:</label>
                            <input type="text" name="assignment" value="{{ $job->assignment }}" id="assignment-{{ $job->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="assignment">Do you want to show?</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="show" id="showYes-{{ $job->id }}" value="1" {{ $job->show ? 'checked' : '' }}>
                                <label class="form-check-label" for="showYes">
                                  Yes.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="show" id="showNo-{{ $job->id }}" value="0" {{ !$job->show ? 'checked' : '' }}>
                                <label class="form-check-label" for="showNo">
                                  Nope.
                                </label>
                            </div>

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

<div class="modal fade" id="newJob" tabindex="-1" role="dialog" aria-labelledby="newJob" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal">Add Job:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
    
            <form action="{{ url('/admin/addjob') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="company">Company:</label>
                    <input type="text" name="company" placeholder="Job Company" id="company" class="form-control">
                </div>
                <div class="form-group">
                    <label for="job">Job:</label>
                    <input type="text" name="job" placeholder="Job" id="job" class="form-control">
                </div>
                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="text" name="year" placeholder="Year" id="year" class="form-control">
                </div>
                <div class="form-group">
                    <label for="assignment">Assignment:</label>
                    <input type="text" name="assignment" placeholder="Assignment" id="assignment" class="form-control">
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