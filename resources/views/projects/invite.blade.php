<div class="card flex flex-col mt-3">
    <h3 class="text-default font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-light pl-4">
        Invite a User
    </h3>

    <form action="{{ $project->path() . '/invitations' }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="card text-default w-full" placeholder="Email address">
        </div>

        <button type="submit" class="button">Invite</button>

        @include('errors', ['bag' => 'invitations'])
    </form>
</div>
