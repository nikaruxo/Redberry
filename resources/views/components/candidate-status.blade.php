@props(['status'])
<div>
    <a href="/?status={{ $status->status_id }}">
    {{ $status->status }}
    <span class="bg-gray-100 text-gray-800 text-sm font-medium mx-2 px-2.5 py-0.5 rounded-full">{{ $status->total }}</span></a>
</div>