<a href="{{ route('course.create') }}">
    Thêm
</a>
<form action="">
    Tìm kiếm
    <input type="text" name="q" value="{{ $search }}">
</form>
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>name</th>
        <th>created</th>
        <th>updated</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    @foreach ($data as $course)
        <tr>
            <th>
                {{ $course->id }}
            </th>
            <th>
                {{ $course->name }}
            </th>
            <th>
                {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y') }}
            </th>
            <th>
                {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y') }}
            </th>
            <th>
                <a href="{{ route('course.edit', $course) }}">
                    Sửa
                </a>
            </th>
            <th>
                <form action="{{ route('course.delete', $course) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        xóa
                    </button>
                </form>
            </th>
        </tr>
    @endforeach
</table>
{{ $data->links() }}