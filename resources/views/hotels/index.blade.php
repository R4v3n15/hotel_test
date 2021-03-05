@extends('master.master')
@section('title', 'Hotels')


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
                                <a href="{{route('hotels.create')}}" class="btn btn-info btn-sm" id="create_user">{{ trans('forms.nuevohotel') }}</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th width="200">{{ trans('forms.nombre') }}</th>
                                        <th width="200">{{ trans('forms.google') }}</th>
                                        <th width="200">{{ trans('forms.img') }}</th>
                                        <th width="200">{{ trans('forms.slug') }}</th>
                                        <th width="200">{{ trans('forms.text') }}</th>
                                        <th width="100">{{ trans('forms.address') }}</th>
                                        <th width="150">{{ trans('forms.phone') }}</th>
                                        <th width="150">{{ trans('forms.lat') }}</th>
                                        <th width="150">{{ trans('forms.status') }}</th>                                       
                                        <th width="200"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($hotelsData as $index => $hotel)
                                    <tr>
                                        <th scope="row" style="vertical-align: middle;">{{$index + 1}}</th>
                                        <td style="vertical-align: middle;">
                                            {{ $hotel->nombre }}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            {{ $hotel->googleid }}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            {{ $hotel->img }}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            {{ $hotel->slug }}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            {{ $hotel->text }}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            {{ $hotel->direccion }}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            {{ $hotel->telefono }}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            {{ $hotel->lat }}
                                        </td>
                                        <td style="vertical-align: middle;">
                                            @if($hotel->estatus == '1')
                                                <strong class="text-success">{{ trans('forms.active') }}</strong>
                                            @else
                                                <strong class="text-danger">{{ trans('forms.inactive') }}</strong>
                                            @endif
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{ route('hotels.show', $hotel) }}"><span class="glyphicon glyphicon-edit icon-function edit_user" ></span></a>
                                            <form method="POST" action="{{ route('hotels.delete', $hotel) }}">
                                                {{ method_field('DELETE')}}{!! csrf_field() !!}
                                                <button style="border:0px; background:#FFF;color:red;" type="submit"><span class="glyphicon glyphicon-remove icon-function delete_user"></span></button>
                                            </from>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                         <td style="vertical-align: middle;">
                                            No hay datos
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





@endsection