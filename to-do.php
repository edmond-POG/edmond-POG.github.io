<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Rane Edmond Thiaw">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do — Lab 7</title>
  <link rel="stylesheet" href="my_style.css">
  <!-- Font Awesome for trash icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  <div class="body_wrapper">
    <header>
      <nav class="main_nav">
        <a href="index.php" class="nav_link">Home</a>
        <a href="about.html" class="nav_link">About</a>
        <a href="my_artistic_self.html" class="nav_link">Artistic Self</a>
        <a href="my_vacation.html" class="nav_link">Vacation</a>
        <a href="to-do.html" class="nav_link current">To-Do</a>
      </nav>
    </header>

    <main>
      <h1>My To-Do List</h1>

      <form id="todo-form" class="todo_form" onsubmit="addItem(event)">
        <label for="todo-input" class="sr_only">New item</label>
        <input id="todo-input" type="text" placeholder="What do you need to do?">
        <button type="submit">Add to list</button>
      </form>

      <ul id="todo-list" class="todo_list"></ul>
    </main>
  </div>

  <script src="script.js"></script>
  <script>
    // Initialize to-do list page
    initTodo();
  </script>
</body>
</html>
