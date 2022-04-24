@if (have_rows('section_config'))
    @while (have_rows('section_config')) @php the_row() @endphp

        @php
            $section_background_color = get_sub_field('background_color');
        @endphp

    @endwhile
@endif





<x-section variant="{{ $section_background_color }}">


    <div class="glide">
        <div data-glide-el="track" class="glide__track">
            <ul class="glide__slides">


                <?php if ( have_rows( 'testimonials' ) ) : ?>
                <?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
                <li class="glide__slide">



                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


                        <div class="relative">

                            <blockquote class="mt-10">
                                <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                                    <?php if ( $quote = get_sub_field( 'quote' ) ) : ?>
                                    <?php echo $quote; ?>
                                    <?php endif; ?>
                                </div>

                                <footer class="mt-8">
                                    <div class="md:flex md:items-center md:justify-center">

                                        <div class="md:flex-shrink-0">
                                            <?php
                                $avatar = get_sub_field( 'avatar' );
                                if ( $avatar ) : ?>
                                            <img class="mx-auto h-10 w-10 rounded-full" src="<?php echo esc_url($avatar['url']); ?>"
                                                alt="<?php echo esc_attr($avatar['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>

                                        <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">

                                            <?php if ( $name = get_sub_field( 'name' ) ) : ?>
                                            <div class="text-base font-medium text-gray-900"><?php echo esc_html($name); ?></div>
                                            <?php endif; ?>

                                            <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M11 0h3L9 20H6l5-20z" />
                                            </svg>

                                            <?php if ( $position = get_sub_field( 'position' ) ) : ?>
                                            <div class="text-base font-medium text-gray-500"><?php echo esc_html($position); ?></div>
                                            <?php endif; ?>

                                        </div>

                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>




                </li>

                <?php endwhile; ?>
                <?php endif; ?>


            </ul>
        </div>
        {{-- <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
        </div> --}}
    </div>


</x-section>
