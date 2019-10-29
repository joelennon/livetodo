@extends('layouts.app')

@section('content')
<h1 class="text-orange-300 text-4xl font-bold mb-4">Broadcasts</h1>

<div class="my-8">
  @forelse($broadcasts as $broadcast)
  <div>
    <a href="{{ route('broadcast.show', $broadcast) }}">{{ $broadcast->name }}</a>
    <form method="post" action="{{ route('broadcast.update', $broadcast) }}">
      @csrf
      @method('put')
      <input type="hidden" name="live" value="{{ $broadcast->live ? '0' : '1' }}" />
      <button type="submit">{{ $broadcast->live ? 'Live' : 'Not Live' }}</button>
    </form>
  </div>
  @empty
  <div>No broadcasts yet.</div>
  @endforelse
</div>

<a class="bg-gray-700 rounded px-3 py-2" href="{{ route('broadcast.create') }}">Create New Broadcast</a>


@endsection
