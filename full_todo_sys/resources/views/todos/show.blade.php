<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('view this task ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">task</h3>
                 
                    
                    <div class="overflow-auto mt-6">
                   
                        <table class="min-w-full bg-white dark:bg-gray-700 rounded-md">
                            <thead class="bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300">
                                <tr>
                              
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 dark:text-gray-300">
                             <th>title and description </th>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
