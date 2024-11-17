<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your tasks ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">User Tasks</h3>
                 
                    
                    <div class="overflow-auto mt-6">
                    <a href="/todos/create" class="btn btn-success mb-3">Add a task</a> 
                        <table class="min-w-full bg-white dark:bg-gray-700 rounded-md">
                            <thead class="bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300">
                                <tr>
                                    <th class="px-4 py-2 text-left">Task Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 dark:text-gray-300">
                              @forelse($todos as $items)
                                    <tr class="border-b border-gray-200 dark:border-gray-600">
                                        <td class="px-4 py-2">{{$items->title}}</td>
                                        @if($items->isCompleted==1){
                                            <td class="px-4 py-2">Is Completed</td>
                                        }@else{
                                            <td class="px-4 py-2">not completed</td>
                                        }@endif
                                        <td>
                      <form method="post" action="{{ route('todos.destroy', $items->id) }}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger">Delete</button>
                      </form>
                      <form method="get" action="{{ route('todos.update', $items->id) }}">
                          @csrf
                          @method('PUT')
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success ms-1">Mark as Finished</button>
                      </form>
                      <form method="get" action="{{ route('todos.edit', $items->id) }}">
                          @csrf
                       
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success ms-1">edit</button>
                      </form>
                    </td>
                                    </tr>
                                    @empty
                                    <tr class="border-b border-gray-200 dark:border-gray-600">
                                        <td class="px-4 py-2"> no tasks on the list</td>
                                      
                                    </tr>
                              @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
