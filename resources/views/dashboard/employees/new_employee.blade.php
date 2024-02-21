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
                    <form method="post" action="{{ route('create_employee') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="name" name="f_name"
                            value="{{ old('f_name') }}">
                              @error('f_name')
                                    <div class="text-danger">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="mb-3">
                            <label for="l_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="l_name" name="l_name"
                            value="{{ old('l_name') }}">
                            @error('l_name')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}">
                            @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="years" class="form-label">Years in company</label>
                            <input type="text" class="form-control" id="years" name="years_in_company"
                            value="{{ old('years_in_company') }}">
                            @error('years_in_company')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date of birt</label>
                            <input type="date" class="form-control" id="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
                            @error('date_of_birth')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="profile" class="form-label">Profile</label>
                            <input type="file" class="form-control" id="profile" name="profile_image" value="{{ old('profile_image') }}">
                            @error('profile_image')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}">
                            @error('position')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="education" class="form-label">Education</label>
                            <input type="text" class="form-control" id="education" name="education" value="{{ old('education') }}">
                            @error('education')
                                    <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="code" class="form-label">Code of employee</label>
                            <input type="text" class="form-control" id="code" name="code_of_employee" value="{{ old('code_of_employee') }}">
                            @error('code_of_employee')
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