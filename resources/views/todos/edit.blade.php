@extends('layouts.app')

@section('content')

<h1 class="text-center my-5">Edit Todo</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create new todo
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="todo_id" value="{{ $todo->id }}"> --}}
                    <div class="form-group">
                    <input type="text" value="{{ $todo->name }}" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Description" rows="5" cols="5">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Update Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
