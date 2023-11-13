@extends('layouts.masterlayout')
@section('content')
<h2>Users Information</h2>
@foreach ($users as $id => $user )
<h3>{{$id}} | {{$user['name']}} | {{$user['age']}} | {{$user['gender']}} | {{$user['email']}}
    <a href="{{route('user-detail',$id)}}">Show</a></h3>

    @endforeach
@endsection