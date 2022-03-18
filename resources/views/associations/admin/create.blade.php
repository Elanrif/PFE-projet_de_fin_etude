@extends('../source/layout')
@section('content')
 
<div class="container-fluid">
    <form method="POST" class="my-5 py-5" action="{{ route('association.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 fs-3 col-form-label text-md-end">{{ __('nom') }}</label>
                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control fs-4 @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus placeholder="nom de l'association">

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="date" class="col-md-4 fs-3 col-form-label text-md-end">{{ __('date') }}</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control fs-4 @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus  
                                min="2015-01-01" max="2022-03-28">
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="description" class="col-md-4 fs-3 col-form-label text-md-end">{{ __('description') }}</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control fs-4 @error('description') is-invalid @enderror" name="description" value="{{ old('nom') }}" required autocomplete="description" autofocus placeholder="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="mini_description" class="col-md-4 fs-3 col-form-label text-md-end">{{ __('Mini description') }}</label>
                            <div class="col-md-6">
                                <input id="mini_description" type="text" class="form-control fs-4 @error('mini_description') is-invalid @enderror" name="mini_description" value="{{ old('mini_description') }}" required autocomplete="mini_description" autofocus placeholder="petite description">

                                @error('mini_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                            </div>

                           <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn ms-2 fs-5 btn-primary">
                                    {{ __('Créer') }}
                                </button>
                            </div>
                          </div>
                          
                        </form>                        
    
</div>

@endsection