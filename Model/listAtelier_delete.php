<?php
$deleteAtelier=$bdd->prepare('DELETE FROM ateliers WHERE id=:id');
$deleteAtelier->bindValue('id',htmlspecialchars($_GET['id']));

