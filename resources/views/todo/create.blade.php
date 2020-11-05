@extends('layout.default')

@section('title')
    <title>Creat Todo</title>
@endsection

@section('content')
<div class="text-center pt-10">
    <h1 class="text-2xl">What next you want to do?</h1>
    <x-alert/>
    <form action="" method="post" enctype="multipart/form-data" class="py-5">
        @csrf
        <input type="text" name="title" class="py-2 px-2 border rounded"/>
        <input type="submit" value="Create" class="p-2 border rounded cursor-pointer"/>
    </form>
</div>
@endsection