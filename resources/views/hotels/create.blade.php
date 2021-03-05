@extends('master.master')
@section('title', 'Nuevo hotel')


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
                        <a class="breadcrumb-item" href="{{ route('hotels') }}"><span class="breadcrumb-item active">{{ trans('forms.hotels') }}</span></a>
                        <span class="breadcrumb-item active">new</span>
                    </nav>
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="col-md-5 pl-0">
                                <h2>Nuevo Hotel</h2>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form method="POST" action="{{ route('hotels.add') }}">
                                {!! csrf_field() !!}
                                <div class="form-group col-sm-6">
                                    <label for="nombre" class="control-label">Nombre</label>
                                    <input type="text" id="nombre" class="form-control" name="nombre" autocomplete="off" placeholder="Nombre hotel" requiered />
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="googleid" class="control-label">Google ID</label>
                                    <input type="text" id="googleid" class="form-control" name="googleid" autocomplete="off" placeholder="Google id" requiered />
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="direccion" class="control-label">Dirección</label>
                                    <input type="text" id="direccion" class="form-control" name="direccion" placeholder="Direccion" autocomplete="off" requiered />
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="telefono" class="control-label">Telefono</label>                                    
                                    <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Número de teléfono" autocomplete="off" requiered />                                
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="lat" class="control-label">Latitud</label>
                                    <input type="number" id="lat" class="form-control" name="lat" autocomplete="off" placeholder="Localización latitud"/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="lng">Longitud</label>
                                    <input type="number" id="lng" class="form-control" name="lng" autocomplete="off" placeholder="Localización longitud"/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="slug" class="control-label">Slug</label>
                                        <input type="text" id="slug" class="form-control" name="slug" autocomplete="off" placeholder="Slug"/>
                                </div>
                                <div class="form-group col-sm-6">
                                   <label for="estatus" class="control-label">Status</label>
                                    <select class="form-control" name="estatus" id="estatus">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>                                    
                                </div>
                                <div class="form-group">
                                    <label for="logo">URL logotipo</label>
                                    <input type="file" id="logo" class="form-control" name="logo"/>
                                </div>
                                <div class="form-group">
                                    <label for="img">URL imagen</label>
                                    <input type="file" class="form-control" id="img" name="img">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="text" class="control-label">Comentario</label>
                                    <textarea name="text" id="text" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Agregar Hotel</button>
                                    </div>
                                </div>
                            </form>
                            <a href="{{route('hotels')}}">Regresar al listado de hoteles</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
