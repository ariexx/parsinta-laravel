<div class="card mb-3">
    <div class="card-header">Create new tasks</div>
    <div class="card-body">
        <form action="/tasks" method="post">
            @csrf
            @include('tasks._form')
        </form>
    </div>
</div>
