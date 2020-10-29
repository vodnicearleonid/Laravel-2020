<!DOCTYPE html>
<html>
<head>
    <title>contact</title>
</head>

<body>

{{--<form action="" method="post">
    --}}{{-- csrf_field() --}}{{--
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit"> submit </button>
</form>--}}

{{--<form action="{{ route('contact') }}" method="post">
    --}}{{-- csrf_field() --}}{{--
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit"> submit </button>
</form>--}}

{{--<form action="" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit"> submit </button>
</form>--}}

<form action="" method="post">
    {{--{{ method_field('PUT') }}--}}
    @method('PUT')
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit"> submit </button>
</form>

</body>

</html>











