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
                    <h4>Position</h4>

                    @if(session()->has('message'))
                    {{ session()->get('message') }}
                    @endif


                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('create_position') }}">
                      @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                              @error("name")
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
