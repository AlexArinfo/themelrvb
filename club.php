<?php get_header();
//Template Name: Club
?>

<?php 
get_template_part( './template-parts/heroup'); 
?>

<main id="club">
<!-- section adhésion -->
<section id="adhesion">
<div class="container">

<div id="test">
<div id="leftadhe">

<article>
<h2>Adhésion HelloAsso LRVB</h2>
<?php if ( have_rows( 'section_adhesion' ) ) : ?>
    <?php while ( have_rows( 'section_adhesion' ) ) : the_row(); ?>
    <?php if ( have_rows( 'nouveau_licencie' ) ) : ?>
        <?php while ( have_rows( 'nouveau_licencie' ) ) : the_row(); ?>
        <div id="new">
        <p><?php the_sub_field( 'texte_nouveau_licencie' ); ?></p>
        <?php $lien_nouveau_licencie = get_sub_field( 'lien_nouveau_licencie' ); ?>
        <?php if ( $lien_nouveau_licencie ) : ?>
            <a href="<?php echo esc_url( $lien_nouveau_licencie['url'] ); ?>" target="<?php echo esc_attr( $lien_nouveau_licencie['target'] ); ?>"><?php echo esc_html( $lien_nouveau_licencie['title'] ); ?></a>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <?php if ( have_rows( 'deja_licencie' ) ) : ?>
                <?php while ( have_rows( 'deja_licencie' ) ) : the_row(); ?>
                <div id="old">
                <p>	<?php the_sub_field( 'texte_deja_licencie' ); ?></p>
                <?php $lien_deja_licencie = get_sub_field( 'lien_deja_licencie' ); ?>
                <?php if ( $lien_deja_licencie ) : ?>
                    <form action="<?php echo esc_url( $lien_deja_licencie['url'] ); ?>" method="get" target="<?php echo esc_attr( $lien_deja_licencie['target'] ); ?>">
                    <button type="submit"><?php echo esc_html( $lien_deja_licencie['title'] ); ?></button>
                    </form>
                    
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    
                    </article>
                    
                    </div>
                    <div id="rightadhe">
                    </div>
                    </div>
                    </div>
                    </section>
                    
                    <!-- section infos pratiques -->
                    <section id="infospratiques">
                    <div class="container">
                    <h2>Informations Pratiques</h2>
                    <div class="cardsinfos">
                    <?php if ( have_rows( 'section_informations_pratiques' ) ) : ?>
                        <?php while ( have_rows( 'section_informations_pratiques' ) ) : the_row(); ?>
                        
                        <?php 
                        get_template_part( './template-parts/cardclub'); 
                        ?>
                        
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>   
                        
                        
                        </section>
                        
                        <!-- section crénaux et calendrier -->
                        <section id="crecal">
                        <div class="crenaux">
                        <div class="contcrenaux">
                        <h2>Crenaux d'entrainement</h2>
                        </div>
                        </div>
                        
                        <div class="calendrier">
                        <div class="contcalendrier">
                        <h2>Calendrier</h2>
                        </div>
                        </div>
                        </section>
                        
                        <!-- section galerie photo -->
                        <section id="galerie">
                        
                        </section>
                        
                        <!-- section partenaire -->
                        <section id="partenaire">
                        
                        </section>
                        </main>