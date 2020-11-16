<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>

<body>

<h3>Hello, test!</h3>

{{ $test }}

</body>

</html>
{{ $h3 }}
{{--{{ mb_strtoupper($h3) }}--}}
{{--{{ $title }}--}}
{{--{!! $h3 !!}--}}

{{--@if(count($data1) > 20)
    Count > 20
@elseif(count($data1) < 20)
    Count < 20
@else
    Count = 20
@endif--}}

{{--@isset($data2)
    Isset data2
@endisset--}}

{{--@production
    <h1>production</h1>
@endproduction--}}

{{--@env('local')
    <h3>local</h3>
@endenv--}}

{{--@for($i = 0; $i < count($data1); $i++)
    {{ $data1[$i] }}
@endfor--}}

{{--afisarea numerelor pare in ciclu--}}
{{--@for($i = 0; $i < count($data1); $i++)
    @if($data1[$i] % 2 !=0)
        @continue
    @endif
    {{ $data1[$i] }}
@endfor--}}

{{--afisarea numerelor pare fara 6, 8 si 16 in ciclu--}}
{{--@for($i = 0; $i < count($data1); $i++)
    @if($data1[$i] % 2 !=0)
        @continue
    @elseif($data1[$i] == 6 or $data1[$i] == 8)
        @continue
    @elseif($data1[$i] == 16)
        @break
    @endif
    {{ $data1[$i] }}
@endfor--}}

{{--
@foreach($data2 as $k => $v)
    {{ $k }} => {{ $v }}
@endforeach--}}
