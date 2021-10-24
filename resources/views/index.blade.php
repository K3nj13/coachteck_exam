<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>

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

    span {
      color:red;
    }

    .submit {
      margin-left:350px;
    }

    input.input1 {
      width:205px;
      height:25px;
      border-radius:4px;
      border-width:thin;
     
    }

    input.input2 {
      width:395px;
      height:25px;
      border-radius:4px;
      border-width:thin;
      
    }

    input.input3 {
      width:415px;
      height:25px;
      border-radius:4px;
      border-width:thin;
      
    }

    .button2 {
      width:100px;
      height:30px;
      background-color:black;
      color:white;
      border-radius:5px;
    }
    
    .sample_text {
      color:grey;
      padding:7px 0 5px 10px;
    }

  </style>
</head>

<body>
@extends('layouts.default')

@section('title', 'お問い合わせ')

@section('content')
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<form action="/confirm2" class="h-adr" method="post">
<table>
@csrf
  <tr>
    <th>お名前<span>※</span></th>
    <td>
      <input type="text" class="input1" name="last_name" value="{{old('last_name')}}">
      <input type="text" class="input1" name="first_name" value="{{old('first_name')}}">
      <br>
      <div class="sample_text">例）山田　            例）太郎</div>
    </td>
  </tr>

@error('last_name')
  <tr>
    <td >{{$message}}</td>
  </tr>
@enderror

@error('first_name')
  <tr>
    <td >{{$message}}</td>
  </tr>
@enderror

  <tr>
    <th>性別<span>※</span></th>
    <td>
      <input type="radio" name="gender" value="男性" checked>男性
      <input type="radio" name="gender" value="女性" {{old('gender') == '女性' ? 'checked' : ''}}>女性
    </td>
  </tr>

@error('gender')
  <tr>
    <td>{{$message}}</td>
  </tr>
@enderror

  <tr>
    <th>メールアドレス<span>※</span></th>
    <td>
      <input type="email" class="input3" name="email" value="{{old('email')}}">
      <br>
      <div class="sample_text">例）test@example.com</div>
    </td>
  </tr>

@error('email')
  <tr>
    <td>{{$message}}</td>
  </tr>
@enderror

  <span class="p-country-name" style="display:none;">Japan</span>
  <tr>
    <th>郵便番号<span>※</span></th>
    <td>
      <label>〒</label>
      <input type="text" class="input2 p-postal-code" name="postcode" value="{{old('postcode')}}">
      <br>
      <div class="sample_text"> 例）123-4567</div>
    </td>
  </tr>

@error('postcode')
  <tr>
    <td>{{$message}}</td>
  </tr>
@enderror

  <tr>
    <th>住所<span>※</span></th>
    <td>
      <input type="text" class="input3 p-region p-locality p-street-address p-extended-address" name="address" value="{{old('address')}}">
      <br>
      <div class="sample_text">例）東京都渋谷区千駄ヶ谷1-2-3</div>
    </td>
  </tr>

@error('address')
  <tr>
    <td>{{$message}}</td>
  </tr>
@enderror

  <tr>
    <th>建物名</th>
    <td>
      <input type="text" class="input3" name="building_name" value="{{old('building_name')}}">
      <br>
      <div class="sample_text">例）千駄ヶ谷マンション101</div>
    </td>
  </tr>

  <tr>
    <th>ご意見<span>※</span></th>
    <td>
      <textarea name="opinion" cols="60" rows="8" value="">{{old('opinion')}}</textarea>
    </td>
  </tr>

@error('opinion')
  <tr>
    <td>{{$message}}</td>
  </tr>
@enderror

</table>
  <input type="submit" value="確認" class="button2 submit">  
  </form>
@endsection

</body>
</html>