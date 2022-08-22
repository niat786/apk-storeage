@extends('layouts.admin')
@section('content')
@role('admin')
@livewire('admin.public-files')
@else
@include('dashboard')
@endrole
@endsection
