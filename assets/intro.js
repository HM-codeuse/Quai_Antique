import 'intro.js/introjs.css';

//Import all of Intro JS
import introJs from 'intro.js';

introJs().setOptions({
    steps: [{
      intro: "Bienvenue sur le site Quai Antique! Etes-vous prêts à embarquer pour une aventure gustative?"
    }, {
      element: document.querySelector('.menu-info'),
      intro: "Vous êtes ici sur le menu du site, vous pourrez y retrouver toutes les informations pratiques suivantes.",
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
      intro: "Vérifiez si nous sommes ouverts ici!."
        },
        {
            element: document.querySelector('.reservation-info'),
      intro: "Il ne vous reste plus qu'à réserver!"
        },
        {
            element: document.querySelector('.registration-info'),
      intro: "Mais avant inscrivez-vous..."
        },
        {
            element: document.querySelector('.connexion-info'),
      intro: "ou connectez-vous!A très vite!"
        }]
  }).start();


  