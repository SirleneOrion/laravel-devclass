@extends('layout')


@section('portal')

 <ul>
    @foreach($users as $user)
        <li><?= $user->name?></li>
         @endforeach
 </ul>


@endsection