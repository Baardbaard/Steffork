@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="/reviews/{{ $review->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" class="form-control" value="{{ $review->title }}">
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="rating" value="0" <?php if ($review->rating == 0) { echo 'checked'; } ?>>Kut
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="rating" value="1" <?php if ($review->rating == 1) { echo 'checked'; } ?>>Niet kut
                    </label>
                </div>
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update review</button>
                </div>
            </form>
        </div>
    </div>
@stop
