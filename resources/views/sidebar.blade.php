<div class="container-fluid">
    <div class="row g-0">
        <!-- start sidbar-->
        <nav class="col-2 bg-light pe-3">
            <h2 class="h4 text-center text-primary pt-2">
                <i class="fa-brands fa-apple"></i>
                <span class="d-none d-lg-inline">Apple Admin</span>
            </h2>
            <div class="list-group text-center text-lg-start">
                <span class="list-group-item d-none d-lg-block disabled">
                    <small>CONTERLS</small>
                </span>
                <a href="{{ url('/') }}" class="list-group-item list-group-item-action active {{ Request::is('/') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span class="d-none d-lg-inline">Slider</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-user"></i>
                    <span class="d-none d-lg-inline">User</span>
                    <span class="d-none d-lg-inline badge bg-danger float-end">20</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-chart-line"></i>
                    <span class="d-none d-lg-inline">Statistics</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-flag"></i>
                    <span class="d-none d-lg-inline">Report</span>
                </a>
            </div>
            <div class="list-group mt-4 text-center text-lg-start">
                <span class="list-group-item disabled d-none d-lg-block">
                    ACTIONS
                </span>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-user"></i>
                    <span class="d-none d-lg-start">New User</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-edit"></i>
                    <span class="d-none d-lg-inline">Update Data</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="d-none d-lg-inline">Add Events</span>
                </a>
            </div>
        </nav>
        <main class="col-10 bg-light">