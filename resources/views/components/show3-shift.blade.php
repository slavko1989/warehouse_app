@props(['shift_3'])

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
                    @if($shift_3->isEmpty())
                    <div class="alert alert-info" role="alert">
                            <p class="p_info">You are not create shift for this week</p>
                    </div>

                    @else
                    @foreach($shift_3 as $shifts)
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
                        <span class="badge badge-sm bg-gradient-success">{{ \Carbon\Carbon::parse($shifts->day_in_week)->startOfWeek()->format('l, d.m.Y') }} -
                        {{ \Carbon\Carbon::parse($shifts->day_in_week)->startOfWeek()->addDays(4)->format('l, d.m.Y') }}
                        </span>
                      </td>
                      <td class="align-middle text-center text-sm">

                        @if($shifts->employee) <!-- Provera da li postoji zaposlenik za ovu smenu -->
                        <span class="badge badge-sm bg-gradient-success">{{ $shifts->employee->full_name }} / {{ $shifts->employee->position->name }}</span>
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
            <hr>

