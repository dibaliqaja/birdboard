@csrf

<div class="field mb-6">
    <label class="label text-md text-default mb-2 block" for="title">Title</label>

    <div class="control">
        <input
            type="text"
            class="input text-default bg-card border border-muted-light rounded p-2 text-xs w-full"
            name="title"
            placeholder="My next awesome project"
            required
            value="{{ $project->title }}">
    </div>
</div>

<div class="field mb-6">
    <label class="label text-md text-default mb-2 block" for="description">Description</label>

    <div class="control">
        <textarea
            name="description"
            rows="10"
            class="textarea text-default bg-card bg-transparent border border-muted-light rounded p-2 text-xs w-full"
            placeholder="I should start learning piano."
            required>{{ $project->description }}</textarea>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="button is-link mr-2">{{ $buttonText }}</button>

        <a href="{{ $project->path() }}" class="text-default no-underline hover:underline">Cancel</a>
    </div>
</div>

@include('errors')
