import 'waypoints/lib/jquery.waypoints.min.js';


export default {
    init() {    

        var waypoints = document.querySelectorAll('.fadeup-group');
        for (var i = waypoints.length - 1; i >= 0; i--) {

                var waypoint = new Waypoint({
                    element: waypoints[i],
                    handler: function(direction) {
                            this.element.classList.toggle('in-view');
                    },
                    offset: '65%',
                });

        }


//         const fadeGroup = document.querySelector('.fade-group')

//         var waypoint = new Waypoint({
//         element: document.querySelector('.fadeup-group'),
//         handler: function(direction) {
//             notify(this.element.id + ' triggers at ' + this.triggerPoint)
//         },
//         offset: '75%'
//         })

    }
}


// export default {
//     init() {
          
//         const fadeUpInit = () => {
//         document.querySelector('.fadeup-group').waypoint(

//         function (direction) {
//           if (direction === 'down') {
//             document.querySelector(this.element).classList.add('is-inview')
//             this.destroy()
//           }
//         },{
//           offset: '80%',
//         }
        
//       )
//     }

//     fadeUpInit()
    
//     const resizeObserver = new ResizeObserver(() => fadeUpInit())
//     resizeObserver.observe(document.body)
//   },
// }

// var waypoint = new Waypoint({
//     element: document.getElementById('element-waypoint'),
//     handler: function(direction) {
//       notify(this.element.id + ' triggers at ' + this.triggerPoint)
//     },
//     offset: '75%'
//   })