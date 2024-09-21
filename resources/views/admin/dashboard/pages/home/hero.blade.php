@extends('admin.layouts.main')


@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <p>Welcome to the Dashboard. Select a menu item to load content.</p>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <!-- Add other cards or content here -->
    </div>
@endsection
