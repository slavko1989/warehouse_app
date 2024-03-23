@extends('dashboard/bootstrap_sections.head')
@section('title','Company Software')
@section('new_links')
@endsection

<body class="g-sidenav-show  bg-gray-200">
  @include('dashboard/bootstrap_sections.sidebar')


  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('dashboard/bootstrap_sections.nav')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Employee Form</h4>

                    @if(session()->has('message'))
                    {{ session()->get('message') }}
                    @endif


                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('edit_prd',['id' => $edit->id]) }}">
                      @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Papers</label>
                            <input type="text" class="form-control" id="name" name="daily_of_papers"
                            value="{{ $edit->daily_of_papers}}">
                              @error('daily_of_papers')
                                    <div class="text-danger">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="mb-3">
                            <label for="l_name" class="form-label">Boxes</label>
                            <input type="text" class="form-control" id="l_name" name="daily_of_boxes"
                            value="{{ $edit->daily_of_boxes }}">
                            @error('daily_of_boxes')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="code" class="form-label">Employee</label>

                            <select name="employee_id">
                                @foreach($emp as $e)
                                <option value="{{ $e->id }}" {{ $e->id == session('selected_employee_id') ? 'selected' : '' }}>
                                    {{ $e->full_name }}
                                </option>
                                @endforeach
                            </select>
                            @error('employee_id')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard/bootstrap_sections.footer')
