@php
	$title = "app Setting";
@endphp
@extends('layouts.app')

@push('page-css')
	
@endpush

@push('breadcrumb')
<h3 class="content-header-title">App Settings</h3>
<div class="row breadcrumbs-top">
    <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Settings</a>
            </li>
            <li class="breadcrumb-item active">Settings
            </li>
        </ol>
    </div>
</div>
@endpush


@section('content')
	@include('app_settings::_settings')
@endsection

@push('page-js')
	
@endpush


