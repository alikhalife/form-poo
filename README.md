# POO: Helpers Class : Etape 1

## Languages used
***

![](public/languages/html.svg "HTML")
![](public/languages/github.svg "GitHub")
![](public/languages/git.svg "Git")



![](public/languages/php.svg "PHP")

## Objectif

Minimiser autant que possible l'alternance entre PHP et HTML. <br>
Via la création des classes PHP qui vont générer de l'HTML directement.

## Exemple

Pour minimiser cela, nous pouvons créer une classe Form qui gère la génération du formulaire. On aura un code peu plus lisible.

````
echo $form = new Form();
echo $form->create($action); // créer le début du formulaire
echo $form->text('nom',$nom); // créer un input de type texte avec comme valeur par défaut $nom
echo $form->text('prenom',$prenom); // créer un input de type texte avec comme valeur par défaut $prenom
echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
echo $form->end(); //fermer le formulaire 

````

## Consignes

Créer une classe Form qui s'occupera de générer les différents éléments du formulaires. Pour la classe Form Vous n'êtes pas obligé de vous baser sur l'exemple plus haut.

Cette classe devra avoir des méthodes et des propriétés afin de pouvoir générer :

- Le début d'un formulaire `<form ...>`
- Un input text `<input type="text"...>`
- Un select `<select ...> ...</select>`
- Un bouton submit `<button type="submit"></button>`
- Un textarea `<textarea ...> ...</textarea>`
- Un radio button `<input type="radio"...>`
- Une checkbox `<input type="checkbox">`

Vous devez créer cette classes en pensant qu'elles devront être utilisées par un autre développeur. Utilisez des noms de propriétés et de méthodes qui ont du sens, restez simple et commentez votre code.

## Ressources

[La POO en PHP (4/30) : Un exemple concret : Form](https://www.youtube.com/watch?v=rTGmcdFAWqw)


# POO: Helpers Class : Etape 2

## Objectif

Créer une `class Html` ( dans un fichier séparé ) qui va générer différents éléments HTML :

- Lier des Fichiers CSS `<link rel="stylesheet" ...>`
- Créer des Balises meta `<meta ...>`
- Lier des Images `<img src="...">`
- Créer des Liens `<a href="...">`
- Lier des Fichiers `Javascript`

Vous devez créer cette classes en pensant qu'elles devront être utilisées par un autre développeur.
Utilisez des noms de propriétés et de méthodes qui ont du sens, restez simple et commentez votre code.
