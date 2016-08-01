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
                        @if ($review->rating == 0)
                            <span class="label label-danger pull-right">Kut</span>
                        @elseif ($review->rating == 1)
                            <span class="label label-success pull-right">Niet kut</span>
                        @endif
                </li>
            @endforeach
            </ul>
            <hr>
            <a class="btn btn-primary" href="/reviews/create">Create a review</a>
        </div>
    </div>
@stop
