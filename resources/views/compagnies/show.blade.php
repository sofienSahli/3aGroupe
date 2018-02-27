@extends('layouts.app')
@section('content')

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{$compagnie->name}}</h1>
          <p class="lead text-muted">{{$compagnie->description}}</p>
          <p>
            <a href="#" class="btn btn-primary my-2"  data-toggle="modal" data-target="#exampleModal" >Ajouter des posts</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>
      @foreach($compagnie->posts as $post)
      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                 src="{{$post->image}}" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text"> {{$post->description}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

      </div>
        </div>
          </div>
  @endforeach
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form action="localhost:8000" method="get">
        <div class="modal-body">

            <div class="form-group" methode="get">
              <label for="recipient-name" class="col-form-label">Titre:</label>
              <input type="text" class="form-control" id="recipient-name">

              <label for="message-text" class="col-form-label">Description:</label>
              <textarea class="form-control" id="message-text"></textarea>


              <label for="message-text" class="col-form-label">Description:</label>
              <input type="file" class="form-control" id="message-text"/>

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Ajouter Post"/>

        </form>

        </div>
      </div>
    </div>
  </div>
@endsection
