<x-section>
<x-container>

    <div class="mb-10">
    @if( have_rows('header') )
    @while( have_rows('header') ) @php(the_row())

        <x-header 
            title="{!! get_sub_field('title') !!}"  
            textVariant="{!! get_sub_field('text_color') !!}"
            variant="{!! get_sub_field('variant') !!}"
            borderEffect="{!! get_sub_field('border') !!}"
        />

    @endwhile
    @endif
    </div>

    <?php if ( have_rows( 'key_points' ) ) : ?>
        <?php while ( have_rows( 'key_points' ) ) :the_row(); ?>
        <div class="md:flex items-center mb-8">
            

            <div class="w-24 h-24 pr-4 md:w-[140px]">
                <?php
                $icon = get_sub_field( 'icon' );
                if ( $icon ) : ?>
                    <img class="w-24 h-24 mr-4" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                <?php endif; ?>
            </div>

            <div class="w-full">
            <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                <span class="block text-lg leading-6"><?php echo esc_html( $title ); ?></span>
            <?php endif; ?>
            </div>

        </div>
        <?php endwhile; ?>
    <?php endif; ?>


</x-container>
</x-section>