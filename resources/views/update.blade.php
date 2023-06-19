@extends('master')
@section('title','Add New Data')
@section('content')
<!-- @foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach -->
<div class="max-w-md mx-auto bg-white rounded p-8 shadow mt-8">
  <h2 class="text-2xl font-bold mb-6">Contact Form</h2>
  <form action="/edit/{{$users->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name*</label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name" value="{{$users->name}}" name="name">
      @if($errors->has('name'))
      <div class="text-red-500">*{{$errors->first('name')}}</div>
     
      @endif
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address*</label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Enter your Address" name="address"value = "{{$users->address}}">
      @if($errors->has('address'))
      <div class="text-red-500">*{{$errors->first('address')}}</div>
      @endif
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2"  for="email">Email Address*</label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email address" name="email" value="{{$users->email}}">
      @if($errors->has('email'))
      <div class="text-red-500">*{{$errors->first('email')}}</div>
      @endif
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="postalcode" >Postal Code*</label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="postal-code" type="number" placeholder="Enter your postal code" name="postalcode" value="{{$users->postalcode}}">
      @if($errors->has('postalcode'))
      <div class="text-red-500">*{{$errors->first('postalcode')}}</div>
      @endif
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Update Data</button>
    </div>
  </form>
</div>

@stop