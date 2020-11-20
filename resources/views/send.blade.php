@extends('layouts.layout')

@section('title')@parent:: Send mail @endsection
{{--@section('title')@parent:: <?=  $title ?> @endsection--}}

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="alert alert-success">
            Email expediat cu succes!
        </div>
    </div>
@endsection
