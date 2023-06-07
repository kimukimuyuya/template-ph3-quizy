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
                    
                        @foreach ($choices as $choice)
                            <h2>{{ $choice->name }}</h2>

                            <a
                                href="/choices/{{ $choice->question_id }}/choice/{{ $choice->id }}/edit">{{ __('変更') }}</a>
                        @endforeach
                        @if($choices->isEmpty())
                        <a href="/choices/{{ $question_id }}/choice/create">{{ __('新規作成') }}</a>
                        @endif

                </div>
                <a href="{{ route('questions.index') }}">{{ __('一覧へ戻る') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>

