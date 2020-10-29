<!DOCTYPE html>
<html>
<head>
    <title>home</title>
</head>

<body>
<!-- Moduri de afisare in view fara controller -->
Hello, world! The content of the document......<br />
{{--{{ $var}} <br />
{{ $name }}--}}

{{ $res }} <br />
{{ $name }}
<br>
{{ route('post', ['id' => 3]) }}
<br>
{{ route('admin.post', ['id' => 3]) }}

</body>

</html>
