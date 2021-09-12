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
  svg.w-5.h-5 {  /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
  }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>data</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->getDetail()}}
    </td>
  </tr>
  @endforeach
</table>
{{$items->links()}}
@endsection

