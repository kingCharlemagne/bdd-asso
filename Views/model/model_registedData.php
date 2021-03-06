<?php
require_once '../Controllers/model_registedData_traitement.php';
?>


<div class="card <?= $colorClass ?> mt-3">
    <div class="card-header" id="heading<?= $data['id'] ?>">
        <div class="row">
            <div class="col-2">
                <div class="row text-center">
                    <div class="col">
                        <h6>Identifiant:</h6>
                        <p><?= $data['id'] ?></p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <h6>Niveau:</h6>
                        <p class="text-uppercase"><?= categorie($data['catA1'],$data['catA2'],$data['catA3']) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-8 ">
                <div class="row text-center">
                    <div class="col">
                        <p>Nom: <?= $data['name'] ?></p>
                    </div>
                    <div class="col">
                        <p>Prénom: <?= $data['surname'] ?></p>
                    </div>
                    <div class="col">
                        <p>Date de naissance: <?= $data['born'] ?></p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <p>Atelier N°1: <?= $data['j1'] ?> | <?= $data['at1'] ?></p>
                    </div>
                    <div class="col">
                        <p>Atelier N°2: <?= $data['j2'] ?> | <?= $data['at2'] ?></p>
                    </div>
                    <div class="col">
                        <p>Atelier N°3: <?= $data['j3'] ?> | <?= $data['at3'] ?></p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <p>Téléphone: <?= issetValue($data['phone']) ?></p>
                    </div>
                    <div class="col">
                        <p>E-mail: <?= issetValue($data['email'] )?></p>
                    </div>
                    <div class="col">
                        <p>Date d'inscription: <?= $data['create_at'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="row text-center">
                    <div class="col mt-2 ">
                        <a href="inscriptionFile.php?id=<?= $data['id'] ?>" class="btn btn-outline-primary">Fiche d'inscription</a>
                    </div>
                    <div class="col mt-2 ">
                        <a href="updateApprenant.php?id=<?= $data['id'] ?>"  class="btn btn-outline-success">Changer d'atelier</a>
                    </div>
                    <div class="col mt-2 ">
                        <a href="reinstatement.php?id=<?= $data['id'] ?>"  class="btn btn-outline-danger">Réinscription</a>
                    </div>
                    <div class="col mt-3">
                        <button class="btn btn-outline-info" type="button" data-toggle="collapse"
                                data-target="#<?= $data['name'] . $data['id'] ?>" aria-expanded="true"
                                aria-controls="<?= $data['name'] . $data['id'] ?>">
                            Détail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------->
    <div id="<?= $data['name'] . $data['id'] ?>" class="collapse" aria-labelledby="heading<?= $data['id'] ?>">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>Adresse: <?= $data['address'] ?></p>
                </div>
                <div class="col">
                    <p>Ville: <?= $data['city'] ?></p>
                </div>
                <div class="col">
                    <p>Code Postal: <?= $data['cp'] ?></p>
                </div>
                <div class="col">
                    <p>Date d'arriver en france: <?= $data['arrived'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Sexe: <?= $data['sex'] ?></p>
                </div>
                <div class="col">
                    <p>Situation familiale: <?= $data['relation'] ?></p>
                </div>
                <div class="col">
                    <p>Nombre d'enfant: <?= $data['child'] ?></p>
                </div>
                <div class="col">
                    <p>Statut: <?= $data['status'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Pays d'origine: <?= $data['country'] ?></p>
                </div>
                <div class="col">
                    <p>Nationalitée: <?= $data['nationality'] ?></p>
                </div>
                <div class="col">
                    <p>Langue maternelle: <?= $data['firstlanguage'] ?></p>
                </div>
                <div class="col">
                    <p>Langue secondaire: <?= $data['secondlanguage'] ?></p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p>Cotisation: <?= $cotisationStatus ?></p>
                </div>
            </div>
        </div>
    </div>
</div>