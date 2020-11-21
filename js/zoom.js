const zoomable = document.getElementById("zoom")
zoomable.addEventListener("click", function(){
    if(zoomable.className == "welcome-bottom"){
        this.animate([
            // keyframes
            { transform: "scale(1.2)" }
          ],
          { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'ease',
            fill: 'forwards'
          })
    } else {
        this.animate([
            // keyframes
            { transform: "scale(1)" }
          ],
          { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'ease',
            fill: 'forwards'
          })
    }
    zoomable.classList.toggle("zoomado")
})
