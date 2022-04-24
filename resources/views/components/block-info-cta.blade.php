<?php if ( have_rows( 'global_block_info_cta', 'options' ) ) : ?>
<?php while ( have_rows( 'global_block_info_cta', 'options' ) ) : the_row(); ?>
		

    <x-section class="w-full overflow-hidden bg-primary-600">
    <x-container>


        <div class="flex flex-col-reverse xl:flex-row relative lg:justify-between">


            <div class="xl:w-2/3 md:text-center xl:text-justify">

                <div class="text-white">
                    <?php if ( $title = get_sub_field( 'title', 'options' ) ) : ?>
                        <h3 class="text-2xl text-third lg:text-4xl font-bold mb-3 xl:mb-6"><?php echo esc_html( $title ); ?></h3>
                    <?php endif; ?>
                    
                    <?php if ( $content = get_sub_field( 'content', 'options' ) ) : ?>
                        <p class="text-third text-base lg:text-xl mb-4"><?php echo $content; ?></p>
                    <?php endif; ?>
                </div>

                <button class="bg-white text-primary-600 py-4 px-6">
                <?php
                    $link = get_sub_field( 'link', 'options' );
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
        
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="flex">
                        <svg class="w-5 mr-4 text-third" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M112 368h96c8.8 0 16-7.2 16-16v-96c0-8.8-7.2-16-16-16h-96c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V160h352v298z" class=""></path>
                        </svg>
                        <span class="text-2xl text-third font-semibold"><?php echo esc_html( $link_title ); ?></span>
                    </a>
                <?php endif; ?>
                </button>
            </div>


            <div class="xl:absolute xl:right-0 mb-4 lg:mb-4 xd:mb-0">
            <div class="relative">


                <figure>
                   <?php
                    $cta_avatar = get_sub_field( 'cta_avatar', 'options' );
                    if ( $cta_avatar ) : ?>
                        <img class="w-32 h-32 object-cover xl:w-64 xl:h-64 mx-auto rounded-full" src="<?php echo esc_url( $cta_avatar['url'] ); ?>"  alt="<?php echo esc_attr( $cta_avatar['alt'] ); ?>" />
                    <?php endif; ?>
                </figure>

               

            </div>
            </div>


        </div>


    </x-container>
    </x-section>


<?php endwhile; ?>
<?php endif; ?>