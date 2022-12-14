@extends('backend.management.dashboard_layouts')

@section('dashboard_content')
<div class="row">
    <div class="col-xl-12">
        <h1>Hello, {{ Auth::user()->name }}</h1>

    </div>
    <div class="container">

    </div>
</div>
@endsection

@section('script')

@endsection