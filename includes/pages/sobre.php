<section class="sobre">
    <div class="container">
        <div class="textos">
            <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong> Sit laborum suscipit animi tenetur non dolores maiores, omnis, quo minus, obcaecati quasi nemo voluptatem deleniti amet incidunt maxime ab eligendi dolore.</p>
        </div>

        <?php query_posts( 'post_type=habilidades' ) ; ?>
<ul class="habilidades">
            <?php if(have_posts()): ?>

                <?php while(have_posts()) : the_post(); ?>

                    <li class="habilidade-<?php the_field('nivel'); ?>">
                        <h2>
                        <style>
                            .<?php the_field('icone'); ?> {
                                <?php if(get_field('cor_do_icone')) : ?> 
                                   color: <?php the_field('cor_do_icone'); ?>;
                                <?php else : ?>
                                   color: #000000;
                                <?php endif; ?>
                            }
                        </style>
                            <i class="fa <?php the_field('icone'); ?>"></i> <strong><?php the_title(); ?></strong> // <?php the_field('nivel'); ?>0%
                            <div class="barra"><span></span></div>
                        </h2>
                    </li>
                <?php endwhile; ?>

            <?php else :?>
                Não há habilidades cadastradas...

            <?php endif; ?>

        <?php wp_reset_query(); ?>

        
            
            
            
        </ul>

            <a href="portfolio.php" class="botao medio"><i class="fa fa-briefcase"></i> Acessar Portfolio</a>
    </div>
</section>