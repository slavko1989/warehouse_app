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
                    <h4>Team employee</h4>

                    @if(session()->has('error'))
                    {{ session()->get('error') }}
                    @endif
                    @if(session()->has('message'))
                    {{ session()->get('message') }}
                    @endif


                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('create_team') }}">
                      @csrf
                      <div class="mb-3">
                        <label for="name" class="form-label">Lead</label><br>
                        <select name="lead_id" value="{{ old('lead_id') }}">
                            @foreach($lead as $l)
                            <option value="{{ $l->id }}">{{ $l->employee->full_name }} - {{ $l->name }}</option>
                            @endforeach
                        </select>
                          @error("lead_id")
                                <div class="text-danger">{{ $message }}</div>
                          @enderror
                    </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Employee</label><br>
                            <select name="employee_id[]" multiple value="{{ old('employee_id') }}">
                                @foreach($emp as $e)
                                <option value="{{ $e->id }}">{{ $e->full_name }} / {{ $e->position->name }}</option>
                                @endforeach
                            </select>
                              @error("employee_id")
                                    <div class="text-danger">{{ $message }}</div>
                              @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 @include('dashboard/bootstrap_sections.footer')


