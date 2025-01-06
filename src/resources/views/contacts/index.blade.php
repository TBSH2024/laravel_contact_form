<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <a href="{{ route('contacts.create') }}" class="text-blue-500">新規登録</a>
                        <form method="GET" action="{{ route('contacts.index') }} " class="mb-8 text-center">
                            <div class="flex justify-center space-x-4">
                                <input type="text" name="search" placeholder="検索" class="px-4 py-2 w-1/3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                <button type="submit" class="text-white bg-blue-500 py-2 px-6 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">検索する</button>
                            </div>
                        </form>
                    </div>
                    <div class="lg:w-4/5 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-center whitespace-no-wrap border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-900">ID</th>
                                    <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-900">氏名</th>
                                    <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-900 w-1/3">件名</th>
                                    <th class="border border-gray-300 px-4 py-3 text-sm font-medium text-gray-900">登録日</th>
                                    <th class="border border-gray-300 text-sm font-medium text-gray-900">詳細</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-3">{{ $contact->id }}</td>
                                        <td class="border border-gray-300 px-4 py-3">{{ $contact->name }}</td>
                                        <td class="border border-gray-300 px-4 py-3">{{ $contact->title }}</td>
                                        <td class="border border-gray-300 px-4 py-3">{{ $contact->created_at }}</td>
                                        <td class="border border-gray-300">
                                            <a class="text-blue-500 cursor:pointer" href="{{ route('contacts.show', ['id' => $contact->id]) }}">詳細を見る</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
