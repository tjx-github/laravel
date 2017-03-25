{{$gg}}
主页面 
<?php
        echo __FILE__;
    
    ?>    
@extends('Ondir/ee')
@section("header")
    重写header
@stop
<?php
echo $gg;
?>
{{--模板注释--}}
@if ($gg =="值")
真
@else
假
@endif
<br>
{{url('view',['key'=>"data","xuan"=>"asds"])}}


