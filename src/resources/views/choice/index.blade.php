{{-- @extends('layouts.helloapp') --}}

{{-- @section('title',Choice.index) --}}




<table>
    @foreach($items as $item)
    <tr>
        <td>{{$item->valid}}</td>
        <td>{{$item->region}}</td>
        {{-- <td>{{$item->}}</td> --}}
    </tr>
    @endforeach
</table>

{{-- @endsection --}}


