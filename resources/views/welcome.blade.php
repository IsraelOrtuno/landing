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
                        <h2 class="subtitle is-3 has-text-centered is-desktop is-hidden-mobile">
                            1ª Conferencia Laravel & VueJs en España
                        </h2>
                        <h3 class="subtitle is-4 has-text-centered is-desktop is-hidden-mobile">
                            Alicante
                        </h3>
                    </div>
                </div>
            </section>
            <div class="columns is-half-desktop is-hidden-touch">
                <div class="column is-one-third is-offset-one-third">
                    <div class="links level" v-if="showLinks" v-cloak>
                        <a href="/#speakers" class="level-item has-text-centered">Speakers</a>
                        <a href="/#localizacion" class="level-item has-text-centered">Localizacion</a>
                        <a href="/#sponsors" class="level-item has-text-centered">Sponsors</a>
                    </div>

                    <div class="links level logos" v-if="showLinks && !isMobile" v-cloak>
                        <a href="http://laravel.com" target="_blank" class="level-item has-text-centered">
                            <img src="/images/laravel.png" alt="Laravel">
                        </a>
                        <span class="title is-1 is-white"> + </span>
                        <a href="http://vuejs.org" target="_blank" class="level-item has-text-centered">
                            <img src="/images/vuejs.png" alt="VueJS">
                        </a>
                    </div>
                </div>
            </div>
            <div class="bottom-line"></div>
        </div>
    </div>

    <div class="hero is-clear is-mobile is-hidden-desktop">
        <div class="hero-body">
            <div class="columns is-mobile">
                <div class="column">
                    <h2 class="subtitle is-3 has-text-centered is-mobile">
                        1ª Conferencia Laravel & VueJs en España
                    </h2>
                    <h3 class="subtitle is-4 has-text-centered is-mobile">
                        Alicante
                    </h3>
                </div>
            </div>
            <div class="columns is-mobile">
                <div class="column is-half ">
                    <div class="links level has-text-centered logos">
                        <img src="/images/laravel.png" alt="Laravel">
                    </div>
                </div>
                <div class="column is-half">
                    <div class="links level has-text-centered logos">
                        <img src="/images/vuejs.png" alt="VueJS">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero is-dark">
        <div class="hero-body">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <section class="content is-large has-text-centered is-secondary is-white has-normal-font">
                        <p>
                            Apúntate ya para ser de los primeros en poder acceder a los tickets, antes de que salgan
                            a la venta para todo el mundo.
                        </p>
                        <div class="notification is-danger" v-if="errors.has('email')" v-cloak>
                            @{{ errors.first('email') }}
                        </div>

                        <div class="notification is-primary" v-if="response" v-cloak>
                            @{{ response }}
                        </div>
                        <form @submit="validateBeforeSubmit" v-if="!response">
                        <div class="control is-grouped is-desktop" v-if="!isMobile" v-cloak>
                            <p class="control is-expanded has-icon has-icon-right" v-cloak>
                                <input class="input is-large has-text-centered"
                                       :class="{'is-danger' : errors.has('email')}" v-validate
                                       data-vv-rules="required|email" type="email" name="email" placeholder="Email"
                                       v-cloak v-model="email">
                                <i class="fa fa-check"></i>
                            </p>
                            <p class="control" v-cloak>
                                <button :disabled="busy" type="submit" class="button is-large is-primary is-outlined"
                                        v-cloak>Avísame
                                </button>
                            </p>
                        </div>
                        <p class="control has-addons is-mobile" v-if="isMobile" v-cloak>
                            <input class="input is-expanded has-text-centered" v-validate data-vv-rules="required|email"
                                   type="email" placeholder="Email" v-cloak name="email"
                                   v-model="email">
                            <button :disabled="busy" type="submit" class="button is-primary is-outlined" v-cloak>
                                Avísame
                            </button>
                        </p>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="hero is-medium is-clear">
        <a name="speakers"> </a>
        <div class="hero-body">
            <div class="columns is-mobile is-multiline">
                <div class="column is-half-desktop is-half-tablet is-offset-one-quarter-tablet is-offset-one-quarter-desktop is-mobile">
                    <section class="content is-large has-text-centered is-secondary has-normal-font">
                        <h1 class="title">
                            Speakers
                        </h1>
                        <div class="columns is-multiline is-mobile is-half-tablet">
                            <div class="column is-full-mobile is-half-tablet is-half-desktop is-one-third-widescreen">
                                <article class="tile is-child box">
                                    <figure class="image is-1by1">
                                        <img src="/images/speakers/@alexjoverm.jpg">
                                    </figure>
                                    <p class="title">Alex Jover Morales</p>
                                    <p class="subtitle">
                                        <a href="https://twitter.com/alexjoverm" target="_blank">@alexjoverm</a>
                                    </p>
                                </article>
                            </div>
                            <div class="column is-full-mobile is-half-tablet is-half-desktop is-one-third-widescreen">
                                <article class="tile is-child box">
                                    <figure class="image is-1by1">
                                        <img src="/images/speakers/@esclapes.jpg">
                                    </figure>
                                    <p class="title">Eduardo Esclapés</p>
                                    <p class="subtitle">
                                        <a href="https://twitter.com/esclapes" target="_blank">@esclapes</a>
                                    </p>
                                </article>
                            </div>
                            <div class="column is-full-mobile is-half-tablet is-half-desktop is-one-third-widescreen">
                                <article class="tile is-child box">
                                    <figure class="image is-1by1">
                                        <img src="/images/speakers/@boudydegeer.jpg">
                                    </figure>
                                    <p class="title">Boudy de Geer</p>
                                    <p class="subtitle">
                                        <a href="https://twitter.com/boudydegeer" target="_blank">@boudydegeer</a>
                                    </p>
                                </article>
                            </div>
                            <div class="column is-full-mobile is-half-tablet is-half-desktop is-one-third-widescreen">
                                <article class="tile is-child box">
                                    <figure class="image is-1by1">
                                        <img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%C2%BFTienes%20algo%20que%20contar?&w=400&h=400">
                                    </figure>
                                    <p class="title">Aquí tu nombre</p>
                                    <p class="subtitle">
                                        <a href="mailto:team+speaker@webartisans.es">
                                            Contacta
                                        </a>
                                    </p>
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
            <div class="columns is-mobile">
                <div class="column is-half-tablet is-offset-one-quarter-tablet is-full-mobile">
                    <section class="content is-large has-text-centered is-secondary has-normal-font">
                        <h1 class="title">
                            Localización
                        </h1>
                        <div class="columns is-multiline is-mobile">
                            <div class="column is-half-desktop is-full-tablet is-full-mobile has-text-left">
                                <p>
                                    Un gran evento necesita unas grandes instalaciones. El auditorio de ULab en el
                                    centro
                                    de Alicante es idóneo para un evento de estas características.
                                </p>
                                <p>
                                    Capacidad máxima para 110 personas. En pleno centro de la ciudad y a 5 min. de la
                                    playa.
                                </p>
                            </div>

                            <div class="column is-half-desktop is-full-tablet is-full-mobile is-block-desktop-only">
                                <figure class="image is-4by3">
                                    <img src="/images/ulab.jpg">
                                </figure>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>




    <div class="hero is-medium is-dark">
        <a name="sponsors"></a>
        <div class="hero-body">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <section class="content is-large has-text-centered is-secondary has-normal-font">
                        <h1 class="title">
                            Sponsors
                        </h1>

                        <h3 class="subtitle is-4">
                            Por supuesto todo esto no sería posible sin la colaboración de nuestros sponsors.
                        </h3>
                        <div class="columns">
                            <div class="column is-half">
                                <a href="http://laraveles.com" class="image sponsor has-text-centered">
                                    <img src="/images/sponsors/laraveles.png">
                                </a>
                            </div>

                            <div class="column is-half">
                                <a href="https://coosto.com" class="image sponsor has-text-centered">
                                    <img src="/images/sponsors/coosto.png">
                                </a>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                <a href="https://vuejobs.com/?ref=webartisans" class="image sponsor has-text-centered">
                                    <img src="/images/sponsors/vuejobs.png">
                                </a>
                            </div>
                            <div class="column">
                                <a href="https://mosaiqo.com" class="image sponsor has-text-centered">
                                    <img src="/images/sponsors/mosaiqo.png">
                                </a>
                            </div>
                            <div class="column">
                                <a href="https://ulab.es" class="image sponsor has-text-centered">
                                    <img src="/images/sponsors/ulab.png">
                                </a>
                            </div>
                        </div>


                        <p class="subtitle is-6">
                            Si quieres patrocinar el evento, ponte en contacto con nosotros
                            <a href="mailt:team@webatrisans.es">team+sponsor@webatrisans.es</a>.
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection