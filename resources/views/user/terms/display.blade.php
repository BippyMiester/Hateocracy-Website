@extends('layouts.user')

@section('title', 'Terms')

@section('breadcrumbs')
    <li class="breadcrumb-item active" aria-current="page"><span>Terms</span></li>
@endsection

@section('content')

    <div class="col-sm-8">
        @include('user.modules.terms')
    </div>

@endsection
