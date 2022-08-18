@extends('layouts.admin')
@section('content')
@role('admin')
@livewire('admin.files')
@else
@include('dashboard')
@endrole
@endsection
