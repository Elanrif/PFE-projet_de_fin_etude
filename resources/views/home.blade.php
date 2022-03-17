@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                         
                   {{__('Bonjour')}} <strong class="text-primary"> {{Auth::user()->name}}</strong> {{ __('Votre compte  a été crée avec succès !') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
