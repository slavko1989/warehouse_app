@props(['position'])
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Position for employees</h6>
                <h6 class="text-black text-capitalize ps-3">
                  <a href="{{ url('dashboard/position/create') }}">Create new postion</a>
                </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Position</th>

                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($position->isEmpty())
                    <div class="alert alert-info" role="alert">
                            <p class="p_info">There are no postion</p>
                    </div>

                    @else
                    @foreach($position as $positions)
                    <tr>

                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $positions->name }}</p>
                      </td>


                      <td class="align-middle">
                        <a href="{{ url('dashboard/shifts/edit/'. $positions->id) }}">
                          Edit
                        </a>
                        <a href="{{ url('dashboard/shifts/delete/'. $positions->id) }}">
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
