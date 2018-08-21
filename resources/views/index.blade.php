@extends('layouts.wel')

@section('content')
    <section id="service">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 top-nav-right" style="margin-top: 10% ;">
                    <h1 class="service-title">
                        Services
                    </h1>
                </div>
                <div class="col-12">
                    <p class="subtitle" align="center">Nos secteur d'activités</p>
                </div>
            </div>
        </div>
        <div class="row service-boyd">

            <div class="col-md-3 col-sm-12 ">
                <img src="{{asset("logo/batiments.png")}}" class="img-fluid" width="150px;"
                     style=" border-radius: 20%;"/>

                <h5 class="service-subtitle"> Promotion Immobliére</h5>
                <p class="service-paragraph">3A vous trouveras le local ou la maison de vos rêves qui vous
                    convient</p>
            </div>
            <div class="col-md-3  col-sm-12">
                <img src="{{asset("logo/constrcution.png")}}" class="img-fluid" width="150px;"
                     style=" border-radius: 20%;"/>


                <h5 class="service-subtitle"> Bâtiment et Construction</h5>
                <p class="service-paragraph">Besoin d'un immeuble ou d'unemaison ? Il vous suffit de demander</p>
            </div>
            <div class="col-md-3  col-sm-12">
                <img src="{{asset("logo/cuisine.png")}}" class="img-fluid" width="150px; "
                     style=" border-radius: 20%;"/>

                <h5 class="service-subtitle"> Cuisine et dressing</h5>
                <p class="service-paragraph">Pour des raisons domestiques ou proffessionel le groupe 3A
                    vous installe la cuisine dont vous avez besoin.</p>

            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{asset("logo/services.png")}}" class="img-fluid" width="150px;"
                     style=" border-radius: 20%;"/>

                <h5 class="service-subtitle"> Service et entretient</h5>
                <p class="service-paragraph">Des panneaux à installer ou une ancienne pancarte à renouveller, on
                    se s'occupe de vous.</p>
            </div>
        </div>
        </div>
    </section>
    <section id="propos">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 top-nav-right" style="margin-top: 10% ;">
                    <h1 class="propos-title">
                        A Propos
                    </h1>
                </div>
                <div class="col-12"
                     style="display: table; text-align: center; margin-top: 5%;     vertical-align: middle;">
                    <h4 style="display: table-cell; ">La société 3A Service s'occupe de vous faciliter tout les aspets
                        de votre exploitation</h4>

                </div>

                <div class="col-3"></div>
                <div class="col-6 propos-block">
                    <h5 style="text-align: center;">En 2014 , nous avons grandit vite</h5>

                    <p>Groupe 3A a vu le jour en 2014 en prenant comme valeur la satisfaction de ses clients en leurs
                        offrant des services adapté à leur besoin et ceux dans differents domaines.</p>
                </div>
                <div class="col-3"></div>
                <div class="col-12" style="text-align: center; padding-right: 30%; padding-left: 30%;">
                    <h5 style="font-weight: bold ; ">Nous sommes nés en 1946</h5>
                    <p>

                        Bâti sur une experience familiale heritée depuis plus de 40 ans au service de la construction
                        et domaines du batiment, Ayant travailler depuis 1946 sur des grands projets d'état, nous
                        continuons, à ce jour, à être au coeur du developpement, de l'urbanisation et de la
                        modernité.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section id="competences">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 top-nav-right" style="margin-top: 5% ; margin-bottom: 5%;">
                    <h1 class="competence-title">
                        Competences
                    </h1>
                </div>
                <div class="col-12" style="padding-right: 30%; padding-left: 30%;" align="center">

                    <p>Nos solutions couvre plusieurs aspects selon vos besoin. Importation des Marchandises, machines,
                        élements... nous nous occupons de vous livrer toute sorte</p>
                </div>

            </div>
        </div>

    </section>
    <section id="equipes">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 top-nav-right" style="margin-top: 10% ;margin-bottom: 10%;">
                    <h1 class="propos-title">
                        Qui sommes nous ?
                    </h1>
                </div>

                <div class="col-2">
                    <img src="{{asset("images/lassad.jpg")}}" class="img-fluid img-equipe"/>

                </div>
                <div class="col-2 ">

                    <h5 style="font-weight: bold;">Lassaad Ouali</h5>
                    <p>Gérant de cuisine et des services</p>
                </div>
                <div class="col-2">
                    <img src="{{asset("images/lamjad.jpg")}}" class="img-fluid img-equipe"/>
                </div>
                <div class="col-2">

                    <h5 style="font-weight: bold;">Lamjed Ouali</h5>
                    <p>Gérant du bâtiment</p>
                </div>
                <div class="col-2">
                    <img src="{{asset("images/aymen.jpg")}}" class="img-fluid img-equipe"/>

                </div>
                <div class="col-2">

                    <h5 style="font-weight: bold;">Aymen Ouali</h5>
                    <p>Gérant de la promotion</p>
                </div>
            </div>
        </div>

    </section>
    <section id="contact">
        <div class="container-fluid row">
            <div class="col-12 title-div">
                <h1 id="contact-title">Nous Contacter</h1>
            </div>
        </div>
        <div class="container-fluid" style="padding-right: 20%; padding-left: 20%;">
            <div class="row   contact-block">
                <div class="col-lg-12" style="margin-bottom: 50px;"><h2 align="center" style="font-weight: bold;">
                        Ecrivez Nous</h2></div>
                <div class="col-lg-12">
                    <form id="contactForm" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Votre Nom *"
                                           required="" data-validation-required-message="Please enter your name."
                                           aria-invalid="false">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Votre Email *"
                                           required=""
                                           data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Votre Telephone *"
                                           required=""
                                           data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Votre Message *"
                                              required=""
                                              data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
                                        type="submit">Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <section id="footer" class="top-nav">
        <div class="row container-fluid">
            <div class="col-6">
                <p align="left" style="color: white;"> Power by AleriaConsulting</p>
            </div>
        </div>

    </section>

@endsection

