@props(['productivity'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Productivity of employees in sector</h6>
                        <h6 class="text-black text-capitalize ps-3">
                        <a href="{{ url('dashboard/productivities/new_productivity') }}">Create new productivity</a>
                        </h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Daily norm of boxes </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Daily norm of papers</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Daily worker boxes</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Daily worker papers</th>

                                    <th class="text-secondary opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($productivity->isEmpty())
                                <div class="alert alert-info" role="alert">
                                    <p class="p_info">You don't have any info here</p>
                                </div>

                                @else
                                @foreach($productivity as $prd)
                                <tr>

                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $prd->employee_id }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $prd->date }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $prd->the_norm_of_boxes }}</p>
                                    </td>
                                    <td>

                                        <p class="text-xs text-secondary mb-0">{{ $prd->the_norm_of_papers }}</p>
                                    </td>
                                    <td>

                                        <p class="text-xs text-secondary mb-0">{{ $prd->daily_of_boxes }}</p>
                                    </td>
                                    <td>

                                        <p class="text-xs text-secondary mb-0">{{ $prd->daily_of_papers }}</p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ url('dashboard/productivities/edit/'. $prd->id) }}">
                                            Edit
                                        </a>
                                        <a href="{{ url('dashboard/productivities/delete/'. $prd->id) }}">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        {!! $productivity->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
