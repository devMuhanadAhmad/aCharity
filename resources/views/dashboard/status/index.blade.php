<x-dashboard>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Lists statuss</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <x-flash-message />
                <h5 class="card-header">Lists statuss</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name English</th>
                                <th>Category</th>


                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @forelse ($statuss as $status)
                          <tr>
                            <td>{{$loop->index+1}}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $status->en_name }}</strong></td>


                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $status->category->ar_title }}</strong></td>
                                    <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('status.edit',$status->id)}}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <form method="post" action="{{ route('status.destroy', $status->id )}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="dropdown-item" type="submit" class="btn btn-danger btn-sm"
                                                        title="{{ __('Delete') }}"><i
                                                        class="bx bx-trash me-1"></i> Delete</a></button>

                                                </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <td colspan="7">
                           {{__("No status Define !")}}
                        </td>

                          @endforelse

                        </tbody>

                    </table>
                    <div class="p-4">
                        {{$statuss->links()}}
                    </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->

            <hr class="my-5" />


            <div class="content-backdrop fade"></div>
        </div>
</x-dashboard>
