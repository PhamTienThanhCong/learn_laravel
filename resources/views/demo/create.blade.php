@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  method="POST" action="{{ route('course.create.save') }}">
    @csrf
    Nhập tên của bạn
    <input type="text" name="name" value="{{ old('name') }}">
    <button>Tạo</button>
</form>