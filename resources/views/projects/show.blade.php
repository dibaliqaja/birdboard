@extends('layouts.app')

@section('content')

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-grey text-sm font-normal">
                <a href="/projects" class="text-grey text-sm font-normal no-underline">My Projects</a> / {{ $project->title }}
            </p>
            <a href="/projects/create"
            class="bg-blue text-white text-sm no-underline rounded-lg py-3 px-5"
            style="box-shadow: 0 2px 7px 0 #b0eaff">
            Add Project
            </a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-grey text-lg font-normal mb-3">Tasks</h2>

                    <div class="bg-white p-5 rounded-lg shadow mb-3">Lorem ipsum</div>
                    <div class="bg-white p-5 rounded-lg shadow mb-3">Lorem ipsum</div>
                    <div class="bg-white p-5 rounded-lg shadow mb-3">Lorem ipsum</div>
                    <div class="bg-white p-5 rounded-lg shadow mb-3">Lorem ipsum</div>
                </div>

                <div>
                    <h2 class="text-grey text-lg font-normal mb-3   ">General Notes</h2>
                    <textarea class="bg-white p-5 rounded-lg shadow w-full" style="min-height: 200px">Lorem ipsum</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>

@endsection
