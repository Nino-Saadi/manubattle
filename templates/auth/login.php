<?php if (isset($_SESSION['errors'])): ?>

<?php foreach ($_SESSION['errors'] as $errorsArray ): ?>
  <?php foreach($errosArray as $errors): ?>
    <div class="alert alert-danger">
      <?php foreach ($erros as $error):?>
        <li><?= $error ?></li>  
    </div>
  <?php endforeach ?>
<?php endforeach ?>

<?php endif ?>

<?php session_destroy() ?>

<h1>Se Connecter</h1>

<form>
  <div class="form-group">
    <label for="username">Nom d'utilisateur</label>
    <input type="text" class="form-control" id="username" placeholder="Entre votre nom d'utilisateur">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
