@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Tutti i Project
                    </h1>
                    <br>
                </div>
                
                    <table class="table">
                        <div class="mb-4">
                            <a href="{{ route('admin.projects.create') }}" class="btn btn-success w-100 fs-5">
                                + Aggiungi
                            </a>
                        </div>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Date</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->date}}</td>
                                    <td>
                                        <a href="{{ route('admin.projects.show' , ['project' => $item->slug]) }}" class="btn btn-primary">
                                            Show
                                        </a>
                                        <a href="{{route('admin.projects.edit' , ['project' => $item->id])}}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
@endsection
