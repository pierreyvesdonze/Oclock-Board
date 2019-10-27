<?php

$memos = [
            1 => [
                "h3" => "<h3>Mémo <span>#1</span> Souviens-toi...</h3>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        <span>K</span>eep <span>I</span>t <span>S</span>imple, <span>S</span>tupid !
                                    </li>
                                    <li>
                                        <span>T</span>ry <span>I</span>t <span>Y</span>ourself !
                                    </li>
                                    <li>
                                        <span>R</span>ead <span>T</span>he <span>F</span>ucking <span>M</span>anual !
                                    </li>
                                    <li>
                                    <span>N</span>ever <span>T</span>hrust <span>U</span>ser <span>I</span>nput
                                    </li>
                                </ul>
                            </p>"
            ],
            2 => [
                "h3" => "<h3>Mémo <span>#2</span> La p'tite manip GIT qui va bien</h3>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        Ouvre ton terminal (Alt + Ctrl + T)
                                    </li>
                                    <li>
                                        Vérifie que tu es sur le bon répertoire (pwd ou ls)
                                    </li>
                                    <li>
                                        git status
                                    </li>
                                    <li>
                                        git add  .
                                    </li>
                                    <li>
                                        git commit -m \"ton message\"
                                    </li>
                                    <li>
                                        git push
                                    </li>
                                </ul>
                            </p>"
            ],
            3 => [
                "h3" => "<h3>Mémo <span>#3</span> Personnalise VSCODE</h3>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        Va dans les paramètres de ton VSCODE (CTRL + ,)
                                    </li>
                                    <li>
                                        Workbench / Appearance / Color Theme
                                    </li>
                                    <li>
                                        Choisis ton thème
                                    </li>
                                    <li>
                                        Et si tu veux changer la couleur de la docstring...
                                    </li>
                                    <li>
                                        Tape : 'tokenColorCustomizations' dans 'search settings'
                                    </li>
                                    <li>
                                        Clique sur 'Edit in settings.json'
                                    </li>
                                    <li>
                                        Tape : 'editor.tokenColorCustomizations': {
                                        'comments': '#fff}, (ou la couleur de ton choix)'
                                    </li>
                                    <li>
                                        Fais bien gaffe à placer une virgule 
                                        à la fin du paramètre précédent
                                    </li>
                                </ul>
                            </p>"
                ],
            4 => [
                "h3" => "<h3>Mémo <span>#4</span> La fausse manip GIT qui fait mal...</h3>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        Si tu clones un dépôt depuis GIT portant le même nom de dossier que ton dépôt local sans avoir pris soin de commit/push au préalable, ton dépôt local et tout ce qu'il contient seront anéantis, comme toi.
                                    </li>
                                </ul>
                            </p>"
            ],

            5 => [
                "h3" => "<h3>Mémo <span>#5</span> Obtenir un terminal Linux sous Windows (BASH)</h3>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        Sous Windows 10, 'Bash', un shell Linux est installé par défaut. Pour l'activer :
                                    </li>
                                    <li>
                                        Va dans tes 'Paramètres Windows' / Mise à jour et sécurité
                                    </li>
                                    <li>
                                        Active le mode développeur
                                    </li>
                                    <li>
                                        Va dans panneau de config / Programmes
                                    </li>
                                    <li>
                                        Clique sur 'Activer ou désactiver des fonctionnalités de Windows'
                                    </li>
                                    <li>
                                        Coche 'Sous-système Windows pour Linux'
                                    </li>
                                    <li>
                                        Redémarre
                                    </li>
                                    <li>
                                        Ou sinon, télécharge GIT c'est aussi bien !! :D
                                    </li>
                                </ul>
                            </p>"
            ],

            6 => [
                "h3" => "<h3>Mémo <span>#6</span> Utiliser BASH depuis VSCODE</h3>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        Dans VSCCODE => Ctrl + Shift + P
                                    </li>
                                    <li>
                                        Sélectionne Git Bash dans les options
                                    </li>
                                    <li>
                                        Ouvre un terminal, Bash s'ouvre direct 
                                        sur ton répertoire de travail courant. Classe non ? 
                                    </li>
                                </ul>
                            </p>"
            ],

            7 => [
                "h3" => "<h3>Mémo <span>#7</span> Un petit générateur de tableau HTML bien pratique</h3>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        <span><a href='https://www.tablesgenerator.com/html_tables' target = 'blank'>tablesgenerator</a> 
                                        </span>
                                    </li>
                                </ul>
                            </p>"
            ],

            
];          
        


$shortCuts = [
            1 => [
                "h4" => "<h4>Raccourcis <span>VSCODE</span></h4>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        <span>Couper/Copier/coller : </span>Ctrl + X / Ctrl + C / Ctrl + V,
                                    </li>
                                    <li>
                                        <span>Annuler/Refaire : </span>Ctrl + Z / Ctrl + Y
                                    </li>
                                    <li>
                                        <span>Tout sélectionner : </span>Ctrl + A
                                    </li>
                                    <li>
                                        <span>Rechercher : </span>Ctrl + F
                                    </li>
                                    <li>
                                        <span>Remplacer : </span>Ctrl + H
                                    </li>
                                    <li>
                                        <span>Changer toutes les occurences : </span>Ctrl + F2
                                    </li>
                                    <li>
                                        <span>Formater : </span>Alt + Ctrl + i / Alt + Ctrl + F
                                    </li>
                                    <li>
                                        <span>Curseur multilignes : </span>Alt + Ctrl + flèche haut / bas ou Alt + click
                                    </li>
                                    <li>
                                        <span>Ouvrir un fichier : </span>Ctrl + O
                                    </li>
                                    <li>
                                        <span>Sauvegarder : </span>Ctrl + S
                                    </li>
                                    <li>
                                        <span>Paramètres : </span>Ctrl + ,
                                    </li>
                                    <li>
                                        <span>Word Wrap : </span>Alt + Z
                                    </li>
                                    <li>
                                        <span>Next Word : </span>Ctrl + flèche gauche / droite
                                    </li>
                                    <li>
                                        <span>Début/fin du document : </span>Ctrl + début / fin
                                    </li>
                                    <li>
                                        <span>Générer une entête HTML : </span>touche '!' puis 'Entrée'
                                    </li>
                                </ul>
                            </p>"
            ],

            2 => [
                "h4" => "<h4>Raccourcis <span>Téléporteur</span></h4>",
                "texte" => "<p>
                                <ul>
                                    <li>
                                        <span>Accéder au menu avec le clavier : </span>Ctrl + touche 'Début' (Ctrl de droite)
                                    </li>
                                </ul>
                            </p>"
                ]
];