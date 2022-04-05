<a href="{{ route('course.create') }}">
    Thêm
</a>
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>name</th>
        <th>created</th>
        <th>action</th>
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
                {{ $course->created_at }}
            </th>
            <th>
                <a href="">
                    Xóa
                </a>
                <br>
                <a href="">
                    Sửa
                </a>
            </th>
        </tr>
    @endforeach
</table>