function allLetter(word) {
  var letters = /^[A-Za-z]+$/;
  return letters.test(word);
}

function validateEmail(email) {
  var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  return re.test(email);
}

function verif() {
  let nom = document.getElementById("nom").value.trim();
  let email = document.getElementById("email").value.trim();
  let phone = document.getElementById("phone").value.trim();
  let date = document.getElementById("date").value.trim();
  let sujet = document.getElementById("sujet").value.trim();
  let etat = document.getElementById("etat").value.trim();
  let contenu = document.getElementById("contenu").value.trim();

  if (nom === "") {
    alert("Veuillez saisir le nom.");
    return false;
  }

  if (!allLetter(nom)) {
    alert("Votre nom doit contenir seulement des lettres.");
    return false;
  }

  if (email === "") {
    alert("Veuillez saisir l'email.");
    return false;
  }

  if (!validateEmail(email)) {
    alert("Veuillez saisir une adresse email valide.");
    return false;
  }

  if (phone === "") {
    alert("Veuillez saisir le numéro de téléphone.");
    return false;
  }

  if (sujet === "") {
    alert("Veuillez saisir le sujet.");
    return false;
  }

  if (etat !== "Approved" && etat !== "Rejected"  && etat !== "Pending") {
    alert("Veuillez choisir un état valide (Rejected / Approved or Pending ).");
    return false;
  }
  

  if (date === "") {
    alert("Veuillez saisir la date.");
    return false;
  }

  if (contenu === "") {
    alert("Veuillez saisir le contenu.");
    return false;
  }

  return true;
}
