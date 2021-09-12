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
  button {
    padding: 10px 20px;
    background-color: #289adc;
    border:none;
    color: white;
  }
</style>
@section('title', 'delete.blade.php')

@section('content')
<form action="/delete" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        id
      </th>
      <td>
        <input type="text" name="id" id="" value="{{$form->id}}">
      </td>
    </tr>
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="name" id="" value="{{$form->name}}">
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="age" id="" value="{{$form->age}}">
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="nationality" id="" value="{{$form->nationality}}">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection
