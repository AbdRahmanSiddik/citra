@extends('layout.nago')

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>RGB Image</h5>
            </div>
            <div class="card-body">
                <img src="{{ $rgbImage }}" alt="image" width="100%" style="position: relative">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ps-4">
                <h5>Normalized Image</h5>
            </div>
            <div class="card-body">
                <img src="{{ $normalizedImage }}" alt="histogram" width="100%" style="position: relative">
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between ps-4">
                <h5>Histogram Normalized</h5>
                <a class="btn btn-primary ms-auto text-white">Detail</a>
            </div>
            <div class="card-body">
                <img src="{{ $histogram }}" alt="histogram" width="100%" style="position: relative">
            </div>
        </div>
    </div>
</div>
@endsection
