<form  method="POST" action="{{ route('course.create.save') }}">
    @csrf
    Nhập tên của bạn
    <input type="text" name="name">
    <button>Tạo</button>
</form>