<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>

<h1>My Tasks</h1>

<a href="/tasks/create">Add New Task</a>

<ul>
    @foreach($tasks as $task)
        <li>{{ $task->title }}</li>
        
<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    <!-- <input type="text" value="token> -->

    @method('DELETE')

    <button type="submit">
        Delete
    </button>
</form>
        
    @endforeach
</ul>

</body>
</html>