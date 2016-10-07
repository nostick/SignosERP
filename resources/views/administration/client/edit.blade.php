@extends('layouts.template')

@section('title')
    Editar Cliente
@endsection

@section('content')
    <h1 class="page-title"> Compañias
        <small>detalle y listado de las compañias</small>
    </h1>

    @include('administration.client.partials.breadcrum',['line' => 'Editar Cliente'])

    <div class="row">
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-dark"><h4>
                        <i class="icon-user font-dark"></i>
                        <span class="caption-subject bold">Editar Cliente</span></h4>
                </div>
                <div class="actions" style="padding-top: 15px">
                    <a href="#" class="btn btn-outline btn-circle btn-sm red delete pull-right" style="margin-left: 5px;" >
                        <i class="fa fa-trash-o"></i> Eliminar </a>
                    @if($client->status == true)
                    <a href="#" class="btn btn-outline btn-circle btn-sm blue-ebonyclay suspend pull-right" >
                        <i class="fa fa-user-times"></i> Suspender </a>
                    @else
                        <a href="#" class="btn btn-outline btn-circle btn-sm green-jungle suspend pull-right" >
                            <i class="fa fa-user"></i> Activar </a>
                    @endif
                </div>

            </div>
            <div class="portlet-body">
                <form action="{{route('clients.update',$client->id)}}" name="client-save" method="POST" id="client-save">
                    {{ csrf_field() }}

                    {{ method_field('PUT') }}

                    @include('administration.client.partials.formMain')

                    @include('administration.client.partials.fiscalForm')

                    @include('administration.client.partials.responsibleForm')

                    <button type="submit" class="btn btn-lg green pull-right"> Guardar
                        <i class="fa fa-plus"></i>
                    </button>
                    <a href="{{route('clients.index')}}" class="btn btn-lg red">
                        <i class="fa fa-chevron-left "></i>
                        Regresar
                    </a>


                </form>
            </div>
        </div>
    </div>
@endsection

<!--Modals Include Section-->
@include('administration.client.modals.delete-confirm')
@include('administration.client.modals.suspend-confirm')

@section('after-scripts')
    @include('administration.client.scripts.editFunctions')
@endsection