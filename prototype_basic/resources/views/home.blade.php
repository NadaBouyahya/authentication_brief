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

                    <table class="tabel table-hover table-borderless">
                        <thead>
                            <th scope="col">todo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>todo title</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
