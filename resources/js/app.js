require('./bootstrap')
document.addEventListener("DOMContentLoaded", function(){
    const navLinksWelcomePage = document.querySelectorAll(".nav-link")
    const styleLinksWelcomePage = {
        'background':'#fdfcfc',
        'padding': '10px',
        'border-radius': '7px',
        'color': '#000'
    }
    function applyStyles(link){
        for(const property in styleLinksWelcomePage){
            link.style[property] = styleLinksWelcomePage[property]
        }   
    }
    function removeStyles(link){
        for(const property in styleLinksWelcomePage){
            link.style[property] = ''
        }   
    }
    navLinksWelcomePage.forEach(function(link){
       link.addEventListener("click", function(event){
            applyStyles(link)
           event.preventDefault();  
           const target = this.getAttribute("href");

           setTimeout(function(){
               window.location.href = target;
           }, 500);
           window.addEventListener("pageshow", function(event){
            if(event.persisted){
                removeStyles(link)
            }
           })
       })
    })
})
