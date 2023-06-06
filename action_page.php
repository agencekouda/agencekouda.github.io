<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validation des données (vous pouvez ajouter vos propres règles de validation ici)

  // Envoi du message par e-mail
  $destinataire = 'taghzout.daoud@gmail.com';
  $sujet = 'Nouveau message depuis le formulaire de contact';
  $contenu = "Nom : $nom\n";
  $contenu .= "Email : $email\n";
  $contenu .= "Message :\n$message";
  $entetes = "From: $nom <$email>";

  if (mail($destinataire, $sujet, $contenu, $entetes)) {
    // Le message a été envoyé avec succès
    echo "Message envoyé avec succès !";
  } else {
    // Une erreur s'est produite lors de l'envoi du message
    echo "Une erreur s'est produite. Veuillez réessayer.";
  }
}
?>
