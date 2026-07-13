<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
</head>
<body>

    <h1>Add New Task</h1>

    <form action="/tasks" method="POST">

        @csrf

        <input
            type="text"
            name="title"
            placeholder="Enter task">

        <button type="submit">
            Add Task
        </button>

    </form>

</body>
</html>