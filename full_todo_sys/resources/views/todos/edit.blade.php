<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Edit your Tasks</h3>
                 
                    
                    <div class="overflow-auto mt-6">
                    <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" method="post" action="/todos/{{$todo->id}}">
                        @method('PUT')
                @csrf
                <div class="col-12">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="form1" class="form-control" name="title" value="{{$todo->title}}"/>
                      <label class="form-label" for="form1">Enter a task here</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Save</button>
                  </div>
            </form>
                        <table class="min-w-full bg-white dark:bg-gray-700 rounded-md">
                            <thead class="bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300">
                                <tr>
                              
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 dark:text-gray-300">
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
