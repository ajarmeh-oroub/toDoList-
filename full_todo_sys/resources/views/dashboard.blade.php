<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">User Tasks</h3>
                    <p>{{ __("You're logged in!") }}</p>
                    
                    <div class="overflow-auto mt-6">
                        <table class="min-w-full bg-white dark:bg-gray-700 rounded-md">
                            <thead class="bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300">
                                <tr>
                                    <th class="px-4 py-2 text-left">User ID</th>
                                    <th class="px-4 py-2 text-left">Task Title</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 dark:text-gray-300">
                                @foreach($users as $user)
                                    <tr class="border-b border-gray-200 dark:border-gray-600">
                                        <td class="px-4 py-2">{{ $user->id }}</td>
                                        <td class="px-4 py-2">{{ $user->title }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
