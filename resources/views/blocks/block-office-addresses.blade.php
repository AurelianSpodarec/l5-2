

<x-section>
    <x-container>


        <h2 class="text-3xl font-extrabold text-gray-900">Our offices</h2>
        {{-- <p class="mt-6 text-lg text-gray-500 max-w-3xl">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p> --}}

        <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-5">


			<?php if ( have_rows( 'offices' ) ) : ?>
				<?php while ( have_rows( 'offices' ) ) :the_row(); ?>
					
					

					

					<div>
						<?php if ( $title = get_sub_field( 'title' ) ) : ?>
						<h3 class="text-lg font-medium text-gray-900"><?php echo esc_html( $title ); ?></h3>
						<?php endif; ?> 
						{{-- <span class="block">4556 Brendajjn Ferry</span>
						<span class="block">Los Angeles, CA 90210</span> --}}
						<?php if ( $content = get_sub_field( 'content' ) ) : ?>
						<div class="mt-2 text-base text-gray-500">
							<?php echo $content; ?>
						</div>
						<?php endif; ?>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

 



        </div><!-- /grid -->


    </x-container>
</x-section>