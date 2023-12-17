let moisActuel;
let anneeActuelle;

// Fonction pour créer le calendrier
function creerCalendrier(mois, annee) {
  let joursCalendrier = document.getElementById("jours-calendrier");
  joursCalendrier.innerHTML = '';

  // Obtenez le premier jour du mois et le nombre de jours dans le mois
  let premierJour = new Date(annee, mois, 1).getDay();
  let dernierJour = new Date(annee, mois + 1, 0).getDate();

  let jourActuel = 1;

  // Boucle pour créer les lignes du calendrier
  for (let i = 0; i < 6; i++) {
    let ligne = document.createElement("tr");

    // Boucle pour créer les cellules du calendrier
    for (let j = 0; j < 7; j++) {
      let cellule = document.createElement("td");

      // Remplissez la cellule si c'est dans le mois actuel
      if ((i === 0 && j >= premierJour) || (i > 0 && jourActuel <= dernierJour)) {
        cellule.textContent = jourActuel;
        jourActuel++;
      }

      ligne.appendChild(cellule);
    }

    joursCalendrier.appendChild(ligne);
  }

  // Mettez à jour l'en-tête du mois et de l'année
  document.getElementById("mois-annee").textContent = `${getNomMois(mois)} ${annee}`;
}

// Fonction pour obtenir le nom du mois en fonction du numéro de mois
function getNomMois(mois) {
  const nomsMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
  return nomsMois[mois];
}

// Fonction pour changer le mois
function changerMois(delta) {
  moisActuel += delta;

  if (moisActuel > 11) {
    moisActuel = 0;
    anneeActuelle++;
  } else if (moisActuel < 0) {
    moisActuel = 11;
    anneeActuelle--;
  }

  creerCalendrier(moisActuel, anneeActuelle);
}

// Appel initial pour afficher le calendrier du mois actuel
const dateActuelle = new Date();
moisActuel = dateActuelle.getMonth();
anneeActuelle = dateActuelle.getFullYear();
creerCalendrier(moisActuel, anneeActuelle);

  