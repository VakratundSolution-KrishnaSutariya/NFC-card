@extends('layouts.app')
@section('title')
    {{__('Edit NFC Product')}}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0">{{__('Edit NFC Product')}}</h1>
            <div class="text-end mt-4 mt-md-0">
                <a class="btn btn-outline-primary float-end"
                   href="{{ route('sadmin.nfcCardTypes.index') }}">{{ __('messages.common.back') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="col-12">
                @include('layouts.errors')
            </div>
            <div class="card">
                <div class="card-body">
                     {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'id' => 'productForm', 'enctype' => 'multipart/form-data']) !!}
                    @include('sadmin.nfcCardTypes.fields')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
