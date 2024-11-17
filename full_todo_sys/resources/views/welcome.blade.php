<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <style>
        /* Add any custom styles here */
    </style>
</head>
<body>

<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">To Do App</h4>

            <!-- Form to add a new task -->
            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" method="post" action="{{ route('saveItem') }}">
                @csrf
                <div class="col-12">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="form1" class="form-control" name="title"/>
                      <label class="form-label" for="form1">Enter a task here</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Save</button>
                  </div>
            </form>

            <!-- Table displaying tasks -->
            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Todo item</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
              
              <!-- Incomplete Tasks -->
              <h5>Incomplete Tasks</h5>
              @foreach ($listitems as $listitem)
                @if ($listitem->isCompleted == 0)
                  <tr>
                    <th scope="row"></th>
                    <td>{{ $listitem->id }}</td>
                    <td>{{ $listitem->title }}</td>
                    <td>
                      <form method="post" action="{{ route('deleteItem', $listitem->id) }}">
                          @csrf
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger">Delete</button>
                      </form>
                      <form method="post" action="{{ route('updateStatus', $listitem->id) }}">
                          @csrf
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success ms-1">Mark as Finished</button>
                      </form>
                    </td>
                  </tr>
                @endif
              @endforeach

          
              <!-- Completed Tasks -->
              <h5>Completed Tasks</h5>
              @foreach ($listitems as $listitem)
                @if ($listitem->isCompleted == 1)
                  <tr>
                    <th scope="row"></th>
                    <td>{{ $listitem->id }}</td>
                    <td>{{ $listitem->title }}</td>
                    <td>
                      <form method="post" action="{{ route('deleteItem', $listitem->id) }}">
                          @csrf
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endif
              @endforeach

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
