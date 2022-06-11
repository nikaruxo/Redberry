@props(['recruitement'])
<tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <div class="flex items-center">
                <div>
                    <p class="text-gray-900 whitespace-no-wrap">
                        {{ $recruitement -> first_name }} {{ $recruitement -> last_name }}
                    </p>
                    <span class="text-sm text-gray-400">{{ $recruitement -> position }}</span>
                </div>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        @if(!empty($recruitement -> mobilenumber) || !empty($recruitement -> email))
            <p class="text-gray-900 whitespace-no-wrap">{{ $recruitement -> mobilenumber }}</p>
            <p class="text-gray-900 whitespace-no-wrap">{{ $recruitement -> email }}</p>
        @else
            No Contact Info
        @endif
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        @if(!empty($recruitement->cv))
        <p class="text-gray-900 whitespace-no-wrap">
            <span class="text-gray-600 text-xs font-medium inline-flex items-center py-0.5 rounded ">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                <a href="{{ asset('storage/' . $recruitement->cv) }}" download="cv">View CV</a>
              </span>
        </p>
        @else
        <p class="text-gray-900 whitespace-no-wrap">
            {{ $recruitement -> experience }}
        </p>
        @endif
    </td>
    <td class="px-5 py-5 w-48 border-b border-gray-200 bg-white text-sm">
        <div class="flex flex-wrap-reverse gap-2">
            @if(!empty($recruitement->skills))
                @php
                    $tags = explode(',',$recruitement->skills)
                @endphp
                @foreach ($tags as $tag)
                    <div class="bg-green-100 text-green-800 text-sm font-medium  px-2.5 py-0.5 rounded">{{$tag}}</div>
                @endforeach
            @else
                No skills specified
            @endif
        </div>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white">
        <p class="text-gray-400 whitespace-no-wrap">
            @if($recruitement -> min_salary && $recruitement -> max_salary)
            {{ $recruitement -> min_salary }} - {{ $recruitement -> max_salary }}
            @else
            No info
            @endif
        </p>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">
            <a href="/recruitements/{{ $recruitement->id }}/edit" class="flex gap-1 mb-5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                Edit
            </a>
            <form method="POST" action="/recruitements/{{ $recruitement->id }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500 flex gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    Delete
                </button>
            </form>
        </p>
    </td>
</tr>
