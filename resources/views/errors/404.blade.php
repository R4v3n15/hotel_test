@extends('master.master')
@section('title', 'Resumen de hotel')


@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-formhelpers.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/alertify.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/alertify-default-theme.min.css') }}" />
@endsection

@section('scripts')
    <script src="{{asset('public/js/bootstrap-formhelpers.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap-validator.min.js') }}"></script>
    <script src="{{asset('public/js/alertify.min.js')}}"></script>
@endsection

@section('content')
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                @include('include.menu')
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ URL::to('admin') }}">{{ trans('menu.home') }}</a>
                        <span class="breadcrumb-item active">{{ trans('forms.hotels') }}</span>
                    </nav>
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="col-md-5 pl-0">
                                <h2>Pagina no encontrada</h2>
                            </div>
                        </div>
                        <div class="panel-body">
                            <a href="{{route('hotels')}}">Regresar al listado de hoteles</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection