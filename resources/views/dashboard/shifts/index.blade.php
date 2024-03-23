@extends('dashboard/bootstrap_sections.head')
@section('title','Company Software')
@section('new_links')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@endsection

<body class="g-sidenav-show  bg-gray-200">
  @include('dashboard/bootstrap_sections.sidebar')


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  @include('dashboard/bootstrap_sections.nav')


    <x-show-shifts :shift='$shit'></x-show-shifts>


@include('dashboard/bootstrap_sections.footer')