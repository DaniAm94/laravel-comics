<section id="navigation">
    <div class="container">
        <nav>
            <ul>
                <li v-for="(link, i) in links" :key="i">
                    <a href="#">
                        <img class="icon" :src="" :alt="link.text">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
