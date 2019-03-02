### Installation

``npm i -g gulp@3.9.1`` (si gulp n'est pas installé sur le poste)<br> 
``npm i`` => Installe les dépendances <br>
``npm i --save gulp@3.9.1 bootstrap-sass gulp-sass gulp-sourcemaps``


### Lancer le front
``gulp`` => Permet de compiler le sass en css. A faire à la racine du projet (.../LoaFreelance)

`localhost/LoaFreelance/` Lien de base 

### Versionnage 
Commandes git :
git add . -> ajouter les fichiers qu'on vient de toucher
git commit -m "votre_message" -> commiter les fichiers , ne les envoies pas sur le serveur mais les valides via git pour les envoyer plus tard"
git push origin master -> envoyer les fichiers sur le serveur
git pull origin master -> récupérer les données sur le serveur
git stash -> annule TOUTES les modifications qu'on a faite
git stash pop -> à exécuter après un git stash si on souhaite récupérer toutes les modifications faites

Pour récupérer les données sur le serveur sans pousser son boulot (car incomplet par exemple)
Si le code est stable : 
git add . -> git commit -m "votre_message" -> git pull
Si le code est loin d'être stable 
git stash -> git pull origin master -> git stash pop (trick très pratique)

Si on veut se débarasser de tout ce qu'on a fait depuis le dernier commit :
git stash

Pensez à commiter fréquemment lorsque vous avez une version +/- stable, ça vous permettra de ne pas perdre ce que vous avez fait, d'eventuellement le faire partager aux autres également !


### 
`Porteur de projet :`
- peut publier projet (titre description mot clef critere (tech souhaité, budget, tarif horaire max)
- peut parcourir les profile des freelanceurs 
- peut recevoir des notes et comm de la part des freelanceur
- presentation des derniers free inscrits, affichage des free les mieux notés

`Freelancer :`
- se voit proposer des projets correspondant à leur tarif / compétences
- après une discussion, peut remplir un devis
possède un profil consultable par le porteur de projet avec notes & commentaires


paiement via paypal à chaque jalon


