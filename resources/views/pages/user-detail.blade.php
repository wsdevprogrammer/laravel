@extends('layouts.masterlayout')

@section('content')
<h2>User Detail</h2>
<h2>User: {{ $id['name'] }} </h2>
<h2>Age: {{ $id['age'] }} </h2>
<h2>Gender: {{ $id['gender'] }} </h2>
<h2>Email: {{ $id['email'] }} </h2>
@endsection