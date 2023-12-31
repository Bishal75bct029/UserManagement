@extends('master')
@section('title','Show Data')
@section('content')
<div class="flex justify-end m-8">
    <a href="/addData" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New</a>
</div>
<div class="flex flex-col mt-2">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-center text-sm font-light">
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Address</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                            <th scope="col" class="px-6 py-4">Postal Code</th>
                            <th scope="col" class="px-2 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $users)
                        <tr class="border-b dark:border-neutral-500 h-20">
                            <td class="whitespace-nowrap px-6 py-4">{{$users->name}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$users->address}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$users->email}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$users->postalcode}}</td>
                            <td>
                                <a href="/edit/{{$users->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 mt-10 rounded h-auto w-auto" style = "margin-top:14px;">Edit</a>
                                <form action="/delete/{{$users->id}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="confirm('Are you sure want to delete it?')" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 m-2 px-2 rounded" >Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@stop