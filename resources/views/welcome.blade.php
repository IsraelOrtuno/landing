@extends('layouts.app')

@section('content')
    <div class="container is-fluid is-marginless">
        <div class="parallax">
            <section class="hero is-image">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title is-1 has-text-centered">
                            Web Artisans Conference
                        </h1>
                        <h4 class="subtitle is-6 has-text-centered has-text-centered">

                        </h4>
                        <h2 class="subtitle is-3 has-text-centered">
                            1ª Conferencia Laravel & VueJs en España
                        </h2>
                    </div>
                </div>
            </section>
            <div class="columns">
                <div class="column is-one-third is-offset-one-third">
                    <div class="links level" v-if="showLinks">
                        <a href="/#ponentes" class="level-item has-text-centered">Ponentes</a>
                        <a href="/#localizacion" class="level-item has-text-centered">Localizacion</a>
                        <a href="/#esponsors" class="level-item has-text-centered">Espónsors</a>
                    </div>
                </div>
            </div>
            <div class="bottom-line"></div>
        </div>
    </div>

    <div class="hero is-dark">
        <div class="hero-body">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <section class="content is-large has-text-centered is-secondary is-white has-normal-font">
                        <p>
                            Apuntate ya para ser de los primeros en poder acceder a los tickets, antes de que salgan
                            a la venta para todo el mundo.
                        </p>
                        <div class="control is-grouped" v-if="!isMobile">
                            <p class="control is-expanded has-icon has-icon-right">
                                <input class="input is-large has-text-centered" type="email" placeholder="Email">
                                <i class="fa fa-check"></i>
                            </p>
                            <p class="control">
                                <a class="button is-large is-primary is-outlined">Avisame</a>
                            </p>
                        </div>
                        <p class="control has-addons" v-if="isMobile">
                            <input class="input is-expanded has-text-centered" type="email" placeholder="Email">
                            <a class="button is-primary is-outlined">
                                Avisame
                            </a>
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="hero is-medium is-clear">
        <a name="ponentes"> </a>
        <div class="hero-body">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <section class="content is-large has-text-centered is-secondary has-normal-font">
                        <h1 class="title">
                            Ponentes
                        </h1>
                        <div class="columns">
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Alex Jover</p>
                                    <p class="subtitle">@alexjover</p>
                                </article>
                            </div>
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Eduardo Esclapes</p>
                                    <p class="subtitle">@esclapes</p>
                                </article>
                            </div>
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Boudy de Geer</p>
                                    <p class="subtitle">@boudydegeer</p>
                                </article>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Alex Jover</p>
                                    <p class="subtitle">@alexjover</p>
                                </article>
                            </div>
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Eduardo Esclapes</p>
                                    <p class="subtitle">@esclapes</p>
                                </article>
                            </div>
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Boudy de Geer</p>
                                    <p class="subtitle">@boudydegeer</p>
                                </article>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Alex Jover</p>
                                    <p class="subtitle">@alexjover</p>
                                </article>
                            </div>
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Eduardo Esclapes</p>
                                    <p class="subtitle">@esclapes</p>
                                </article>
                            </div>
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Boudy de Geer</p>
                                    <p class="subtitle">@boudydegeer</p>
                                </article>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Alex Jover</p>
                                    <p class="subtitle">@alexjover</p>
                                </article>
                            </div>
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Eduardo Esclapes</p>
                                    <p class="subtitle">@esclapes</p>
                                </article>
                            </div>
                            <div class="column">
                                <article class="tile is-child box">
                                    <figure class="image is-4by3">
                                        <img src="http://placehold.it/640x480">
                                    </figure>
                                    <p class="title">Boudy de Geer</p>
                                    <p class="subtitle">@boudydegeer</p>
                                </article>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="hero is-medium is-clear">
        <div class="hero-body">
            <a name="localizacion"> </a>
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <section class="content is-large has-text-centered is-secondary has-normal-font">
                        <h1 class="title">
                            Localización
                        </h1>
                        <div class="columns">
                            <div class="column is-half has-text-left">
                                <p>
                                    Un gran evento necesita unas grandes instalaciones. El auditorio de ULab en el
                                    centro
                                    de Alicante es idoneo para un evento de estas caracteristicas.
                                </p>
                                <p>
                                    Capacidad máxima para 110 personas. En pleno centro de la ciudad y a 5 min. de la
                                    playa.
                                </p>
                            </div>

                            <div class="column is-half">
                                <figure class="image is-4by3">
                                    <img src="/images/ulab-1.jpg">
                                </figure>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>




    <div class="hero is-medium is-dark">
        <a name="esponsors"></a>
        <div class="hero-body">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <section class="content is-large has-text-centered is-secondary has-normal-font">
                        <h1 class="title">
                            Espónsors
                        </h1>

                        <h3 class="subtitle is-4">
                            Por supuesto todo esto no seria posible sin la colaboración de nuestros esponsors.
                        </h3>
                        <div class="columns">
                            <div class="column is-half">
                                <a href="http://laraveles.com" class="image sponsor has-text-centered">
                                        <img src="/images/laraveles.png">
                                </a>
                            </div>

                            <div class="column is-half">
                                <a href="https://vuejobs.com" class="image sponsor has-text-centered">
                                        <img src="/images/vuejobs.png">
                                </a>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                <a href="https://coosto.com" class="image sponsor has-text-centered">
                                        <img src="/images/coosto.png">
                                </a>
                            </div>
                            <div class="column">
                                <a href="https://mosaiqo.com" class="image sponsor has-text-centered">
                                        <img src="/images/mosaiqo.png">
                                </a>
                            </div>
                            <div class="column">
                                <a href="https://ulab.es" class="image sponsor has-text-centered">
                                        <img src="/images/ulab.png">
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection