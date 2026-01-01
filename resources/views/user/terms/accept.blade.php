@extends('layouts.user')

@section('title', 'Terms')

@section('breadcrumbs')
        <li class="breadcrumb-item active" aria-current="page"><span>Terms</span></li>
@endsection

@section('content')

    <div class="col-sm-8">
        <div class="col-sm-12 text-center">
            <h3 class="text-success">To accept these terms scroll down to the bottom and click on "I AGREE"</h3>
        </div>
        <hr>
        @include('user.modules.terms')

    <div class="col-sm-6 text-center">
        <form action="{{ route('terms.submit') }}" method="post">
            @csrf
            <button class="btn btn-success">I AGREE</button>
        </form>
    </div>

@endsection
