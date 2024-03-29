@extends('layouts.app')
@section('title')
    {{__('Sell NFC Cards')}}
@endsection
@section('content')

    <div class="container-fluid">
        <div class="d-flex flex-column table-striped">
            @include('flash::message')
            <livewire:nfc-types-table/>
        </div>
    </div>
    
@endsection
