@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <h5 class="card-header">
                        <a href="{{ route('todo.create') }}" class="btn btn-sm btn-outline-primary">Add todo</a>
                    </h5>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-hover table-borderless">
                            <thead>
                                <th scope="col">Item</th>
                                <th scope="col">Paramateres</th>
                            </thead>
                            <tbody>
                                @foreach ($todos as $todo)
                                <tr>
                                        <td>{{ $todo->title }}</td>
                                        <td>
                                            <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-sm btn-outline-success">edit</a>
                                            <a href="{{route('todo.destroy', $todo->id)}}" class="btn btn-sm btn-outline-danger">delete</a>
    
                                        </td>
                                </tr>
                          
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
