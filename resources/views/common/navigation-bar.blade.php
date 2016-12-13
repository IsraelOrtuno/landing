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
            <a href="/#ponentes" class="nav-item has-text-centered">Ponentes</a>
            <a href="/#localizacion" class="nav-item has-text-centered">Localizacion</a>
            <a href="/#esponsors" class="nav-item has-text-centered">Espónsors</a>
        </div>
    </div>
</nav>
