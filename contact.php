<?php 
$title = 'SVprint - Contact';
require 'layouts/navbar.php';
require 'layouts/networks.php';
?>

<main>
  <h2 class="titleContact">Contactez-nous !</h2>
  <form class="form-contact" action="form-contact.php" method="POST">
    <div class="form-group">
      <label for="name">Votre nom</label>
      <input class="form-control" type="text" name="name" id="name" required>
    </div>
    <div class="form-group">
      <label for="company">Le nom de votre entreprise</label>
      <input class="form-control" type="text" name="company" id="company" >
    </div>
    <div class="form-group">
      <label for="email">Votre email</label>
      <input class="form-control" type="email" name="email" id="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Le nom de votre entreprise</label>
      <input class="form-control" type="text" name="phone" id="phone" >
    </div>
    <div class="form-group">
      <label for="message">Votre message</label>
      <textarea class="form-control" name="message" id="message" required rows="8">
      </textarea>
    </div>
    <div class="form-group">
      <input type="checkbox" name="rgpd" id="rgpd">
      <label for="rgpd">J'accepte que mes données soient stockées en accordance avec les politiques de confidentialités et mentions légales</label>
    </div>
    <div class="form-group">
      <input class="btn btn-primary btn-contact" type="submit" value="Envoyer">
    </div>
  </form>
</main>

<?php require 'layouts/footer.php'; ?>
   

