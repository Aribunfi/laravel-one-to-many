@extends('layouts.app')

@section('title', $project->title)

@section('actions')
<div>
    <a href="{{ route(admin.projects.index}}" class="float-end btn btn-primary">Torna alla lista</a>
</div>
@endsection

@section('content')
<strong>Title: </strong> {{ $project->title }} <br />
<strong>Year: </strong> {{ $project->year }} <br />
<strong>Kind: </strong> {{ $project->kind }} <br />
<strong>Time: </strong> {{ $project->time }} <br />
<strong>Description: </strong> {{ $project->description }} <br />
<img src="{{ asset('storage/' . $project->image)}}" alt="{{$project->slug}}" width="300">
@endsection