<x-layouts.main>
    {{-- 1. Spalte ----------------------------------------------------------------------------------}}
    <div class="flex-1 space-y-5">
        <div class="bg-white shadow rounded">
            <img src="{{ asset('images/' . str_replace(' ', '_', $post->title) . '.jpg') }}" alt="Blog Image" class="rounded-t">
            <div class="p-5">
                <div class="font-bold text-xs text-blue-700">{{$post->created_at}}</div>
                <div class="text-3xl text-blue-900">{{$post->title}}</div>
                <div class="text-lg text-gray-700">{{$post->body}}
                </div>
            </div>
            <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700 font-bold text-xs bg-indigo-100">
                <a href="mailto:{{ $post->user->email }}">{{$post->user->name}}</a>
            </div>
            <div class="my-div d-flex justify-content-center">
                <button type="button" class="btn btn mb-3 ml-3" style="border-radius: 50px; height: auto; width: 55%;border: 3px solid rgb(54, 42, 165);">
                   <a href="{{ url('start') }}" class="btn btn-secondary" style="height: auto; width: 100%;border-radius: 50px;">back</a>
                </button>
             </div>

        </div>
    </div>
</x-layouts.main>