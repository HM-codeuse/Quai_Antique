import 'intro.js/introjs.css';

//Import all of Intro JS
import introJs from 'intro.js';


introJs()
.setOption("dontShowAgain", true)
.setOption("nextLabel", " > ")
.setOption("prevLabel", " < ")
.setOption("dontShowAgainLabel", "Ne plus afficher")
.setOption("doneLabel", "Terminé")
.setOptions({
    steps: [{
      intro: "Bienvenue sur le site Quai Antique! Etes-vous prêts à embarquer pour une aventure gustative?"
    }, {
      element: document.querySelector('.menu-info'),
      intro: "Vous êtes ici sur le menu du site, vous pourrez y retrouver toutes les informations, vous inscrire mais aussi réserver.",
    },
        {
        element: document.querySelector('.stars-info'),
            intro: "Les plats incontournables du moment, si vous voulez être tendance goutez-les"    
        },
        {
            element: document.querySelector('.access-info'),
      intro: "Vous êtes conquis, vous souhaitez nous rencontrer, ne cherchez pas des heures l'adresse est devant vous!."
        },
        {
            element: document.querySelector('.openhours-info'),
      intro: "Vérifiez si nous sommes ouverts ici et venez nous rencontrer.Vous ne serez pas déçus"
        }]
  }).start();


  