// MODALS POUR LA GALLERIE
function getImg(modal){ 
    let goodModal = document.getElementById(modal); //Récupère les id firstModal, secondModal etc...
    let getModals = document.querySelectorAll(".boxSizing"); 
    let modalsLength = getModals.length;
  
    // Boucle sur chaque élément pour y ajouter un "display = none" tour à tour
    for (let i = 0; i < modalsLength; i++){
        getModals[i].style.display = "none";
    }
    // Ouvrir la bonne modal et paramètrer le button 'close'
    if(modal != 'close'){
      goodModal.style.display = "flex";
    } else if (window.addEventListener("click", function(){
      goodModal.style.display = "none";
    }));
  };