/**
 * External Dependencies
 */


// import fadeup from './components/fadeup';
// import waypoints from './components/waypoints';



//  window.addEventListener('DOMContentLoaded', (event) => {

//     waypoints.init();
//     // fadeup.init();

// });

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
// import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'

import Glide from '@glidejs/glide';
  




window.addEventListener('DOMContentLoaded', (event) => {



	new Glide('.glide').mount(); 



	if(document.getElementById("hamburger")) {

		
		const buttonCloseMenu = document.querySelector('.js-button__close-menu');
		const buttonOpenMenu = document.querySelector('.js-button__open-menu');

        const hamburger = document.getElementById("hamburger");
        const menu = document.querySelector(".js-mobile-navigation");
        // let open = false;
 

        // const change = () => {
		// 	if (!open) {
		// 		hamburger.classList.add("open");
		// 		menu.classList.add("active");
		// 	} else {
		// 		hamburger.classList.remove("open");
		// 		menu.classList.remove("active");
		// 	}
		// 	open = !open;
        // };

		const openMenu = () => {
			menu.classList.add('active')
		}

		const closeMenu = () => {
			menu.classList.remove('active')
		}

		buttonOpenMenu.addEventListener("click", openMenu);
        buttonCloseMenu.addEventListener("click", closeMenu);


    }








	const modalTeam = document.querySelectorAll('.js-modal-team');
	const teamMember = document.querySelectorAll('.js-team-member');
												// js-team-member-name

	const body = document.body;

	if(teamMember) {

		teamMember.forEach(element => {
			element.addEventListener('click', function(event) {

				event.stopPropagation();

				let elementID = event.currentTarget.id;
				let modalID = '#modal-' + elementID;


				let modal = document.querySelector(modalID);
				

				let closeButton = document.querySelectorAll('.js-modal-close');
				let modalOverlays = document.querySelectorAll('.js-modal-overlay');

				modal.classList.add("flex");
				modal.classList.remove("hidden");
				body.classList.add("bg-gray-700", "overflow-hidden");


				closeButton.forEach(el => {
					el.addEventListener('click', (e) => {
					 
						modal.classList.add('hidden');
						modal.classList.remove('flex');
						body.classList.remove('overflow-hidden')
						
					})
				});

				modalOverlays.forEach(el => {
					el.addEventListener('click', (e) => {
					 
						modal.classList.add('hidden');
						modal.classList.remove('flex');
						body.classList.remove('overflow-hidden')
						
					})
				})
				



			});
		});
		
	}







	



});





(function() {

	AOS.init({
		duration: 1200,		 
    })




	
	

})