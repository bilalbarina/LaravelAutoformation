@if ($errors->has('*'))
    <h1 style="color: rgb(252, 0, 0)">
        {{ $errors->first() }}
    </h1>
@endif

<form action="{{ route('validate') }}" method="POST">
    @csrf
    <input type="text" name="key">
    <button>
        Check
    </button>
</form>
