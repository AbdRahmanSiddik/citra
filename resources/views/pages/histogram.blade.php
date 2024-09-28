@extends('layout.nago')

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <img src="{{ $image }}" alt="image" width="100%" style="position: relative">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ps-4">
                <h5>Histogram</h5>
                <a href="/histogram/all" class="btn btn-primary ms-auto text-white">Detail</a>
            </div>
            <div class="card-body">
                <img src="{{ $histogram }}" alt="histogram" width="100%" style="position: relative">
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ps-4">
                <h5>Histogram RGB</h5>
                <a href="/histogram/rgb/all" class="btn btn-primary ms-auto text-white">Detail</a>
            </div>
            <div class="card-body">
                <img src="{{ $histogram_rgb }}" alt="histogram" width="100%" style="position: relative">
            </div>
        </div>
    </div>
</div>
@endsection
