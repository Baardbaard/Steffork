@extends('layout')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h3>Add a review</h3>

            <form method="POST" action="/reviews/create">
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
