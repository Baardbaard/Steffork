@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $review->title }}</h1>
            <ul class="list-group">
                <li class="list-group-item">Rating: {{ $review->rating }}</li>
                <li class="list-group-item">Created at: {{ $review->created_at }}</li>
                <li class="list-group-item">Updated at: {{ $review->updated_at }}</li>
            </ul>
        </div>
    </div>
@stop
