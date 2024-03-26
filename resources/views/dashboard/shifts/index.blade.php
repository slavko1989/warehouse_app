@extends('dashboard/bootstrap_sections.head')
@section('title','Company Software')
@section('new_links')

@endsection

<body class="g-sidenav-show  bg-gray-200">
  @include('dashboard/bootstrap_sections.sidebar')


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  @include('dashboard/bootstrap_sections.nav')


    <x-show-shifts :shift='$shift'></x-show-shifts>
    <x-show2-shift :shift_2='$shift_2'></x-show2-shift>
    <x-show3-shift :shift_3='$shift_3'></x-show3-shift>


@include('dashboard/bootstrap_sections.footer')
