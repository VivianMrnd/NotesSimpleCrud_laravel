@extends('layouts.app')
@section('content')

<div class="row">
    <div>
        <div>
            <h2> Show Post</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('notes.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $note->title }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Info:</strong>
            {{ $note->details }}
        </div>
    </div>

</div>
@endsection