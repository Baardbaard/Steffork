@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>All reviews</h1>

            <ul class="list-group">
            @foreach($reviews as $review)
                <li class="list-group-item"><a href="/reviews/{{ $review->id }}">{{ $review->title }}</a><span class="label label-default pull-right">{{ $review->rating }}</span></li>
            @endforeach
            </ul>

            <hr>

            <h3>Add a review</h3>

            <form method="POST" action="/reviews">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" class="form-control"></input>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="rating" value="0" checked>Kut
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="rating" value="1">Niet kut
                    </label>
                </div>
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add review</button>
                </div>
            </form>
        </div>
    </div>
@stop
