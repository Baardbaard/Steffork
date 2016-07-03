@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>All reviews</h1>

            <ul class="list-group">
            @foreach($reviews as $review)
                <li class="list-group-item">
                    <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
                    <form method="POST" action="/reviews/{{ $review->id }}" class="pull-right" style="margin-left: 1rem">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" style="padding: 0; border: 0; background-color: transparent"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </form>
                    <a href="/reviews/{{ $review->id }}/edit"><span class="glyphicon glyphicon-pencil pull-right" style="margin-left: 1rem" aria-hidden="true"></span></a>
                    <span class="label label-default pull-right">{{ $review->rating }}</span>
                </li>
            @endforeach
            </ul>

            <hr>

            <h3>Add a review</h3>

            <form method="POST" action="/reviews">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" class="form-control">
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
