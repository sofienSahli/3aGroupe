@extends('layouts.wel')

@section('content')
    <div class="container-fluid " style="padding-left: 0px ; padding-right: 0px ;">

        <div class="row bg-white">
            <div class="col-sm">

                <img src="{{asset("images/cuisine.png")}}" class="img-fluid" style="margin-top: 5px; margin-left: 5px ; margin-bottom: 5px; ">
            </div>
            <div class="col-sm" style="margin-top: 5%;">
                <h1> {{ $compagny->name }}</h1>
                <p> Address : </p>
                <p> E-mail : {{ $compagny->emailGerant }}</p>

            </div>
        </div>
        <!--


                     <div class="col-4 " style="box-shadow: #6c757d; background-color: #636b6f; height: 200px; ">
                         <ul class="nav flex-column">
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Link</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Link</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Link</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link disabled" href="#">Disabled</a>
                             </li>
                         </ul>

                     </div>
                     <div class="col-8">

                             <div class="card text-dark"
                                  style="padding-bottom: 20px ; margin-top: 20px ; padding-bottom: 20px ; padding-right: 20px; padding-left: 20px;  ">
                                 <div class="card-body">
                                     <h4 class="card-title"></h4>
                                     <p class="card-text"></p>
                                 </div>
                                 <img class="card-img-bottom img-fluid" src="" alt="Card image">
                             </div>


                     </div>
     -->

        @foreach($comp as $post)
            <div class="row " style="margin-top: 10% ; ">

                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset($post->image)}}" alt=""
                             style="height: 300px ; width: 700px;">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->description}}</p>
            <!--        <a class="btn btn-primary" href="#">View Project</a> -->
                </div>
            </div>
            <hr>
            {{ $comp->links() }}

        @endforeach
    </div>
    </div>
@endsection

