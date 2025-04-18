<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner elem to-fade-in">
            <img class="logoCenter" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <video alt="video fleurs & chats"  width="100%" height="100%" autoplay loop muted>
                <source src="<?php echo get_template_directory_uri() . '/assets/images/koukakivideo.mp4'; ?>">
            </video>
            <object
                type="image/png"
                data=""
                width="150"
                height="150"
                aria-label="This image should exist, but alas it does not"
                >
                <img src="screenshot.png" alt="Fallback image" width="150" height="150" />
            </object>
        </section>
        <section id="#story" class="story elem to-fade-in">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
                <p>Loin, très loin, au-delà des monts Karma, à mille lieues des pays Mizukage et Kagura, demeurent les Nekos Nekos. Ils vivent en retrait, sur les côtes du Funato, un vaste océan d’arbres fruitiers. Un petit ruisseau coule en leur lieu et les approvisionne en régalades nécessaires en tout genre ; un pays paradisiaque... Sauf pour Kawaneko, le premier chat à avoir développé une intolérance à la fleur d’oranger, qui malheureusement pour lui est la base de toute production du pays. Serait-ce une maladie, un virus, le début d’une pandémie ou un sort jeté par le sorcier Jaakuna ? Kawaneko et sa bande partent en quête de réponses pour arrêter le malveillant Jaakuna, et retrouver l’ordre chez les Nekos Nekos.

</p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article class="elem to-fade-in divChars" id="characters">
            <div class="main-character swiper mySwiper">
                    <h3>Les personnages</h3>
                    <div class="swiper-wrapper">
                        <?php
                        while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure class="swiper-slide">';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                        ?>
                    </div>
                </div>
            </article>
            <article class="elem to-fade-in" id="place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?> Le pays fantastique des Nekos Nekos : Nekosnotochi. Loin, très loin, au-delà des monts Karma, à mille lieues des pays Mizukage et Kagura. Ils vivent en retrait, sur les côtes du Funato, un vaste océan d’arbres fruitiers. Un petit ruisseau coule en leur lieu et les approvisionne en régalades nécessaires en tout genre ; un pays paradisiaque... </p>
                    <div id="allCloudsDiv">
                        <div class="cloud bigCloudAnim">
                            <img src=<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?>>
                        </div>
                        <div class="cloud littleCloudAnim">
                            <img src=<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?>>
                        </div>
                    </div>
                </div>

            </article>
        </section>


        <section class="elem to-fade-in" id="studio">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <section class="elem to-fade-in" id="oscarsSection">
            <div id="divRectangleOscars">
                <div id="divParagrapheOscars">
                    <div id="divBackgroundImgOscar">
                        <p id="paragrapheOscars">Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</p>
                    </div>
                    <div id="divImageOscars">
                        <img id="imgOscars" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/oscars2.png'; ?> " alt="image des oscars">
                    </div>
                </div>
            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer(); ?>