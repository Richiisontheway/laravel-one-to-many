@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        {{$project->title}}
                    </h1>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
