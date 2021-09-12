@extends('layouts.default')
<style>
  th {
    background-color: #289adc;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td {
    background-color: #ffffff;
  }
  td {
    padding: 25px 40px;
    background-color: #eeeeee;
    text-align: center;
  }
</style>
@section('title', 'binds.blade.php')

@section('content')
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>AGE</th>
    <th>NATIONNALITY</th>
  </tr>
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->age}}</td>
    <td>{{$item->nationality}}</td>
  </tr>
</table>
@endsection


