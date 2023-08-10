<x-dashboard>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Edit benefactor</h4>

            <!-- Basic Layout -->
            <div class="row">

                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Edit benefactor</h5>
                            <small class="text-muted float-end"></small>
                        </div>
                        <div class="card-body">
                            <x-flash-message />

                <form method="post" action="{{ route('benefactor.update',$benefactor->id) }}" autocomplete="off">
                    @method('put')
                    @csrf
                          @include('dashboard.benefactor.form')
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-dashboard>
