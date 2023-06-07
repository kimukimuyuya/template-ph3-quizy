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
                        <h1>編集</h1>

                        <form method="POST" action="{{route('questions.update',['question' =>$questions->id])}}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf

                            <div>
                                質問
                                <input type="text" name=content value="{{ $questions->content }}">
                            </div>

                            <div>
                                画像
                                <input type="file" name=image>
                            </div>

                            <div>
                                参照
                                <input type="text" name=supplement value="{{ $questions->supplement }}">
                            </div>


                            <input type="submit" value="更新する">

                        </form>
                    </div>
                </div>
            </div>
            <a href="{{ route('questions.create') }}">{{ __('新規作成') }}</a>
        </div>
    </div>
</x-app-layout>
