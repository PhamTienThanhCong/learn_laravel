Sửa
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('course.update', $demo) }}" method="POST">
    @csrf
    @method('PUT')
    name
    <input type="text" name="name" value="{{ $demo->name }}">
    <button>Sửa</button>
</form>