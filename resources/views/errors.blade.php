@if ($errors->any())
    <div class="field mb-6">
        @foreach ($errors->all as $error)
            <li class="text-sm text-red">{{ $error }}</li>
        @endforeach
    </div>
@endif
