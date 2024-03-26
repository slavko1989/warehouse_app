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
                            <h4>Shifts</h4>
                            @if(session()->has('message'))
                            {{ session()->get('message') }}
                            @endif
                            @if(session()->has('error'))
                            {{ session()->get('error') }}
                             @endif

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('create_shift') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control"  name="day_in_week"
                                    value="{{ old('day_in_week') }}">
                                    @error('day_in_week')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="daily_papers" class="form-label">shifts</label>
                                    <input type="text" class="form-control" id="daily_papers" name="shifts"
                                    value="{{ old('shifts') }}">
                                    @error('shifts')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="daily_of_boxes" class="form-label">worked_from</label>
                                    <input type="text" class="form-control" id="da_boxes" name="worked_from"
                                    value="{{ old('worked_from') }}">
                                    @error('worked_from')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="daily_of_boxes" class="form-label">worked_to</label>
                                    <input type="text" class="form-control" id="da_boxes" name="worked_to"
                                    value="{{ old('worked_to') }}">
                                    @error('worked_to')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="daily_of_boxes" class="form-label">Employee</label><br>
                                    <select name="employeeId">
                                    @foreach($emp as $e)
                                    <option value="{{ $e->id }}">{{ $e->full_name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('dashboard/bootstrap_sections.footer')
