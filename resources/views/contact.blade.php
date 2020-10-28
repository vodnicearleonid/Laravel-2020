<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
</head>

<body>

{{--<form action="" method="post">
    --}}{{-- csrf_field() --}}{{--
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit"> submit </button>
</form>--}}

<form action="{{ route('contacttest') }}" method="post">
    {{-- csrf_field() --}}
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit"> submit </button>
</form>

</body>

</html>
