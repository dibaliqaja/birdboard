@extends('layouts.app')

@section('content')

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-grey text-sm font-normal">
                <a href="/projects" class="text-grey text-sm font-normal no-underline">My Projects</a> / {{ $project->title }}
            </p>

            <div class="flex items-center">
                @foreach ($project->members as $member)
                    <img src="{{ gravatar_url($member->email) }}" alt="{{ $member->name }}'s avatar'" class="rounded-full w-8 mr-2">
                @endforeach
                    <img src="{{ gravatar_url($project->owner->email) }}" alt="{{ $project->owner->name }}'s avatar'" class="rounded-full w-8 mr-2">

                <a href="{{ $project->path() . '/edit' }}"
                    class="bg-blue text-white text-sm no-underline rounded-lg py-3 px-5 ml-4"
                    style="box-shadow: 0 2px 7px 0 #b0eaff">
                    Edit Project
                </a>
            </div>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-grey font-normal mb-3">Tasks</h2>

                    @foreach ($project->tasks as $task)
                        <div class="bg-white p-5 rounded-lg shadow mb-3">
                            <form action="{{ $task->path() }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="flex items-center">
                                    <input type="text" name="body" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-grey' : '' }}">
                                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach

                    <div class="bg-white p-5 rounded-lg shadow mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input type="text" name="body" class="w-full" placeholder="Add a new task...">
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-lg text-grey font-normal mb-3">General Notes</h2>
                    <form action="{{ $project->path() }}" method="post">
                        @csrf
                        @method('PATCH')
                        <textarea
                            name="notes"
                            class="bg-white p-5 rounded-lg shadow text-default w-full mb-4"
                            style="min-height: 200px"
                            placeholder="Anything special that you want to make a note of?">{{ $project->notes }}</textarea>

                        <button type="submit" class="bg-blue text-white text-sm no-underline rounded-lg py-3 px-5">Save</button>

                        @include('errors')
                    </form>
                </div>
            </div>
            <div class="lg:w-1/4 px-3 lg:py-8">
                @include('projects.card')
                @include('projects.activity.card')

                @can('manage', $project)
                    @include('projects.invite')
                @endcan
            </div>
        </div>
    </main>

@endsection
