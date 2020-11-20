@extends('layouts.layout')

@section('title')@parent:: Send mail @endsection
{{--@section('title')@parent:: <?=  $title ?> @endsection--}}

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <form method="post" action="/send">
            @csrf
            <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email"></input>
            </div>
            <div class="form-group">
                <label for="text">Your message</label>
                <textarea class="form-control" id="text" rows="5" name="text"></textarea>
            </div>
        </form>
        <button type="submit" class="btn btn-primary"> Send </button>
    </div>
@endsection
