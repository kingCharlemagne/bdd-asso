<?php
$inscriptionFirstStep=$bdd->prepare('INSERT INTO apprenant ( sex, name, surname, address, cp, city, born, phone, email, relation, child, status, country, nationality, arrived, firstlanguage, secondlanguage) VALUES (:sex,:nam,:surname,:address,:cp,:city,:born,:tel,:mail,:relation,:child,:status,:country,:nationality,:arrived,:firstlanguage,:secondlanguage)');
$inscriptionFirstStep->bindValue(':sex',$post['genre']);
$inscriptionFirstStep->bindValue(':nam',$post['name']);
$inscriptionFirstStep->bindValue(':surname',$post['surname']);
$inscriptionFirstStep->bindValue(':address',$post['address']);
$inscriptionFirstStep->bindValue(':cp',$post['cp']);
$inscriptionFirstStep->bindValue(':city',$post['city']);
$inscriptionFirstStep->bindValue(':born',$post['bornDate']);
$inscriptionFirstStep->bindValue(':tel',$post['tel']);
$inscriptionFirstStep->bindValue(':mail',$post['mail']);
$inscriptionFirstStep->bindValue(':relation',$post['familySituation']);
$inscriptionFirstStep->bindValue(':child',$post['numbChild']);
$inscriptionFirstStep->bindValue(':status',$post['status']);
$inscriptionFirstStep->bindValue(':country',$post['nativeCountry']);
$inscriptionFirstStep->bindValue(':nationality',$post['nationality']);
$inscriptionFirstStep->bindValue(':arrived',$post['arrived']);
$inscriptionFirstStep->bindValue(':firstlanguage',$post['maternalLanguage']);
$inscriptionFirstStep->bindValue(':secondlanguage',$post['secondLanguage']);
