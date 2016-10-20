@extends('layout.master')
@section('content')

<div class="jumbotron col-sm-4 col-sm-offset-4"  >
  <form action="{{ url('/login')}}" method="post" class="form-horizontal">
     {!! csrf_field() !!}
    <fieldset>
         <legend align="center">Login</legend>
      <div class="form-group">
         @if($errors->has('email'))
            <div class="has-error">
        @endif
        <div class="col-lg-7 col-lg-offset-3">
         <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ old('email')}}">
         @if($errors->has('email'))
              <label class="control-label">{{ $errors->first('email') }}</label>
              </div>
          @endif
        </div>
      </div>
      <div class="form-group">
          @if($errors->has('password'))
            <div class="has-error">
        @endif
        <div class="col-lg-7 col-lg-offset-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
         @if($errors->has('password'))
              <label class="control-label">{{ $errors->first('password') }}</label>
              </div>
          @endif
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-3">
          <button type="submit" id="submit" class="btn btn-primary col-lg-8" >Login</button>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-12 col-lg-offset-3">
         <a class="small col-lg-4">Forgot your password?</a>
         <a class="small col-lg-4" href="/register">Not Registered?</a>
        </div>
      </div>
    </fieldset>
  </form>
</div>

@stop
