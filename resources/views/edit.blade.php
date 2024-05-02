@extends('layouts.app')

@section('title', 'Edit Task')

@section('style')
    <style>
        .error_message{
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title"> Title </label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
            @error('title')
            <p class="error_message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{ $task->description }}</textarea>
            @error('description')
            <p class="error_message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">long_Description</label>
            <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description }}</textarea>
            @error('long_description')
            <p class="error_message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Edit Task</button>
        </div>
    </form>
@endsection

