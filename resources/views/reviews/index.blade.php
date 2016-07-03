@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>All reviews</h1>

            <ul class="list-group">
            @foreach($reviews as $review)
                <li class="list-group-item"><a href="/reviews/{{ $review->id }}">{{ $review->body }}</a></li>
            @endforeach
            </ul>

            <h3>Add a review</h3>

            <form method="POST" action="/reviews">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add review</button>
                </div>
            </form>
        </div>
    </div>
@stop
