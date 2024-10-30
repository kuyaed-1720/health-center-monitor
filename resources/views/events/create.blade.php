@extends('layouts.app')
@section('title', 'Calendar')
@section('content')
    <h1>Create Event</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="start">Start Date and Time:</label>
            <input type="datetime-local" id="start" name="start" value="{{ old('start') }}">
        </div>
        <div>
            <label for="end">End Date and Time:</label>
            <input type="datetime-local" id="end" name="end" value="{{ old('end') }}">
        </div>
        <button type="submit">Create Event</button>
    </form>
	@endsection
