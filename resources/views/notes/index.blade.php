@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>My notes list </h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('notes.create') }}"> Create New Note</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-dark table-striped">
    <tr>
        <th>Title</th>
        <th>Action</th>
    </tr>
    @foreach ($notes as $note)
    <tr>
        <td>{{ $note->title }}</td>
        <td>
            <a class="btn btn-warning" href="{{ route('notes.show',$note->id) }}">Show</a>
            <a class="btn btn-secondary" href="{{ route('notes.edit',$note->id) }}">Edit</a>
            <form action="{{ route('notes.destroy',$note->id) }}" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection