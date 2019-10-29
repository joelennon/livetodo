@extends('layouts.app')

@section('content')
<h1 class="text-orange-300 text-4xl font-bold mb-4">{{ $broadcast->name }}</h1>

<h2 class="text-pink-300 text-2xl font-semibold uppercase tracking-wide mb-2">Tasks</h2>

<div>
  @forelse($broadcast->tasks as $task)
  <form method="post" action="{{ route('task.update', $task) }}">
    @csrf
    @method('put')
    <input type="hidden" name="done" value="{{ $task->done ? '0' : '1' }}" />
    <div class="text-xl flex items-center {{ $task->done ? 'line-through text-gray-600 italic' : 'font-medium' }}">
      {{ $task->text }}
      <button type="submit">{{ $task->done ? 'Uncheck' : 'Check' }}</button>
    </div>
  </form>
  @empty
  <li>No tasks yet.</li>
  @endforelse
  </ul>

  <form method="post" action="{{ route('task.store') }}" class="my-8 max-w-xl">
    @csrf
    <input type="hidden" name="broadcast_id" value="{{ $broadcast->id }}" />
    <label>
      <div class="uppercase text-gray-400 tracking-wider font-medium text-sm mb-1">Add Task</div>
      <input type="text" name="text"
        class="rounded shadow-inner bg-gray-800 border border-gray-700 px-3 py-2 outline-none focus:border-pink-500"
        autofocus />
    </label>

    <button type="submit"
      class="bg-pink-500 px-3 py-2 mr-3 rounded font-semibold uppercase tracking-widest outline-none focus:shadow-outline">&raquo;</button>

    <div class="flex items-center my-8">
      <a class="bg-gray-700 rounded px-3 py-2" href="{{ route('broadcast.index') }}">Back to Broadcasts List</a>
    </div>
  </form>
  @endsection
