@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td {
    background-color: #fff;
  }
  td table {
    margin: 0 auto;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  td table tbody tr td {
    background-color: #eeeeee !important;
  }
</style>
@section('title', 'author.add.blade.php')

@section('content')
<table>
  <tr>
    <th>Author</th>
    <th>Books</th>
  </tr>
  @foreach($hasItems as $item)
  <tr>
    <td>
      {{$item->getDetail()}}
    </td>
    <td>
      <table width="100%">
      @foreach ($item->books as $obj)
        <tr>
          <td>{{$obj->getTitle()}}</td>
        </tr>
      @endforeach
      </table>
    </td>
  </tr>
  @endforeach
</table>
<table>
  <tr>
    <th>Author</th>
  </tr>
  @foreach ($noItems as $item)
  <tr>
    <td>{{$item->getDetail()}}</td>
  </tr>
  @endforeach
</table>
@endsection
