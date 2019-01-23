<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Create a new project</h1>

    <form method="POST" action="/projects">

      {{ csrf_field() }}

      <div>
        <input type="text" name="title" placeholder="Project Title" />
      </div>

      <div>
        <textarea name="description" placeholder="Project Description"></textarea>
      </div>

      <div>
        <button type="submit">Create Project</button>
      </div>

    </form>

  </body>
</html>
