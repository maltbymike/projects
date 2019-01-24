@extends('layout')

@section('content')

  <h1 class="title">Edit Project</h1>

  <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom:1em;">

    @method('PATCH')
    @csrf

    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input class="input" id="title" name="title" type="text" value="{{ $project->title }}" placeholder="Title">
      </div>
      <p class="help">This_is_a_help_text</p>
    </div>

    <div class="field">
      <label class="label" for="description">Description</label>
      <div class="control">
        <textarea name="description" class="textarea">{{ $project->description }}</textarea>
      </div>
      <p class="help">This_is_a_help_text</p>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link">Update Project</button>
      </div>
    </div>

  </form>

  <form method="POST" action="/projects/{{ $project->id }}">

    @method('DELETE')
    @csrf

    <div class="field">
      <div class="control">
        <button type="submit" class="button">Delete Project</button>
      </div>
    </div>
  </form>

@endsection
