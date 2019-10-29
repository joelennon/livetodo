@extends('layouts.app')

@section('content')
<h1 class="text-orange-300 text-4xl font-bold mb-4">Create New Broadcast</h1>

<form method="post" action="{{ route('broadcast.store') }}" class="my-8 max-w-xl">
  @csrf
  <label class="block mb-6">
    <div class="uppercase text-gray-400 tracking-wider font-medium text-sm mb-1">Name</div>
    <input type="text" name="name"
      class="w-full rounded shadow-inner bg-gray-800 border border-gray-700 px-3 py-2 outline-none focus:border-pink-500"
      autofocus />
  </label>

  <div class="flex items-center">
    <button type="submit"
      class="bg-pink-500 px-3 py-2 mr-3 rounded text-sm font-semibold uppercase tracking-widest outline-none focus:shadow-outline">Create &raquo;</button>
    <a class="block px-3 py-2 rounded text-sm uppercase tracking-widest outline-none focus:shadow-outline" href="{{ route('broadcast.index') }}">Cancel</a>
  </div>
</form>
@endsection
