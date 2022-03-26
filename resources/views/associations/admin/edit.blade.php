@extends('../../admin/page')
@section('admin')
 
<div class="container-fluid">
    <form method="POST" class="my-5 py-5" action="{{ route('association.update',$association->id) }}" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <div class="row mb-3">
                            <label for="nom" class="pt-1 col-md-4 fs-3 col-form-label text-md-end">{{ __('nom') }}</label>
                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control fs-4 @error('nom') is-invalid @enderror" name="nom" value="{{ $association->nom }}" required autocomplete="nom" autofocus placeholder="nom de l'association">

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="date" class="pt-4 col-md-4 fs-3 col-form-label text-md-end">{{ __('date') }}</label>
                            <div class="col-md-6 my-3">
                                <input id="date" type="date" class="form-control fs-4 @error('date') is-invalid @enderror" name="date" value="{{ $association->date }}" required autocomplete="date" autofocus  
                                min="2010-01-01" max="2022-03-01">
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="description" class="pt-4 col-md-4 fs-3 col-form-label text-md-end">{{ __('description') }}</label>
                            <div class="col-md-6 mb-2">
                               <!-- <input id="description" type="text" class="form-floating fs-4 @error('description') is-invalid @enderror" name="description" value="{{ old('nom') }}" required autocomplete="description" autofocus > -->
                               
                               <div class="form-floating my-3">
                                   <textarea class="form-control form-floating fs-4 @error('description') is-invalid @enderror" name="description" value="{{ $association->description }}" required autocomplete="description" autofocus name="description"placeholder="Leave a comment here" id="floatingTextarea2" style="height: 250px">{{$association->description}}</textarea>
                                   <label for="floatingTextarea2">ecrire....</label>
                                </div>
                               
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                            </div>

             
                             <label for="photo" class="pt-4 col-md-4 fs-3 col-form-label text-md-end">{{ __('photo') }}</label>
                            <div class="col-md-6 my-3">
                                <input id="photo" type="file" class="form-control fs-4 @error('photo') is-invalid @enderror" name="photo" value="{{ ($association->photo) }}"  autocomplete="photo" autofocus placeholder=".jpeg ou .jpeg ">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}} </strong>
                                    </span>
                                @enderror
                            </div>
                            

                           <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn ms-2 fs-5 btn-success">
                                    {{ __('Modifier') }}
                                </button>
                              <button class="btn btn-danger ">  <a href="{{route('association.index')}}" class="nav-link fs-5 d-flex align-items-center text-light " style="height:30px;">{{_('Annuler')}}</a> </button>
                            </div>
                          </div>
                          
                        </form>                        
    
</div>

@endsection