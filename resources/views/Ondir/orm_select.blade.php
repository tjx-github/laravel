<?php

print_r($data);
?>


@foreach($data as $arr)
    @if ($arr->id == 3)
        {{$arr->md5}}
        {{$arr->id}}
        {{$arr->mc}}
    @else
        {{url("fa")}}
    @endif
@endforeach
