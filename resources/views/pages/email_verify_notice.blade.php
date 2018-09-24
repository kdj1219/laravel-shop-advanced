@extends('layouts.app')
@section('title', 'Notice')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Notice</div>
    <div class="panel-body text-center">
        <h1>Please verify the email first.</h1>
        <a class="btn btn-primary" href="{{ route('email_verification.send') }}">Resend validation email</a>
    </div>
</div>
@endsection