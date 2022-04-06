Sửa
<form action="{{ route('course.update', $demo) }}" method="POST">
    @csrf
    @method('PUT')
    name
    <input type="text" name="name" value="{{ $demo->name }}">
    <button>Sửa</button>
</form>