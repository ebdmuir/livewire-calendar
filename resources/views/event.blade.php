<div
    @if($eventClickEnabled)
        wire:click.stop="onEventClick('{{ $event['id']  }}')"
    @endif
    class="{{ $event['color'] == null ? 'bg-white' : null }} {{ $event['textColor'] == null ? 'text-white' : 'text-' . $event['textColor'] }} rounded-lg border py-2 px-3 shadow-md cursor-pointer"
    style="background-color: {{ $event['color'] }}">

    <p class="text-sm font-medium">
        {{ $event['title'] }}
    </p>
    <p class="mt-2 text-xs">
        {{ $event['description'] ?? 'No description' }}
    </p>
</div>
