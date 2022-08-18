@extends('layouts.admin')
@section('content')
@role('admin')
@livewire('admin.dashboard')
@else
@include('dashboard')
@endrole


@endsection
