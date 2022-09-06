@extends('layout')

@section('portal')

    @include('includes.errors')  
        @if(session()->has('message'))
       
        <span class="alert alert-sucess">{{ session('message') }}</span>
       
        @endif

    <form action="/user/store" method="post">
        {{csrf_field() }}
        <input type="text" name="name">
        {{ $errors->first('name') }} 
        <input type="text" name="email">
        {{ $errors->first('email') }} 
        <input type="text" name="password">
        {{ $errors->first('password') }} 
       
        <button type="submit">CADASTRAR</button>
</form>

@endsection