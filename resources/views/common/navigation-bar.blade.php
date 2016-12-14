<nav class="nav has-shadow" v-if="showMenu">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item is-brand" href="#">
                Web Artisans
            </a>
        </div>

        <span class="nav-toggle" @click="toggleMenu">
            <span></span>
            <span></span>
            <span></span>
        </span>

        <div class="nav-right nav-menu" :class="{'nav-menu-show' : menu}">
            <a href="/#speakers" class="nav-item has-text-centered">Speakers</a>
            <a href="/#localizacion" class="nav-item has-text-centered">Localización</a>
            <a href="/#sponsors" class="nav-item has-text-centered">Sponsors</a>
        </div>
    </div>
</nav>
