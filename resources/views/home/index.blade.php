@extends('layouts.app')

@section('content')
<h1 class="text-orange-300 text-4xl font-bold mb-4">{{ $currentBroadcast->name }}</h1>

<div>
  @foreach($currentBroadcast->tasks as $task)
  <div class="flex items-center mb-2">
    @if($task->done)
    <div class="w-6 h-6 bg-pink-500 text-gray-100 rounded flex items-center justify-center">✓</div>
    @else
    <div class="w-6 h-6 bg-pink-500 rounded"></div>
    @endif

    <div class="ml-4 text-2xl {{ $task->done ? 'line-through text-gray-500 italic' : 'text-white' }}">
      {{ $task->text }}
    </div>
  </div>
  @endforeach
</div>
@endsection
