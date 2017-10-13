@extends('layouts.app')

@section('content')

<table>
  <tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Deskripsi</th>
    <th>Harga</th>
    <th>cost</th>
  </tr>
  @foreach($homestays as $homestay)
  <tr>
    <td>{{$homestay->name_homestay}}</td>
    <td>{{$homestay->address}}</td>
    <td>{{$homestay->desc}}</td>
    <td>{{$homestay->cost}}</td>
    <!-- <td><a href="{{route('homestay.show',["homestay"=> $homestay->id])}}">Lihat</a></td>
    <td><a href="{{route('homestay.edit',["homestay"=> $homestay->id])}}">Edit</a></td> -->
  </tr>
  @endforeach
</table>
@endsection
