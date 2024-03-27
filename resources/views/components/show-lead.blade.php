@props(['lead'])
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Team lead for employees</h6>
                <h6 class="text-black text-capitalize ps-3">
                  <a href="{{ url('dashboard/lead/create') }}">Create new lead</a>
                </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Team name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee Lead</th>

                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($lead->isEmpty())
                    <div class="alert alert-info" role="alert">
                            <p class="p_info">There are no lead</p>
                    </div>

                    @else
                    @foreach($lead as $l)
                    <tr>

                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $l->name }}</p>
                      </td>

                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $l->employee->full_name }} / {{ $l->employee->position->name }}</p>
                      </td>

                      <td class="align-middle">
                        <a href="{{ url('dashboard/shifts/edit/'. $l->id) }}">
                          Edit
                        </a>
                        <a href="{{ url('dashboard/shifts/delete/'. $l->id) }}">
                          Delete
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
