@extends('../welcome')
@section('user')
  
 @auth

     <!--
  <div class="container">
      <div class="row">
          @foreach($users as $user)
          <ul>
              <li>
                    {{$user->name}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;role : {{$user->role}}
              </li>
          </ul>
          @endforeach
      </div>
  </div>
-->
  @endauth
@endsection