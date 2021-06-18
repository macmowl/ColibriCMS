@extends('layouts.master')

@section('content')
    <form action="login" method="post">
        {{ csrf_field() }}
        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
        @if($errors->has('email'))
            <p class="help-invalid">{{ $errors->first('email') }}</p>
        @endif
        <input type="password" placeholder="Mot de passe" name="password" required>
        @if($errors->has('password'))
            <p class="help-invalid">{{ $errors->first('password') }}</p>
        @endif
        <input type="submit" value="Se connecter">
    </form>
@endsection
