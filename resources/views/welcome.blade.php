@extends('layouts.app')

@section('content')
<div>
    <livewire:season-stats />
    <div class="mt-8 max-w-3xl mx-auto grid gap-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-5">
        <div class="col-span-1 lg:col-start-1 lg:col-span-3">
            <livewire:game-list />
        </div>
        <div class="space-y-6 lg:col-start-4 col-span-1 lg:col-span-2">
            <livewire:tournament-list/>
        </div>
    </div>
</div>
@endsection
