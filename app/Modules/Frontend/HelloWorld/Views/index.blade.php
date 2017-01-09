@extends('layouts/app')
@section('content')
@foreach($applications as $application)

            {{$application->name.' &&& '.$application->surname}}  <BR>

    @endforeach
@endsection