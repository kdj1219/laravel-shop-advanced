@extends('layouts.app')
@section('title', '错误')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">ERROR</div>
    <div class="panel-body text-center">
        <h1>{{ $msg }}</h1>
        <a class="btn btn-primary" href="{{ route('root') }}">Back to Home</a>
    </div>
</div>
@endsection
