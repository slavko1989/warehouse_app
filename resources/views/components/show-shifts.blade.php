@props(['shift'])
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Shifts for emploees</h6>
                <h6 class="text-black text-capitalize ps-3">
                  <a href="{{ url('dashboard/shifts/create_shift') }}">Create new shift</a>
                </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Shift</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Worked from</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Worked to</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Day in Week</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Employee</th>



                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($shift->isEmpty())
                    <div class="alert alert-info" role="alert">
                            <p class="p_info">You are not create shift for this week</p>
                    </div>

                    @else
                    @foreach($shift as $shifts)
                    <tr>

                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $shifts->shifts }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $shifts->worked_from }}</p>
                      </td>
                      <td>

                        <p class="text-xs text-secondary mb-0">{{ $shifts->worked_to }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{ \Carbon\Carbon::parse($shifts->day_in_week)->format('l, d.m.Y') }}
                        </span>
                      </td>
                      <td class="align-middle text-center text-sm">

                        @if($shifts->employee) <!-- Provera da li postoji zaposlenik za ovu smenu -->
                        <span class="badge badge-sm bg-gradient-success">{{ $shifts->employee->full_name }}</span>
                    @else
                        <span class="badge badge-sm bg-gradient-danger">No one in shift</span>
                    @endif

                        </span>
                      </td>

                      <td class="align-middle">
                        <a href="{{ url('dashboard/shifts/edit/'. $shifts->id) }}">
                          Edit
                        </a>
                        <a href="{{ url('dashboard/shifts/delete/'. $shifts->id) }}">
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
