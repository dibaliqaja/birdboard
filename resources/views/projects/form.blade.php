@csrf

<div class="card mb-3">
    <label for="title" class="text-default text-md mb-2 block">Title</label>
    <div class="control">
        <input type="text"
            class="bg-card text-default w-full"
            name="title"
            placeholder="My Next Awesome Project"
            required
            value="{{ $project->title }}">
    </div>
</div>

<div class="card mb-3">
    <label for="description" class="text-default text-md mb-2 block">Description</label>
    <div class="control">
        <textarea class="bg-card text-default w-full"
            name="description"
            placeholder="I should start learning piano." required>{{ $project->description }}</textarea>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button mr-2">{{ $buttonText }}</button>
        <a href="{{ $project->path() }}" class="text-default no-underline">Cancel</a>
    </div>
</div>

@include('errors')
