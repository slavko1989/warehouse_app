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
                            <h4>Edit Shifts Form</h4>

                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                @csrf
                                <button class="btn btn-primary" name="submit">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('dashboard/bootstrap_sections.footer')
