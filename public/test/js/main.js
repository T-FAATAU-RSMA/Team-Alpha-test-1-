// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 1000
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
    easing: "easeOutExpo",
    duration: 700,
    // le temps avant d'afficher
    delay: 2000
  })
  .add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
    
  }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    // le temps d'affichage avant de disparaitre
    delay:8000 
  });
  
  
  

  
var textWrapper = document.querySelector('.ml12 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml12 .line',
    translateX: [0, document.querySelector('.ml12 .letters').getBoundingClientRect().width + 12],
    easing: "easeOutExpo",
    duration: 600,
    // le temps avant d'afficher
    delay:3000
  }).add({
    targets: '.ml12 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 33 * (i+2)
  }).add({
    targets: '.ml12',
    opacity: 0,
    duration: 600,
    easing: "easeOutExpo",
    // le temps d'affichage avant de disparaitre
    delay: 8000
  });


  var textWrapper = document.querySelector('.ml13 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml13 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 1000
  })
  .add({
    targets: '.ml13 .line',
    translateX: [0, document.querySelector('.ml13 .letters').getBoundingClientRect().width + 15],
    easing: "easeOutExpo",
    duration: 700,
    // le temps avant d'afficher
    delay: 3000
  }).add({
    targets: '.ml13 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 32 * (i+3)
  }).add({
    targets: '.ml13',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    // le temps d'affichage avant de disparaitre
    delay:8000 
  });



  var textWrapper = document.querySelector('.ml14 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml14 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 1000
  })
  .add({
    targets: '.ml14 .line',
    translateX: [0, document.querySelector('.ml14 .letters').getBoundingClientRect().width +20],
    easing: "easeOutExpo",
    duration: 700,
    // le temps avant d'afficher
    delay: 3700
  }).add({
    targets: '.ml14 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 31 * (i+4)
  }).add({
    targets: '.ml14',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    // le temps d'affichage avant de disparaitre
    delay:8000 
  });

  