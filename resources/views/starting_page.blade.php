@extends('layouts.app')

@section('page_description')
@section('page_title', 'Home Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Starting Page') }}</div>

                <div class="card-body">
                    This is starting page
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
