<div class="bg-white p-5 rounded-lg shadow flex flex-col mt-3" style="height: 200px">
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-light pl-4">
        Invite a User
    </h3>

    <form action="{{ $project->path() . '/invitations' }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="border border-grey-light rounded w-full py-2 px-3" placeholder="Email address">
        </div>

        <button type="submit" class="bg-blue text-white text-sm no-underline rounded-lg py-2 px-4">Invite</button>

        @include('errors', ['bag' => 'invitations'])
    </form>
</div>
