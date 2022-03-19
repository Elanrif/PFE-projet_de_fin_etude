@extends('../../admin/home')
@section('admin')
 
<div class="container-fluid">
    <form method="POST" class="my-5 py-5" action="{{ route('membre.update',$membre->id) }}">
                        @csrf
                        @method('PUT')
        
                            <div class="row mb-3">

                               <label for="user_id" class="col-md-4 my-3 fs-3 col-form-label text-md-end">{{ __('utilisateur') }}</label>
                             <div class="col-md-6 my-3">
                                <select id="user_id" type="user_id" class="form-select fs-4 @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id">
                               <option selected><span class="text-muted"> veuillez sélectionner l'utilisateur ...... </span></option>
                               @foreach($users as $user)
                               <option value="{{$user->id}}">{{$user->id}} {{$user->nom}}</option>
                               @endforeach
                               </select>
                                @error('semestre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>

                              <label for="association_id" class="col-md-4  fs-3 col-form-label text-md-end">{{ __('association') }}</label>
                            <div class="col-md-6">
                                <select id="association_id" type="association_id" class="form-select fs-4 @error('association_id') is-invalid @enderror" name="association_id" value="{{ old('association_id') }}" required autocomplete="association_id">
                               <option selected><span class="text-muted"> sélectionner le nom de l'association ...... </span></option>
                               @foreach($associations as $association)
                               <option value="{{$association->id}}">{{$association->id}} {{$association->nom}}</option>
                               @endforeach
                               </select>
                                @error('semestre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                         </div>

                           <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn ms-2 fs-5 btn-primary">
                                    {{ __('Modifier') }}
                                </button>
                                 <button class="btn btn-danger ">  <a href="{{route('membre.index')}}" class="nav-link fs-5 d-flex align-items-center text-light " style="height:30px;">{{_('Annuler')}}</a> </button>
                            </div>
                          </div>
                          
                        </form>                        
    
</div>

@endsection