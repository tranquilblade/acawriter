@extends('layouts.app')

@section('content')
<div id="app">
    @if (isset($data->details[0]))
    <ex-doc-editor ex="{{$data->details[0]}}" role="{{$data->isAdmin}}"></ex-doc-editor>
    @else
    <ex-doc-editor ex="" role="{{$data->isAdmin}}"></ex-doc-editor>
    @endif

</div>
@endsection
