@extends('admin/dashboard_master')

@section('content')
<div class="container-fluid mt-2 p-4 bg-secondary">
    <div class="row">
        <div class="col">
            <div class="alert alert-info">
                A new version of admin
                dashboard is released. 
            </div>
        </div>
    </div>
    <div class="row flex-column flex-lg-row">
        <h2 class="text-info h6">QUICK START</h2>
        <div class="col mb-3">
            <div class="card" style="background-color:#6a6aa2">
                <div class="card-body">
                    <h2 class="card-title text-white">{{ $totalPosts }}</h2>
                    <span class="text-white">Total Posts</span>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card" style="background-color: rgba(189, 189, 62, 0.815);">
                <div class="card-body">
                    <h2 class="card-title text-white">{{ $totalCategories }}</h2>
                    <span class="text-white">
                        Total Category</span>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card" style="background-color: rgb(120, 202, 120);">
                <div class="card-body">
                    <h2 class="card-title text-white">{{ $totalAllUsers }}</h2>
                    <span class="text-white"> Total Users</span>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card" style="background-color: rgb(219, 123, 139);">
                <div class="card-body">
                    <h2 class="card-title text-white">{{ $totalAdmin }}</h2>
                    <span class="text-white">
                        Total Admin</span>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection