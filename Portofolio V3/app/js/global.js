document.getElementById('hover').addEventListener('mouseover', () => { 
        document.getElementById('hover').style.transform = "scale(0)"
        document.getElementById('hover').style.opacity = "0.1"
        document.getElementById('hover').style.transition = "all 0.2s"
        setTimeout(function(){
            document.getElementById('hover').style.display = 'none';
            document.getElementById('hover_deux').style.display = 'block'; 
        }, 200)
        setTimeout(function(){
            document.getElementById('hover_deux').style.transition = "all 0.2s"
            document.getElementById('hover_deux').style.transform = "scale(1)"
            document.getElementById('hover_deux').style.opacity = "1"
        }, 300)
})

document.getElementById('hover_deux').addEventListener('mouseout', () => { 
        document.getElementById('hover_deux').style.transform = "scale(0)"
        document.getElementById('hover_deux').style.transition = "all 0.2s"
        document.getElementById('hover_deux').style.opacity = "0.1"
        setTimeout(function(){
            document.getElementById('hover_deux').style.display = 'none';
            document.getElementById('hover').style.display = 'block'; 
        }, 200)
        setTimeout(function(){
            document.getElementById('hover').style.transition = "all 0.2s"
            document.getElementById('hover').style.transform = "scale(1)"
            document.getElementById('hover').style.opacity = "1"
        }, 300)
})


// MENU EN JS

// BOUTON PLUS SUR MOI
function aProposDeMoi() {
  document.getElementById('auto_adapting').classList.remove("auto");
    document.getElementById('main_total').style.transform = "scale(0)"
    document.getElementById('main_total').style.transition = "all 0.8s"
    document.getElementById('main_total').style.opacity = "0.4"
    document.getElementById('main_total').style.marginTop = "0px" 
    document.getElementById('main_total').style.height = "100%" 
    
    document.getElementById('home_content').style.transform = "scale(0)"
    document.getElementById('home_content').style.transition = "all 0.8s"
    window.scrollTo({ top: 0, behavior: 'smooth' });

    setTimeout(function(){ 
    document.getElementById('main_total').style.transform = "scale(1)"
    document.getElementById('main_total').style.opacity = "1"
    document.getElementById('home_content').style.display = "none"
    document.getElementById('realisations_content').style.display = "none"
    document.getElementById('contact_content').style.display = "none"
    document.getElementById('aproposdemoi_content').style.display = "block"
    document.getElementById('main_total').style.background = "#ecf0f1 url(/app/img/back.png)"
    document.getElementById('main_total').style.backgroundSize = "10%"
    }, 550);

    document.getElementById('hamburger_menu').style.transform = "scale(0)"
    document.getElementById('hamburger_menu').style.opacity = "0.2"
    document.getElementById('hamburger_menu').style.transition = "all 0.2s"
    setTimeout(function(){ 
    document.getElementById('hamburger_menu').style.display = "none" 
    document.getElementById('hamburger_menu').style.transition = "all 0.2s"
    }, 500)
} 


// BOUTON REALISATIONS
function MyRealisations() {
  document.getElementById('auto_adapting').classList.remove("auto");
    document.getElementById('main_total').style.transform = "scale(0)"
    document.getElementById('main_total').style.transition = "all 0.8s"
    document.getElementById('main_total').style.opacity = "0.4"
    document.getElementById('main_total').style.marginTop = "0px" 
    document.getElementById('main_total').style.height = "100%" 
    
    document.getElementById('home_content').style.transform = "scale(0)"
    document.getElementById('main_total').style.backgroundSize = "10%"
    document.getElementById('home_content').style.transition = "all 0.8s"

    setTimeout(function(){ 
    document.getElementById('main_total').style.transform = "scale(1)"
    document.getElementById('main_total').style.opacity = "1"
    document.getElementById('realisations_content').style.transform = "scale(1)"
    document.getElementById('home_content').style.display = "none"
    document.getElementById('aproposdemoi_content').style.display = "none"
    document.getElementById('contact_content').style.display = "none"
    document.getElementById('realisations_content').style.display = "block"
    document.getElementById('main_total').style.background = "#ecf0f1 url(/app/img/back.png)"
    document.getElementById('main_total').style.backgroundSize = "10%"
    window.scrollTo({ top: 0, behavior: 'smooth' });
    }, 550);

    document.getElementById('hamburger_menu').style.transform = "scale(0)"
    document.getElementById('hamburger_menu').style.opacity = "0.2"
    document.getElementById('hamburger_menu').style.transition = "all 0.2s"
    setTimeout(function(){ 
    document.getElementById('hamburger_menu').style.display = "none" 
    document.getElementById('hamburger_menu').style.transition = "all 0.2s"
    }, 500)
} 

// BOUTON Contact
function Contact() {
  document.getElementById('auto_adapting').classList.remove("auto");
    document.getElementById('main_total').style.transform = "scale(0)"
    document.getElementById('main_total').style.transition = "all 0.8s"
    document.getElementById('main_total').style.opacity = "0.4"
    document.getElementById('main_total').style.marginTop = "0px" 
    document.getElementById('main_total').style.height = "100%" 
    
    document.getElementById('home_content').style.transform = "scale(0)"
    document.getElementById('home_content').style.transition = "all 0.8s"
    window.scrollTo({ top: 0, behavior: 'smooth' });

    setTimeout(function(){ 
    document.getElementById('main_total').style.transform = "scale(1)"
    document.getElementById('main_total').style.opacity = "1"
    document.getElementById('realisations_content').style.transform = "scale(1)"
    document.getElementById('home_content').style.display = "none"
    document.getElementById('aproposdemoi_content').style.display = "none"
    document.getElementById('realisations_content').style.display = "none"
    document.getElementById('contact_content').style.display = "block"
    document.getElementById('main_total').style.background = "#ecf0f1 url(/app/img/back.png)"
    document.getElementById('main_total').style.backgroundSize = "10%"
    }, 550);

    document.getElementById('contact_raison').value = ""
    let input = document.querySelectorAll('input');
    input.forEach((a) => {
      a.value = ""
    });

    document.getElementById('hamburger_menu').style.transform = "scale(0)"
    document.getElementById('hamburger_menu').style.opacity = "0.2"
    document.getElementById('hamburger_menu').style.transition = "all 0.2s"
    setTimeout(function(){ 
    document.getElementById('hamburger_menu').style.display = "none" 
    document.getElementById('hamburger_menu').style.transition = "all 0.2s"
    }, 500)
} 


// BOUTON ACCUEIL
function home(){
  document.getElementById('auto_adapting').classList.add("auto");
  document.getElementById('main_total').style.transform = "scale(0)"
  document.getElementById('main_total').style.transition = "all 0.8s"
  document.getElementById('main_total').style.opacity = "0.4"
  document.getElementById('main_total').style.marginTop = "60px"
  document.getElementById('aproposdemoi_content').style.display = "none"
  document.getElementById('realisations_content').style.display = "none"
  document.getElementById('contact_content').style.display = "none"
  document.getElementById('main_total').style.background = "#ecf0f1 url(/app/img/back.png)"
  document.getElementById('main_total').style.backgroundSize = "10%"
  document.getElementById('main_total').style.height = "501px" 
  document.getElementById('home_content').style.display = "block"
    window.scrollTo({ top: 0, behavior: 'smooth' });

  setTimeout(function(){ 
  document.getElementById('main_total').style.transform = "scale(1)"
  document.getElementById('main_total').style.opacity = "1"
  document.getElementById('home_content').style.transform = "scale(1)"
  document.getElementById('hover_deux').style.display = 'none';
  document.getElementById('hover').style.display = 'block'; 
  document.getElementById('hover').style.opacity = '1';  
  }, 550)

  document.getElementById('hamburger_menu').style.transform = "scale(0)"
  document.getElementById('hamburger_menu').style.opacity = "0.2"
  document.getElementById('hamburger_menu').style.transition = "all 0.2s"
  setTimeout(function(){ 
  document.getElementById('hamburger_menu').style.display = "none" 
  document.getElementById('hamburger_menu').style.transition = "all 0.2s"
  }, 500)
}

document.getElementById('anim_cliqued').addEventListener('click', () => {
  document.getElementById('anim_cliqued').style.transform = "rotate(1turn)"
  document.getElementById('hamburger_menu').style.display = 'block'
  document.getElementById('hamburger_menu').style.transition = "all 0.2s"
  setTimeout(function(){
  document.getElementById('anim_cliqued').style.transform = "rotate(-1turn)"
  document.getElementById('hamburger_menu').style.transform = "scale(1)"
  document.getElementById('hamburger_menu').style.opacity = "1"
  document.getElementById('hamburger_menu').style.transition = "all 0.2s"
  }, 300)
})

function closeHamburger() { 
  document.getElementById('hamburger_menu').style.transform = "scale(0)"
  document.getElementById('hamburger_menu').style.opacity = "0.2"
  document.getElementById('hamburger_menu').style.transition = "all 0.2s"
  setTimeout(function(){ 
  document.getElementById('hamburger_menu').style.display = "none" 
  document.getElementById('hamburger_menu').style.transition = "all 0.2s"
  }, 500)
}

// SOUMISSION FORMULAIRE DE CONTACT
let boutonValider = document.getElementById('contact_submit');
boutonValider.addEventListener('click', () => {
  let contact_name = document.getElementById('contact_name');
  let contact_lastname = document.getElementById('contact_lastname');
  let contact_mail = document.getElementById('contact_mail');
  let contact_raison = document.getElementById('contact_raison');
  let error_alerte = document.getElementById('error_alerte');
 
      
      event.preventDefault(); // Empêche le rechargement de la page

      // Récupérer les données du formulaire
      const formData = new FormData(document.getElementById('formulaire_contacte'));

      // Envoyer les données via AJAX
      fetch("contact.php", {
          method: "POST",
          body: formData,
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === "success") {
            // Message de succès personnalisé
            error_alerte.style.display = 'block';
            error_alerte.innerText = data.message || "Merci, votre message a été envoyé !";
            error_alerte.style.backgroundColor = "#6ab04c"; // Couleur verte pour indiquer le succès
            window.scrollTo({ top: 0, behavior: 'smooth' });
            contact_name.value = "";
            contact_lastname.value = "";
            contact_mail.value = "";
            contact_raison.value = "";
        } else {
            // Message d'erreur personnalisé
            error_alerte.style.display = 'block';
            error_alerte.innerText = data.message;
            error_alerte.style.backgroundColor = "#eb4d4b"; // Couleur verte pour indiquer le succès
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
      })
      .catch(error => {
          console.error("Erreur :", error);
          error_alerte.style.display = 'block'
          error_alerte.style.backgroundColor = "#eb4d4b"; 
          error_alerte.innerText = "Une erreur est survenue. Veuillez réessayer.";
          window.scrollTo({ top: 0, behavior: 'smooth' });
      });

 
})