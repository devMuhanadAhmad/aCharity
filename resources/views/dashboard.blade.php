<x-dashboard>
    <!-- Content -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Welcome to the admin control panel! 🎉</h5>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Benefactors</span>
                                    <h3 class="card-title mb-2">{{\App\Models\User::where('type','user')->count()}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Orphans</span>
                                    <h3 class="card-title mb-2">{{\App\Models\Orphan::count()}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Event</span>
                                    <h3 class="card-title mb-2">{{\App\Models\Event::count()}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Category</span>
                                    <h3 class="card-title mb-2">{{\App\Models\Category::count()}}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
        <!-- / Content -->
</x-dashboard>
