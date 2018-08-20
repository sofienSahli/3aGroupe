@extends('layouts.app')
@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <img src=" {{asset($compagnie->logo)}}" class="img-fluid"/>
            <p class="lead text-muted">{{$compagnie->description}}</p>
            <a href="#" class="btn btn-primary my-2" data-toggle="modal" data-target="#addModal">Ajouter des
                posts</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach($compagnie->posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 style="height: 225px; width: 100%; display: block;"
                                 src="{{ asset($post->image)}}" data-holder-rendered="true">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}} </h5>
                                <p class="card-text"> {{$post->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-danger"
                                                data-toggle="modal" data-target="#exampleModal">Supprimer
                                        </button>
                                        <button data-toggle="modal" data-target="#exampleModalCenter"
                                                type="button" class="btn btn-sm btn-outline-primary">Modifer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{url("/post/".$post->id)}}" method="PUT">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$post->title}}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img class="img-fluid"
                                                         style="height: 225px; width: 100%; display: block;"
                                                         src="{{ asset($post->image)}}" data-holder-rendered="true">
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" name="description"/>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                        </button>
                                        <input type="submit" class="btn btn-primary" value="Sauvegarder modification"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <p> Etes-vous sur de vouloire supprimer ce post ? </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                                    <form action="{{url("/post/".$post->id)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <input type="submit" class="btn btn-danger" value="Supprimer"/>
                                        <input type="hidden" class="btn btn-danger" value="{{$post->id}}"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouveau Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="compagnie" value="{{ $compagnie->id }}">
                    <div class="modal-body">

                        <div class="form-group" methode="get">
                            <label for="recipient-name" class="col-form-label">Titre:</label>
                            <input type="text" class="form-control" id="recipient-name" name="title">

                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="message-text" name="description"></textarea>


                            <label for="message-text" class="col-form-label">Description:</label>
                            <input type="file" class="form-control" name="image" id="message-text"/>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Ajouter Post"/>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
@endsection
