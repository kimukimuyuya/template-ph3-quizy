<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <form method="POST" action="{{route('choices.choice', ['id' => $selected_choice->question_id, 'choice' => $selected->id])}}" enctype="multipart/form-data"> --}}
                    <form method="POST" action="/choices/{{ $selected_choice->question_id }}/choice/{{ $selected_choice->id }}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div>
                            選択肢
                            <input type="text" name=choice value="{{ $selected_choice->name }}">
                        </div>
                        <input type="submit" value="更新する">

                    </form>
                    <a href="/choices/{{ $selected_choice->question_id }}/choice">{{ __('詳細に戻る') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
