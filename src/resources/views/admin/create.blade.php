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
                    <div>
                        <h1>新規作成</h1>

                        {{-- <form method="POST" action="{{route('questions.store')}}" enctype="multipart/form-data"> --}}
                        <form method="POST" action="{{route('questions.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label for="form-content">質問</label>
                                <input type="text" name="content" id="form-content" required>
                            </div>

                            <div>
                                <label for="form-image">画像</label>
                                <input type="file" name="image" id="form-image">
                            </div>

                            <div>
                                <label for="form-supplement">参照</label>
                                <input type="text" name="supplement" id="form-supplement">
                            </div>

                            <button type="submit">登録</button>

                        </form>
                    </div>
                </div>
            </div>
            <a href="{{ route('questions.index') }}">{{ __('一覧へ戻る') }}</a>
        </div>
    </div>
</x-app-layout>
