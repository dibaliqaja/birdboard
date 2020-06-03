@extends('layouts.app')

@section('content')
    <div class="lg:w-1/2 lg:mx-auto bg-white p-6 md:py-12 md:px-16 rounded-shadow">
        <h1 class="text-default text-2xl font-normal mb-10 text-center">
            Let's start something new
        </h1>
        <form action="/projects" method="POST">
            @include('projects.form', [
                'project' => new App\Project,
                'buttonText' => 'Create Project'
             ])
        </form>
    </div>
@endsection
