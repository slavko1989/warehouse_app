@props(['employee'])
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Employees in sector</h6>
                <h6 class="text-black text-capitalize ps-3">
                  <a href="{{ url('dashboard/employees/new_employee') }}">Create new employee</a>
                </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Years in company</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date of birth</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Education</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Code of employee</th>


                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($employee->isEmpty())
                    <div class="alert alert-info" role="alert">
                            <p class="p_info">You don't have any employees</p>
                    </div>

                    @else
                    @foreach($employee as $employees)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('employee_image/'.$employees->profile_image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $employees->full_name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $employees->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $employees->years_in_company }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $employees->date_of_birth }}</p>
                      </td>
                      <td>

                        <p class="text-xs text-secondary mb-0">{{ $employees->position->name }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{ $employees->education }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $employees->code_of_employee }}</span>
                      </td>
                      <td class="align-middle">
                        <a href="{{ url('dashboard/employees/edit/'. $employees->id) }}">
                            ! -
                        </a>
                        <a href="{{ url('dashboard/employees/delete/'. $employees->id) }}">
                             - X
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
                {!! $employee->withQueryString()->links('pagination::bootstrap-5') !!}
              </div>
            </div>
          </div>
        </div>
      </div>
