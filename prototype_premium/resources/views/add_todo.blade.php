@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add todo</div>

                    <h5 class="card-header">
                        <a href="{{ route('todo.index') }}" class="btn btn-sm btn-outline-primary"> <i
                                class="fa fa-arrow-left"></i> Go back</a>
                    </h5>

                    <div class="card-body">
                        <form method="POST" action="{{ route('todo.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-form-label text-md-right">Title</label>

                                <input id="title" type="title"
                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{ old('email') }}" autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row mb-0 mt-4">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
