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
                            <h4>Productivity Form</h4>
                            @if(session()->has('message'))
                            {{ session()->get('message') }}
                            @endif
                            @if(session()->has('bag'))
                    {{ session()->get('bag') }}
                    @endif
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('create_productivity') }}">
                                @csrf
                                
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control"  name="date"
                                    value="{{ old('date') }}">
                                    @error('date')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <input type="hidden" class="form-control" id="papers" name="the_norm_of_papers">
                                <input type="hidden" class="form-control" id="boxes" name="the_norm_of_boxes">
                                
                                <div class="mb-3">
                                    <label for="daily_papers" class="form-label">Daily papers</label>
                                    <input type="text" class="form-control" id="daily_papers" name="daily_of_papers"
                                    value="{{ old('daily_of_papers') }}">
                                    @error('daily_of_papers')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="daily_of_boxes" class="form-label">Daily boxes</label>
                                    <input type="text" class="form-control" id="da_boxes" name="daily_of_boxes"
                                    value="{{ old('daily_of_boxes') }}">
                                    @error('daily_of_boxes')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                <select name="employee_id">
                                    
                                    <option>Choose</option>
                                    @foreach($employee as $e)
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