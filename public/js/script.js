function removeAll() {
    buttons = document.querySelectorAll(".manual-btn");
    images = document.querySelectorAll(".images img");
    
    for(i of [...buttons, ...images]) i.classList.remove("checked");
  }
  
  function add1(i) {
    document.querySelectorAll(".manual-btn")[i].classList.add("checked");
    document.querySelectorAll(".images img")[i].classList.add("checked");
  
    count = i;
  }
  
  let count = 0;
  
  setInterval(() => {
    nextImage();
  }, 5000);
  
  function nextImage() {
    count++;
  
    removeAll();
  
    if(count>3) {
      count = 0
      
      add1(0);
      return;
    }
  
    add1(count);
  }
  
  
  for(let i of [0,1,2,3]) {
    document.querySelectorAll(".manual-btn")[i].addEventListener("click", () => {
      removeAll();
      add1(i);
    });
  }
  
  
  // guardando menu e botão
  const moreButton = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-nav');
  
  
  // função de ativar "mobile menu" ou desativar(dependendo da situação)
  function toggleMenu() {
    moreButton.classList.toggle("is-active");
    mobileMenu.classList.toggle("is-active");
  }
  
  
  // dando função ao botão
  moreButton.addEventListener("click", toggleMenu);