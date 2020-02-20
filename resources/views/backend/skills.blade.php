@extends('backend.layouts.app')

@section('content')

<h1>Skills</h1>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Edit your skills</div>
    <div class="card-body">
        <a href="" data-toggle="modal" data-target="#addSkill" class="btn btn-primary mb-2">Add Skill</a>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Value</th>
                <th>Show</th>
                <th>actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Value</th>
                <th>Show</th>
                <th>actions</th>
            </tr>
            </tfoot>
            <tbody>
            
            @if (count($skills) >= 1)
                @foreach ($skills as $skill)
                    <tr>
                        <td>{{ $skill->id }}</td>
                        <td>{{ $skill->name }}</td>
                        <td>{{ $skill->value }}</td>
                        @if($skill->show)
                        <td class="text-success">
                            <i class="far fa-check-circle"></i>
                        @else
                        <td class="text-danger">
                            <i class="far fa-times-circle"></i>
                            @endif
                        </td>
                        <td><a href="#" data-toggle="modal" data-target="#modal{{ $skill->id }}" class="btn btn-primary">Details</a></td>
                        
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
@if (count($skills) >= 1)
    @foreach ($skills as $skill)
        <div class="modal fade" id="modal{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $skill->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">Edit {{ $skill->name}}:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
            
                    <form action="{{ url('/admin/skill/' . $skill->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="{{ $skill->name }}" id="name-{{ $skill->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="value">value:</label>
                            <input type="text" name="value" value="{{ $skill->value }}" id="value-{{ $skill->id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="assignment">Do you want to show?</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="show" id="showYes-{{ $skill->id }}" value="1" {{ $skill->show ? 'checked' : ''}}>
                                <label class="form-check-label" for="showYes">
                                    Yes.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="show" id="showNo-{{ $skill->id }}" value="0" {{ !$skill->show ? 'checked' : '' }}>
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

<div class="modal fade" id="addSkill" tabindex="-1" role="dialog" aria-labelledby="addSkill" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal">Add Skill:</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
    
            <form action="{{ url('/admin/addskill') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="value">value:</label>
                    <input type="text" name="value" placeholder="Value" id="value" class="form-control">
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