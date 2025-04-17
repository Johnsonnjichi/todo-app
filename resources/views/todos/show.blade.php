@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Todo Details</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $todo->title }}</h5>
            <p class="card-text">{{ $todo->description }}</p>
            <p class="card-text">
                Status: 
                @if($todo->completed)
                    <span class="badge bg-success">Completed</span>
                @else
                    <span class="badge bg-warning">Pending</span>
                @endif
            </p>
            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('todos.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection