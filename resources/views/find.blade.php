<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理システム</title>

  <style>
    th {
      color: black;
      padding: 5px 40px;
      text-align:left;
    }
    
    
    td {
      padding: 25px 40px;
      text-align: left;
      border-radius:5px;

    }

   input.name {
      width:200px;
      height:40px;
      
    }

    input.sex{
      transform: scale(3);
      width:40px;
      
    
    }

    input.form {
      width:420px;
      height:40px;
    }

    

     .button {
      background-color:black;
      margin-left: 350px;
      color:white;
      border-radius:4px;
      width:150px;
      height:40px;
      
    }

</style>

</head>
<body>

@extends('layouts.default')

@section('title', '管理システム')

@section('content')
<form action="/find2" method="POST">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="見つける">
</form>
@if (@isset($item))
<table>
  <tr>
    <th>ID</th>
    <th>お名前</th>
    <th>メールアドレス</th>
    <th>ご意見</th>
  </tr>
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->last_name}}{{$item->first_name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->opinion}}</td>
    <!-- <td>{{$item->getDetail(id)}}</td>
    <td>{{$item->getDetail(last_name.first_name)}}</td>
    <td>{{$item->getDetail(email)}}</td>
    <td>{{$item->getDetail(opinion)}}</td> -->
  </tr>
</table>
@endif
@endsection