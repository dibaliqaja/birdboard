@csrf

<div class="field mb-6">
    <label for="title" class="label text-sm mb-2 block">Title</label>
    <div class="control">
        <input type="text"
            class="input bg-transparent border border-grey-light rounded p-2 text-xs w-full"
            name="title"
            placeholder="My Next Awesome Project"
            required
            value="{{ $project->title }}">
    </div>
</div>

<div class="field mb-6">
    <label for="description" class="label text-sm mb-2 block">Description</label>
    <div class="control">
        <textarea class="textarea bg-transparent border border-grey-light rounded p-2 text-xs w-full"
            name="description"
            placeholder="I should start learning piano." required>{{ $project->description }}</textarea>
    </div>
</div>

<div class="field">
    <div class="control">
        <button type="submit" class="bg-blue text-white text-sm no-underline rounded-lg py-3 px-5 is-link mr-2">{{ $buttonText }}</button>
        <a href="{{ $project->path() }}">Cancel</a>
    </div>
</div>

@if ($errors->any())
    <div class="field mb-6">
        @foreach ($errors->all as $error)
            <li class="text-sm text-red">{{ $error }}</li>
        @endforeach
    </div>
@endif
