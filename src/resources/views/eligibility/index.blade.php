@extends('seat-busa-hr::user.layouts.view', [ 'viewname' => 'seat-busa-hr::notes' ])

@section('page_header', trans('seat-hr::user.title') . ': ' . trans('seat-hr::user.notes.title'))

@section('profile_content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ trans('seat-hr::user.notes.title') }}</h3>
            <a href="{{ route('seat-hr.profile.note.create', ['character' => $character]) }}" class="btn btn-sm btn-primary float-right">
                <i class="fas fa-plus"></i>
                Add
            </a>
        </div>
        <div class="card-text">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Severity</td>
                        <td>Note</td>
                        <td>Created By</td>
                        <td>Created At</td>
                        <td>Updated At</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
@stop