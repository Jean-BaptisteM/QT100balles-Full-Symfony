<?php

namespace App\Fixtures\Data;

use App\Entity\Media;
use App\Entity\MediaCategory;
use App\Entity\Person;
use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MediaFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {        
        $mediaData = [

            // Films

            [
                'title' => 'Abyss',
                'year' => '1989',
                'duration' => 139,
                'nb_season' => null,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => 'https://flxt.tmsimg.com/assets/p11774_p_v10_ae.jpg',
                'preface' => "Si vous rencontrez une forme de vie sous l'océan, faites lui quand même l'abyss",
                'synopsis' => "Une équipe de plongée civile est chargée de rechercher un sous-marin nucléaire perdu et de faire face au danger en rencontrant une espèce aquatique exotique.",
                'summary' => "Un commando de la Marine américaine débarque à bord de la station de forage sous-marine DeepCore, afin de porter secours à un sous-marin échoué dans les profondeurs. L'équipe de Bud Brigman accueille ces nouveaux arrivants, ainsi que Lindsey, future ex-femme de Bud. Alors que les travaux de récupération commencent autour du submersible naufragé, l'équipage de DeepCore doit faire face à des phénomènes inexpliqués. Et s'ils n'étaient pas seuls, dans les abysses ?",
                'anecdote' => "L'un des noyés du sous-marin n'est autre que Mike Cameron, le propre frère de James Cameron. Cascadeur de son état, il fait ici une courte apparition marquante : il a ainsi laissé un crabe (vivant) sortir de sa bouche pour les besoins de la scène.",
                'trailer' => 'https://www.youtube.com/embed/4zbpL3LeW7k',
                'original_title' => 'abyss',
                'media_category_id' => '0',
                'media_type' => ['Science-Fiction'],
                'media_person' => ['James Cameron', 'Ed Harris', 'Mary Elizabeth Mastrantonio'],

            ],
            [
                'title' => "Ace Ventura, détective pour chiens et chats",
                'year' => '1994',
                'duration' => 86,
                'nb_season' => null,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => '',
                'preface' => "Si je ne suis pas de retour dans 5 minutes... Attendez plus longtemps !",
                'synopsis' => 'Un détective farfelu spécialisé dans les animaux part à la recherche de la mascotte manquante des Miami Dolphins, équipe de football américain.',
                'summary' => "Ace Ventura est un détective pas comme les autres puisqu'il est considéré comme le Sherlock Holmes de la gent canine. Quand la charmante Melissa Robinson fait appel à ses talents pour retrouver Flocon de Neige, le dauphin mascotte de l'équipe de football de Miami, notre spécialiste n'hésite pas à délaisser ses caméléon, perroquet et canari de colocataires, pour s'embarque dans cette folle aventure ! ",
                'anecdote' => "Le groupe de brutal death metal Cannibal Corpse fait une apparition dans le film, en interprétant Hammer Smashed Face. C'est Jim Carrey lui-même, grand fan du groupe, qui en aurait eu l'idée.",
                'trailer' => 'https://www.youtube.com/embed/up7Cgj1UWgY',
                'original_title' => 'Ace ventura: Pet Detective',
                'media_category_id' => '0',
                'media_type' => ['Aventure', 'Comédie'],
                'media_person' => ['Tom Shadyac', 'Jim Carrey', 'Courteney Cox', 'Sean Young'],
            ],
            [
                'title' => 'Alien, le Huitième passager',
                'year' => '1979',
                'duration' => 117,
                'nb_season' => null,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => '',
                'preface' => "Qui n'a jamais rêvé d'un ami alien qui sait faire plus que juste téléphoner avec son doigt lumineux?",
                'synopsis' => "Un vaisseau spatial perçoit une transmission non-identifiée comme un signal de détresse. Lors de son atterrissage, l'un des membres de l'équipage est attaqué par une mystérieuse forme de vie, ils réalisent rapidement que son cycle de vie vient seulement de commencer.",
                'summary' => "Durant le voyage-retour du cargo spatial Nostromo après une mission commerciale de routine, l'équipage, cinq hommes et deux femmes plongés en hibernation depuis dix mois sont tirés de leur léthargie plus tôt que prévu par l'ordinateur de bord du vaisseau. Ce dernier a en effet capté des signaux radio inconnus dans l'espace et, du fait d'une clause attenante à leur contrat de navigation, l'équipage du vaisseau est tenu de vérifier tout indice de vie extraterrestre.
                Mais, au cours de cette vérification sur une planète désertique, l'officier Kane est attaqué par une forme de vie inconnue, une sorte de créature arachnide qui recouvre son visage en l'étouffant avec sa queue. Après avoir été délivré de la créature étrangère qui semble être morte, l'équipage retrouve le sourire et fait un dernier repas tous ensemble avant de se rendormir. Mais, lors du dîner, Kane est pris de convulsions et voit soudainement son abdomen perforé par une créature qui sort de son corps et qui s'échappe dans les coursives du vaisseau.
                Un jeu macabre du chat et de la souris débute alors entre l'équipage et la créature, l'« Alien ».",
                'anecdote' => "La carcasse sur laquelle le docteur Ash pratique une autopsie est composée de fruits de mer, afin de recréer visuelement les organes internes de l'arachnée.",
                'trailer' => 'https://www.youtube.com/embed/cL5aAtL6Tok',
                'original_title' => 'alien',
                'media_category_id' => '0',
                'media_type' => ['Science-Fiction', 'Horreur'],
                'media_person' => ['Ridley Scott', 'Sigourney Weaver', 'Tom Skerritt', 'Veronica Cartwright'],
            ],
            [
                'title' => 'Blade Runner',
                'year' => '1982',
                'duration' => 117,
                'nb_season' => null,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => '',
                'preface' => "T’endors pas c’est l’heure de mourir.",
                'synopsis' => "Un agent d'une unité spéciale, un blade runner, doit poursuivre et éliminer les quatre répliquant qui ont volé un navire dans l'espace et sont retournés sur Terre pour trouver leur créateur",
                'summary' => "Dans les dernières années du 20ème siècle, des milliers d'hommes et de femmes partent à la conquête de l'espace, fuyant les mégalopoles devenues insalubres. Sur les colonies, une nouvelle race d'esclaves voit le jour : les répliquants, des androïdes que rien ne peut distinguer de l'être humain. Los Angeles, 2019. Après avoir massacré un équipage et pris le contrôle d'un vaisseau, les répliquants de type Nexus 6, le modèle le plus perfectionné, sont désormais déclarés 'hors la loi'. Quatre d'entre eux parviennent cependant à s'échapper et à s'introduire dans Los Angeles. Un agent d'une unité spéciale, un blade-runner, est chargé de les éliminer. Selon la terminologie officielle, on ne parle pas d'exécution, mais de retrait...",
                'anecdote' => "Dans la scène où l'inspecteur Gaff (Edward James Olmos) emmène Deckard (Harrison Ford) à bord de son Spinner au Central de la police, regardez bien dans le coin en bas à gauche. Le building n'est autre que le Millenium Falcon, le vaisseau d'un certain...Han Solo dans la saga Star Wars !",
                'trailer' => 'https://www.youtube.com/embed/eogpIG53Cis',
                'original_title' => 'blade runner',
                'media_category_id' => '0',
                'media_type' => ['Action', 'Science-Fiction'],
                'media_person' => ['Ridley Scott', 'Harrison Ford', 'Rutger Hauer', 'Sean Young'],
            ],
            [
                'title' => 'Les Goonies',
                'year' => '1985',
                'duration' => 114,
                'nb_season' => null,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => '',
                'preface' => "Voir Choco faire la danse du bouffi-bouffon ça n'a pas de prix.",
                'synopsis' => "Les Goonies sont un groupe d'amis qui vivent à Goon Docks, Astoria, mais leurs maisons ont été achetées et vont être démolies. Cependant, ils vivront leur dernière aventure à la recherche d'un trésor qui pourra sauver le quartier.",
                'summary' => "Astoria, automne 1985. Alors que les terribles Fratelli s'évadent de prison, Bagou, Choco, Data et Mikey, une bande de copains, trouvent dans le grenier de ce dernier une vieille carte au trésor menant au pirate Willy le Borgne. Alors que leur quartier va bientôt être rasé par le promoteur Elgin Perkins pour être remplacé par un terrain de golf, les garçons décident de se mettre à la recherche du butin pour éviter la destruction des maisons. Bientôt rattrapés par Brand, le frère de Mikey, et deux amies, Steph et Andy, les « Goonies », suivant leur carte, arrivent et pénètrent dans un vieux restaurant en bordure de mer sans savoir que l'endroit est déjà occupé par les Fratelli en cavale. Leur aventure se poursuit dans les souterrains jusqu'au bateau pirate de Willy le Borgne et de son fameux trésor.",
                'anecdote' => "Le bateau de pirate que l'on voit dans le film était un vrai bateau, et non des morceaux de décors construits. Les enfants ne furent pas autorisés à voir le bateau avant de tourner la scène. Ainsi, certains, très impressionnés, jurèrent en le découvrant ! La scène dut alors être retournée.",
                'trailer' => 'https://www.youtube.com/embed/E71-hjH_7Rw',
                'original_title' => 'the goonies',
                'media_category_id' => '0',
                'media_type' => ['Aventure', 'Comédie'],
                'media_person' => ['Richard Donner', 'Sean Astin', 'Josh Brolin', 'Jeff Cohen'],
            ],
            [
                'title' => 'Piège de Cristal',
                'year' => '1988',
                'duration' => 132,
                'nb_season' => null,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => '',
                'preface' => "- Qui que vous soyez, attention, cette fréquence est exclusivement réservée aux urgences.

                            - Sans blague ! Et vous croyez que j'appelle pour commander une pizza ?",
                'synopsis' => "John McClane, un policier de New York, tente de sauver sa femme Holly Gennaro et un groupe d'autres personnes prises en otage par le terroriste allemand Hans Gruber lors d'une fête de Noël au Nakatomi Plaza de Los Angeles.",
                'summary' => "John McClane, policier new-yorkais, est venu rejoindre sa femme Holly, dont il est séparé depuis plusieurs mois, pour les fêtes de Noël dans le secret espoir d'une réconciliation. Celle-ci est cadre dans une multinationale japonaise, la Nakatomi Corporation. Son patron, M. Takagi, donne une soirée en l'honneur de ses employés, à laquelle assiste McClane. Tandis qu'il s'isole pour téléphoner, un commando investit l'immeuble et coupe toutes les communications avec l'extérieur...",
                'anecdote' => "Alan Rickman, en entendant un coup de feu, ne pouvait s'empêcher de sursauter, c'est pourquoi le réalisateur John McTiernan a dû couper quasiment toutes les scènes où son personnage, Hans Gruber, fait usage de son arme, sauf pour une seule lorsque Gruber abat Takagi. On voit alors très nettement Alan Rickman sursauter au moment où il fait feu.",
                'trailer' => 'https://www.youtube.com/embed/XDg9AkYRWCc',
                'original_title' => 'Die Hard',
                'media_category_id' => '0',
                'media_type' => ['Action', 'Thriller'],
                'media_person' => ['John McTiernan', 'Bruce Willis', 'Alan Rickman', 'Alexander Godunov'],
            ],

            // Serie

            [
                'title' => '21 Jump street',
                'year' => '1987',
                'duration' => null,
                'nb_season' => 5,
                'nb_episode' => 103,
                'duration_episode' => 42,
                'image' => 'https://m.media-amazon.com/images/I/A1idit0cfkL._AC_SL1500_.jpg',
                'preface' => "Voilà comment donner envie
                aux ados de se plonger dans les séries policières !
                Ils sont jeunes, ils sont beaux, et ils sont trop forts. Et puis en plus il passe à la tv à 
                13H35 juste avant le club Dorothée, alors on est tous là.",
                'synopsis' => "Une brigade de police spéciale a établi ses quartiers dans une ancienne chapelle, au 
                21 Jump Street. A l'exception des capitaines Jenko et Fuller qui dirigent 
                successivement la brigade, l'équipe est formée de tout jeunes policiers, qui justement 
                En profitent pour s'intégrer dans les milieux des « jeunes à problèmes »",
                'summary' => "",
                'anecdote' => "Cette série aura sans doute marqué pour la plupart les débuts de Johnny Depp, bien 
                Que ce ne soit pas son premier rôle. Le connaissez-vous d'ailleurs ?
                C'était dans les griffes de la nuit, et oui, il aura été repéré en premier par Wes Craven, 
                pour aller défier Freddy Krueger.",
                'trailer' => 'https://www.youtube.com/embed/0LbEouEqo78',
                'original_title' => '21 jump street',
                'media_category_id' => '1',
                'media_type' => ['Drame', 'Policier'],
                'media_person' => ['Stephen J.Cannell', 'Patrick Hasburgh', 'Johnny Depp', 'Peter DeLuise', 'Holly Robinson Peete', 'Dustin Nguyen', 'Steven Williams', 'Richard Grieco'],
            ],
            [
                'title' => 'Buffy contre les vampires',
                'year' => '1990',
                'duration' => null,
                'nb_season' => 7,
                'nb_episode' => 144,
                'duration_episode' => 43,
                'image' => '',
                'preface' => "- Je sais qui tu es, Spike !
                                - Merci, je sais qui je suis aussi…",
                'synopsis' => "Buffy Summers (interprétée par Sarah Michelle Gellar) est une Tueuse de vampires issue d'une longue lignée d'Élues luttant contre les forces du mal, et notamment les vampires et les démons. À l'instar des précédentes Tueuses, elle bénéficie des enseignements de son Observateur, chargé de la guider et de l'entraîner.",
                'summary' => "Buffy Summers, la Tueuse de vampires en activité, vient d'emménager à Sunnydale avec sa mère et rencontre son nouvel Observateur, Rupert Giles, le bibliothécaire du lycée. Cet établissement est situé sur la Bouche de l'Enfer, ce qui attire en ville toutes sortes de créatures démoniaques (des vampires, des hyènes, Moloch (un démon), une marionnette psychopathe, un ogre monstrueux, une sociopathe invisible, une momie inca, des démons reptiliens, un croquemitaine tueur d'enfants, des hommes-poissons, les fantômes du lycée, des chiens de l'Enfer, etc.) et différents phénomènes paranormaux. Buffy se lie d'amitié avec deux autres lycéens, Willow Rosenberg et Alexander Harris, et ensemble ils engagent la lutte contre le Maître, un très vieux et puissant vampire qui tente d'ouvrir la Bouche de l'Enfer. Ils sont aidés par le mystérieux Angel, qui se révèle plus tard être un vampire doté d'une âme, et Buffy finit par éliminer le Maître, non sans avoir elle-même été cliniquement morte durant quelques secondes.",
                'anecdote' => "Joss Whedon, le créateur de Buffy, s'est inspiré du fait que souvent dans les films d'horreur une jeune fille blonde sans défense était toujours la première victime. Jouant avec cette image, la Tueuse de vampire a pris les traits d'une adolescente blonde, superficielle et gâtée.",
                'trailer' => 'https://www.youtube.com/embed/4UjXrHF0q2M',
                'original_title' => 'Buffy the Vampire Slayer',
                'media_category_id' => '1',
                'media_type' => ['Action', 'Fantastique'],
                'media_person' => ['Joss Whedon','Sarah Michelle Gellar', 'Alyson Hannigan', 'Nicholas Brendon', 'Charisma Carpenter', 'Anthony Stewart Head', 'David Boreanaz'],
            ],
            [
                'title' => 'Cosby Show',
                'year' => '1984',
                'duration' => null,
                'nb_season' => 8,
                'nb_episode' => 201,
                'duration_episode' => 24,
                'image' => '',
                'preface' => "Avoir les yeux fermés ne veut pas toujours dire qu'on dort, ni les avoir ouverts qu'on voit.",
                'synopsis' => "Cliff Huxtable, gynécologue et père de famille atypique vit le quotidien avec drôlerie et humour. Son épouse Clair et lui doivent faire face aux mille et une péripéties provoquées par la vie quotidienne d'une famille nombreuse.",
                'summary' => "",
                'anecdote' => 'Le générique de la série a été composé par Bill Cosby lui-même, en collaboration avec Stu Gardner.',
                'trailer' => 'https://www.youtube.com/embed/pbOcTs52hCk',
                'original_title' => 'Cosby',
                'media_category_id' => '1',
                'media_type' => ['Comédie'],
                'media_person' => ['Bill Cosby','Phylicia Rashad', 'Sabrina Le Beauf', 'Lisa Bonet', 'Malcolm-Jamal Warner'],
            ],
            [
                'title' => 'Highlander',
                'year' => '1992',
                'duration' => null,
                'nb_season' => 6,
                'nb_episode' => 119,
                'duration_episode' => 48,
                'image' => 'https://www.ecranlarge.com/uploads/image/001/149/vb2wg1ba6ss9a6ut16odtmtuuj6-644.jpg',
                'preface' => "« Je suis Duncan MacLeod, né il y a près de 400 ans dans les Hautes Terres d’Écosse. Je suis immortel comme une poignée d’élus. Des siècles durant nous avons attendu l’heure de l’Ultime combat au terme duquel l’épée qui tranche une tête libère le Quickening, la puissance de l’Éclair. À la fin, un seul d’entre nous survivra. »",
                'synopsis' => "Duncan MacLeod est un immortel issu du même clan que Connor MacLeod, le héros des films. Il a plus de quatre cents ans et travaille comme antiquaire avec sa compagne Tessa Noël entre la ville fictive de Seacouver (contraction de Vancouver, ville de Colombie-Britannique, où a été partiellement tournée la série, et Seattle, ville au Nord-Ouest des États-Unis), et Paris. Il protège également un jeune voyou prénommé Richie. La vie quotidienne de Duncan est ponctuée de duels à l'épée avec d'autres immortels qui veulent l'éliminer. En effet, chaque immortel qui en décapite un autre libère son « quickening », et s'approprie ainsi ses connaissances et ses pouvoirs.",
                'summary' => "saison 2 et 3:
                « Il est immortel. Il est né il y a 400 ans dans les Hautes Terres d’Écosse. Mais il n’est pas seul. Certains partagent son pouvoir. Les uns œuvrent pour le bien, les autres pour le mal. Il a combattu des siècles durant les forces des ténèbres. Celui qui lui tranchera la tête s’appropriera toute sa puissance. À la fin, un seul d’entre eux survivra. Son nom … Duncan MacLeod, … on l’appelle Highlander. »
                Saison 4, 5 et 6
                « Son nom : Duncan MacLeod ; on l'appelle « Highlander ». Il est né en 1592 dans les Hautes Terres d’Écosse et il est toujours de ce monde. Il est immortel. Depuis 400 ans sa vie est un combat, une romance, une quête. Sans relâche, il affronte d'autres immortels dans un duel à mort où le vainqueur décapite l'adversaire et s'approprie toute sa puissance. Je suis un guetteur. J'appartiens à une société secrète qui a pour but d'observer et de consigner leurs faits et gestes sans jamais interférer. Nous savons tout sur les immortels. À la fin, un seul d'entre eux survivra. Ce sera peut-être Duncan MacLeod : Highlander ! »",
                'anecdote' => 'Werner Stocker était déjà mort de cancer avant la fin de la première saison, la scène de son meurtre est donc en fait un assemblage de ses scènes précédentes.',
                'trailer' => 'https://www.youtube.com/embed/eygTl787eYQ',
                'original_title' => 'highlander',
                'media_category_id' => '1',
                'media_type' => ['Action'],
                'media_person' => ['Gregory Widen', 'Adrian Paul', 'Stan Kirsch', 'Jim Byrnes', 'Alexandra Vandernoot', 'Elizabeth Gracen'],
            ],
            [
                'title' => 'Parker Lewis ne perd jamais',
                'year' => '1990',
                'duration' => null,
                'nb_season' => 3,
                'nb_episode' => 73,
                'duration_episode' => 22,
                'image' => '',
                'preface' => "<< Synchronisation des montres! >>",
                'synopsis' => "Chaque épisode narre les péripéties et déboires d'un trio de lycéens avec à leur tête Parker Lewis. Il est toujours de la partie pour faire les quatre cents coups avec Mikey, son ami musicien, et Jerry, son ami intello. Malheureusement la surveillante générale, acariâtre et inflexible, ne l'entend pas de cette oreille : Mademoiselle Musso cherche par tous les moyens à mater Parker, ce en quoi elle est aidée par Frank Lemmer, son assistant, et parfois par Shelly, la soeur cadette et peste du protagoniste.",
                'summary' => "D'autres personnages apparaissent au fil des intrigues, comme les parents de Parker, ou Larry Kubiak, un jeune particulièrement imposant (environ 2 m pour 120 kg) à la gloutonnerie insatiable, ou encore Annie, petite amie de Parker. À travers tous ces différents personnages sont évoqués divers problèmes de société spécifiques à l'adolescence : les relations entre garçons et filles, l'alcool, les études, les élections, les addictions aux jeux vidéo, les fêtes etc.",
                'anecdote' => 'Le succès de Parker Lewis ne perd jamais réside avant tout dans les effets visuels cartoonesques, le personnage haut en couleurs de Parker, et les mouvements de caméra imprévisibles. Lors du passage à la troisième saison, les spectateurs sont déstabilisés par le changement de direction de la série... qui se nomme désormais Parker Lewis ! Ce qui faisait sa spécificité disparaît petit à petit : Parker perd ses chemises colorées et Jerry son imperméable, le côté "cartoon" est gommé... Les audiences baissent, et la chaîne annule alors la série.',
                'trailer' => 'https://www.youtube.com/embed/Ix2sqvbUh9s',
                'original_title' => "Parker Lewis Can't Lose",
                'media_category_id' => '1',
                'media_type' => ['Comédie'],
                'media_person' => ['Clyde Philipps','Corin Nemec', 'Billy Jayne','Troy Slaten', 'Melanie Chartoff', 'Abraham Benrubi'],
            ],
            [
                'title' => 'X-Files',
                'year' => '1993',
                'duration' => null,
                'nb_season' => 11,
                'nb_episode' => 218,
                'duration_episode' => 43,
                'image' => '',
                'preface' => "Ne faites confiance à personne Monsieur Mulder!",
                'synopsis' => "Les agents spéciaux du FBI Fox Mulder (David Duchovny) et Dana Scully (Gillian Anderson) sont les enquêteurs travaillant sur des dossiers non classés (les « X-Files »), des affaires non résolues impliquant des phénomènes paranormaux. Mulder croit en l'existence des extraterrestres et au paranormal, tandis que Scully, femme médecin et plus sceptique, est affectée à faire des analyses scientifiques sur les découvertes de Mulder pour l’amener à revenir vers des conclusions habituelles du FBI. Au cours de ces enquêtes, ils seront confrontés à des monstres, des événements surnaturels, des conspirations et à des phénomènes ayant un lien avec les extraterrestres, présentés comme étant à l'origine de l'enlèvement de la sœur de Mulder, Samantha. Au début de la série, les deux agents deviennent des pions dans un conflit plus vaste, et sont amenés à ne faire confiance qu'à eux-mêmes. Ils développent une relation étroite qui débute par une amitié platonique, puis évolue au fil des saisons, tout cela sous l’œil constamment menaçant de l'inquiétant homme à la cigarette.",
                'summary' => "Ce service, créé dans le courant des années 1940, est découvert en 1991 par les agents Fox Mulder et Diana Fowley, et placé sous l'autorité du chef de section Scott Blevins puis du directeur adjoint Walter Skinner. Les locaux alloués à ce service en disent long sur l'intérêt porté par la hiérarchie du FBI aux activités de recherche de cette équipe : un petit bureau au sous-sol du John Edgar Hoover building, le siège du FBI à Washington DC.

                Le service des affaires non classées (X-files en anglais, d'où le nom de la série) a pour mission de résoudre les enquêtes ne relevant pas des schémas classiques qu'emprunte normalement la police scientifique. Elles restent souvent non classées à cause du caractère incompréhensible et enveloppé de mystère qui les caractérisent. Les X-files sont des dossiers pour lesquels aucune conclusion n'a pu être apportée. Leurs contenus sont variés, mêlant tueurs en série, OVNI et affaires touchant à l'occultisme et au paranormal. Ils sont entreposés dans les locaux du service des affaires non classées. En 2002, le service des affaires non classées est définitivement fermé avant d'être rouvert en 2016.",
                'anecdote' => 'Des accessoires utilisés pour le décor du bureau de Mulder sont préservés et exposés au Hollywood Entertainment Museum à Los Angeles. Le poster I Want To Believe est constamment volé et il reste très peu de copies des affiches originales utilisées sur le plateau.',
                'trailer' => "https://www.youtube.com/embed/teibLCzIx6g",
                'original_title' => "The X-Files",
                'media_category_id' => '1',
                'media_type' => ['Science-Fiction', 'Fantastique'],
                'media_person' => ['Chris Cater','David Duchovny', 'Gillian Anderson'],
                
            ],
            [
                'title' => 'Sauvés par le gong',
                'year' => '1989',
                'duration' => null,
                'nb_season' => 4,
                'nb_episode' => 86,
                'duration_episode' => 23,
                'image' => '',
                'preface' => "Blanc bec",
                'synopsis' => "Zack, Slater, Screech, Lisa, Kelly et Jessie sont six inséparables amis fréquentant tous la Bayside High School en Californie. Leur quotidien est une suite d'aventures loufoques, qui se terminent le plus souvent dans le bureau du principal Richard Belding.",
                'summary' => "",
                'anecdote' => "A l'origine, Tiffani Thiessen ne devait pas faire partie de l'aventure Sauvés par gong : les années lycée. Kelly, son personnage, est d'ailleurs absente du pilote de la série, remplacée numériquement par Danielle (jouée par Essence Atkins). Ce n'est qu'après le tournage du pilote que Thiessen décida de continuer l'aventure aux côtés de Zack, Screech et Slater. Son personnage fut miraculeusement réintroduit dans le spin-off... et celui de Danielle disparut tout aussi miraculeusement ",
                'trailer' => "https://www.youtube.com/embed/4Cqzpb1Mko0",
                'original_title' => "Saved by the Bell",
                'media_category_id' => '1',
                'media_type' => ['Comédie'],
                'media_person' => ['Sam Bobrick','Brandon Tartikoff', 'Mark-Paul Gosselaar', 'Tiffani Amber Thiessen', 'Dustin Diamond', 'Mario Lopez', 'Elizabeth Berkley', 'Lark Voorhies', 'Dennis Haskins'],
                
            ],

            // Dessin animé

            [
                'title' => 'Albert le 5ème mousquetaire',
                'year' => '1994',
                'duration' => null,
                'nb_season' => 4,
                'nb_episode' => 26,
                'duration_episode' => 26,
                'image' => 'https://static.tvtropes.org/pmwiki/pub/images/albert5emousquetaire.jpg',
                'preface' => "Selon le générique du dessin animé, si Albert « n'a pas été reconnu par l'Histoire, c'est qu'à l'heure des honneurs, il préfère aller respirer l'air du soir et le parfum des fleurs. Hourra pour Albert ! »",
                'synopsis' => "Une erreur s'est glissée dans les romans d'Alexandre Dumas : les mousquetaires, D'Artagnan, Athos, Porthos et Aramis étaient accompagnés d'un cinquième mousquetaire : ce dernier s'appelait Albert de Parmagnan, il a été ignoré en raison de sa petite taille, mais sans lui les autres mousquetaires n'auraient jamais réussi à battre un seul garde du Cardinal.",
                'summary' => "",
                'anecdote' => "",
                'trailer' => 'https://www.youtube.com/embed/iT94il81hAE',
                'original_title' => "Albert the Fifth Musketeer",
                'media_category_id' => '2',
                'media_type' => ['Action'],
                'media_person' => [''],
            ],
            [
                'title' => 'Les chevaliers du zodiaque',
                'year' => '1986',
                'duration' => null,
                'nb_season' => 12,
                'nb_episode' => 145,
                'duration_episode' => 25,
                'image' => 'https://wwv.stockholm-sardou.fr/posters/pics/Les-Chevaliers-du-Zodiaque-Anime-1986.jpg',
                'preface' => "Il doit être plus difficile de vivre pour la réincarnation d'une déesse que de mourir comme un simple mortel....",
                'synopsis' => "Depuis les temps mythologiques, Athéna, la Déesse Olympienne de la Sagesse, qui défend la paix dans le monde, revient sur Terre pour protéger le genre humain des attaques incessantes des différents dieux désireux de contrôler le monde. Répugnant à utiliser des armes, la déesse est protégée par sa garde de quatre-vingt-huit chevaliers (comprenant douze chevaliers d'Or, vingt-quatre chevaliers d'Argent et quarante-huit chevaliers de Bronze), se battant à mains nues et tirant leur force du Cosmos (énergie vitale assimilable au Ki). Ils se réunissent autour d'elle au Sanctuaire, lieu où Athéna revient chaque fois à la vie et symbole de son pouvoir sur terre.",
                'summary' => "Les mystiques Chevaliers du Zodiaque veillent sur la paix universelle. Puissance du Cosmos, armures étincelantes et esprits vertueux, Seyar et ses compagnons livrent combat pour la gloire de la déesse Athéna et la sauvegarde de l'humanité...",
                'anecdote' => "Il y a en fait 88 chevaliers qui sont censés protéger Athéna. Les 5 chevaliers de Bronze -Phénix, Andromède, Dragon, Cygne et Pégase- stars du manga, mais aussi les chevaliers de bronze secondaires, les autres chevaliers 'mineurs', les 19 chevaliers d'Argent et les 12 chevaliers d'Or, dont chacun porte une armure d'un des signes zodiacal traditionnel. ",
                'trailer' => "https://www.youtube.com/embed/5xpuV3scsHs",
                'original_title' => "Saint Seiya",
                'media_category_id' => '2',
                'media_type' => ['Action'],
                'media_person' => ['Masami Kurumada'],
            ],
            [
                'title' => 'Les Tortues Ninja',
                'year' => '1987',
                'duration' => null,
                'nb_season' => 10,
                'nb_episode' => 193,
                'duration_episode' => 22,
                'image' => 'https://ih1.redbubble.net/image.1285482872.5253/raf,750x1000,075,t,FFFFFF:97ab1c12de.jpg',
                'preface' => "Cowabungaaaa",
                'synopsis' => "Les Tortues Ninja sont quatre petites tortues qui deviennent humanoïdes, à la suite d'un contact avec une étrange substance chimique rose, le mutagène. Splinter, un maître en arts martiaux transformé en rat à la suite d'une mutation similaire, va les accueillir dans les égouts de la ville de New York et leur enseigner le Ninjutsu, l'art des ninjas. Ils vont ensuite faire la rencontre d'une journaliste nommée April O'Neil, qui va les aider à lutter contre la bande de Shredder, un méchant qui se cache derrière un masque de fer.",
                'summary' => "",
                'anecdote' => "C'est Splinter qui donne leurs noms aux quatre tortues, d'après les noms de peintres de la Renaissance. On les reconnaît facilement à la couleur de leur masque et de leur bandeau. Chaque tortue maîtrise également une arme qui lui est propre.",
                'trailer' => "https://www.youtube.com/embed/-nbkXGlBFp4",
                'original_title' => "Teenage Mutant Ninja Turtles",
                'media_category_id' => '2',
                'media_type' => ['Action'],
                'media_person' => [''],
            ],
            [
                'title' => 'Nicky Larson',
                'year' => '1990',
                'duration' => null,
                'nb_season' => 8,
                'nb_episode' => 140,
                'duration_episode' => 22,
                'image' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQ0YlTLRiFNWOMDLY3XNKS4CcD8tzvo0DLxJRnEh7FnlOphANEL',
                'preface' => "",
                'synopsis' => "Tony Marconi, un ancien policier devenu détective privé, est associé à l'un de ses amis qui est également détective privé et garde du corps hors normes, Nicky Larson , et continue en parallèle certaines de ses enquêtes. Un jour Nicky fait la rencontre d'une jeune femme qui n'est autre que la sœur de Tony, Laura Marconi ; ce moment devient le point de départ de leur relation. Le jour où Laura fête son vingtième anniversaire et prépare un dîner chez son frère, Tony avoue à Nicky que Laura n'est pas sa vraie sœur, mais une enfant recueillie par son père et dont le vrai père est mort à la suite d'une course poursuite entre lui et le père de Tony, lui aussi policier. Avant de mourir, le père de Laura donna au père de Tony une bague provenant de la mère de Laura, le sommant de la lui remettre. Par culpabilité, le père de Tony promit d'élever Laura comme sa fille, prévoyant pour le jour de son vingtième anniversaire de lui révéler ses origines et de lui donner la bague de sa mère. Cependant, il mourut à peine dix ans plus tard.",
                'summary' => "Tony compte bien respecter la volonté de son père et tout révéler à Laura à l'occasion de ce dîner, mais ce soir-là il se rend dans un cabaret mal famé pour un nouveau travail, et se fait tuer par un membre d'une organisation criminelle, le Pégase Rouge, du fait de son refus de travailler pour eux. Il parvient à s'enfuir et marche avec difficulté jusqu'à l'immeuble où vit Nicky ; il lui confie la bague et lui demande de tout dire à Laura avant de mourir dans ses bras. Afin de le venger, Nicky décime l'organisation du Pégase Rouge responsable de la mort de Tony, puis annonce à Laura la mort de son frère, mais sans rien lui dire de plus pour éviter de la rendre encore plus malheureuse. Elle décide alors de devenir l'assistante de Nicky à la place de son frère. Ils finiront par tomber amoureux l'un de l'autre, sans jamais vraiment se l'avouer ouvertement, bien qu'il existe de nombreuses scènes très intimes entre eux (la plus marquante étant sûrement de la fin de l'épisode 101, Chantage atomique, 2e partie).",
                'anecdote' => '',
                'trailer' => "https://www.youtube.com/embed/Z2sY7423vCA",
                'original_title' => "City Hunter",
                'media_category_id' => '2',
                'media_type' => ['Action', 'Comédie'],
                'media_person' => [''],
            ],
            [
                'title' => 'Olive et Tom',
                'year' => '1988',
                'duration' => null,
                'nb_season' => 5,
                'nb_episode' => 128,
                'duration_episode' => 25,
                'image' => '',
                'preface' => "",
                'synopsis' => "Olive et Tom narre l'histoire du jeune Olivier Atton (Tsubasa Ohzora dans la VO), qui rêve de devenir le meilleur footballeur au monde. Il rencontre et affronte tous les meilleurs joueurs du pays, avec lesquels il se lie d'amitié, tels que Thomas Price (Genzô Wakabayashi), Ben Becker (Tarō Misaki) ou encore Bruce Harper (Ryō Ishizaki).",
                'summary' => "",
                'anecdote' => '',
                'trailer' => "https://www.youtube.com/embed/juQl2UbcD7w",
                'original_title' => "Captain Tsubasa",
                'media_category_id' => '2',
                'media_type' => ['Sport'],
                'media_person' => [''],
            ],
            [
                'title' => 'Les Snorky',
                'year' => '1984',
                'duration' => null,
                'nb_season' => 4,
                'nb_episode' => 65,
                'duration_episode' => 22,
                'image' => '',
                'preface' => "♪♫ Qui qui qui sont les Snorky Qui qui qui mais qui?♫♪",
                'synopsis' => "Les aventures de petites créatures sous-marines colorées, toujours prêtes à aider en cas de problème. Elles disposent d'une sorte de tuba sur la tête dont elles se servent pour se déplacer sous l'eau.",
                'summary' => "Mais qui sont ces petits êtres aquatiques ? C'est un peuple dont les moeurs et les coutumes sont communes pour beaucoup avec celles des humains ^^ L'histoire suit plus particulièrement un groupe de jeunes Snorkys accompagné de leur animal de compagnie une pieuvre.
                Lors de différentes aventures, ils feront preuve de courage, de gentillesse et de sens pratique !
                On peut compter parmi leurs ennemis le requin par exemple",
                'anecdote' => 'Pour la petite anecdote, sachez que la série est née en fait d’un désaccord entre le producteur exécutif, Freddy Monnickendam, qui produit aussi les Schtroumpfs en 1981, et Peyo. Leur conception de ce dernier dessin animé connu de tous fait en effet l’objet d’une profonde mésentente entre les deux hommes. Freddy Monnickendam décide alors de créer les Snorky qui répond plus à son attente d’une histoire plus simple et accessible.',
                'trailer' => "https://www.youtube.com/embed/Q8s7gikNeFM",
                'original_title' => "Snorks",
                'media_category_id' => '2',
                'media_type' => ['Jeunesse'],
                'media_person' => [''],
            ],

            // Emissions

            [
                'title' => "C'est pas sorcier",
                'year' => '1993',
                'duration' => null,
                'nb_season' => 20,
                'nb_episode' => 599,
                'duration_episode' => 30,
                'image' => 'https://i2.wp.com/www.filmspourenfants.net/wp-content/uploads/2018/02/cest-pas-sorcier-a.jpg?fit=555%2C816&ssl=1',
                'preface' => "Emission éducative de vulgarisation scientifique. ",
                'synopsis' => "Jamy réalise, depuis la remorque d'un camion transformée en laboratoire, des démonstrations scientifiques ludiques à l'aide de maquettes animées. Il est assisté de Fred ou Sabine, qui ont pour rôles d'aller sur le terrain rencontrer les personnes liées au sujet et découvrir au plus près la source de l'étude.",
                'summary' => "",
                'anecdote' => "C'est parfaitement éducatif et partaitement ludique !",
                'trailer' => "https://www.youtube.com/embed/bVPFuzSi93I",
                'original_title' => "",
                'media_category_id' => '3',
                'media_type' => ['Divertissement'],
                'media_person' => ['Jamy Gourmaud', 'Frédéric Courant', 'Sabine Quidou'],
            ],
            [
                'title' => 'Interville',
                'year' => '1962',
                'duration' => null,
                'nb_season' => 5,
                'nb_episode' => 128,
                'duration_episode' => 25,
                'image' => 'https://img.over-blog-kiwi.com/2/18/81/12/20170625/ob_60b8f1_logointervillestf1.jpg',
                'preface' => "Emission de jeux opposants deux équipes dans des épreuves faisant appel à l'adresse et à la condition physique des candidats.",
                'synopsis' => "Diffusé pendant plus de cinquante ans (malgré plusieurs interruptions), il est l'un des jeux télévisés français à la plus importante longévité, Deux villes françaises s'affrontent amicalement à travers une série d'épreuves physiques et de jeux d'adresse, sur terre, dans l'eau et dans les airs. Les épreuves se déroulent autour d'une arène.",
                'summary' => "",
                'anecdote' => "Emission phare de l'été.",
                'trailer' => "https://www.youtube.com/embed/XFd9GeLFIbU",
                'original_title' => "",
                'media_category_id' => '3',
                'media_type' => ['Divertissement'],
                'media_person' => ['Jean-Pierre Foucault', 'Nathalie Simon'],
            ],
            [
                'title' => 'La trilogie du samedi',
                'year' => '1997',
                'duration' => null,
                'nb_season' => null,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => 'https://www.cryptoseries.fr/media/k2/items/cache/306600c868fe6b67afe34e9f7a9f98b7_XL.jpg',
                'preface' => "La Trilogie du samedi est un bloc de programmes fantastiques diffusé sur M6.",
                'synopsis' => "M6 consacre généralement ses soirées du samedi aux séries télévisées américaines fantastiques. On y retrouve des séries phares telles que X-Files, Le Caméléon, les Contes de la crypte.",
                'summary' => "",
                'anecdote' => 'X-files ça faisait un peu peur quand même..',
                'trailer' => "https://www.youtube.com/embed/pk60PG8zKcc",
                'original_title' => "",
                'media_category_id' => '3',
                'media_type' => ['Divertissement'],
                'media_person' => [''],
            ],
            [
                'title' => 'Les minikeums',
                'year' => '1993',
                'duration' => null,
                'nb_season' => 10,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSn4h_6WNArNzQnoJhvBshBtO-78nH9lMjO45GozvNoMgnRimEo',
                'preface' => "Emission jeunesse diffusant des dessins animés et présentée par des marionettes n'hésitant pas à faire le show ",
                'synopsis' => "Programme diffusé sur France 3 le matin et l'après-midi après l'école ainsi que pendant les vacances scolaires. Les marionnettes qui le présentent et l'animent, représentent des caricatures de personnes connues des enfants à l'époque. Elles n'hésitent pas entre deux dessins animés se donner en spectacle au travers faux jeux tv détournés, jeux d'acteurs, boys band....",
                'summary' => "",
                'anecdote' => '♪ Melissaaaaaa non ne pleureuh pas ! ♪ ',
                'trailer' => "https://www.youtube.com/embed/s9MGHjDFq9U",
                'original_title' => "",
                'media_category_id' => '3',
                'media_type' => ['Divertissement'],
                'media_person' => [''],
            ],
            [
                'title' => 'Fort Boyard',
                'year' => '1990',
                'duration' => null,
                'nb_season' => 5,
                'nb_episode' => 128,
                'duration_episode' => 25,
                'image' => 'https://media.senscritique.com/media/000011039229/source_big/Fort_Boyard.jpg',
                'preface' => "Emission faisant appel à des célébrités afin de les confronter à des épreuves et de fortes sensations",
                'synopsis' => "Une équipe de candidats doit faire preuve d'ingéniosité pour vaincre épreuves et aventures, dans un fort logé en pleine mer. Ils doivent, au fil de chaque émission, surmonter leur peur, faire preuve d'adresse ou de jugeote. La devinette posée par le fameux Père Fouras constitue l'épreuve emblêmatique du jeu.",
                'summary' => "",
                'anecdote' => 'Le Père Fouras a une sacrée cote !',
                'trailer' => "https://www.youtube.com/embed/xwAotdN26kY",
                'original_title' => "",
                'media_category_id' => '3',
                'media_type' => ['Divertissement'],
                'media_person' => ['Patrice Laffont'],
            ],
            [
                'title' => 'Hit Machine',
                'year' => '1994',
                'duration' => null,
                'nb_season' => null,
                'nb_episode' => null,
                'duration_episode' => null,
                'image' => 'https://upload.wikimedia.org/wikipedia/fr/5/56/Hitmachine.jpg',
                'preface' => "Emission musicale diffusant des clips vidéos sous la forme d'un classement, censé refléter les ventes de disques",
                'synopsis' => "",
                'summary' => "Charly et Lulu présentent le Hit machine, en plus de diffuser les clips video,  les artistes viennent chanter sur le plateau. Ainsi tous les plus grands artistes y sont invités. Très vite, le succès croît, le Hit machine monte en puissance.",
                'anecdote' => 'Bip Bip ! Ouééééééé',
                'trailer' => "https://www.youtube.com/embed/9aMMdtuFQMY",
                'original_title' => "",
                'media_category_id' => '3',
                'media_type' => ['Divertissement'],
                'media_person' => ['Charly Nestor', 'Jean-Marc Lubin'],
            ],

        ];

        // Type's table

        $typeList = [
            'Science-Fiction', 
            'Horreur',
            'Divertissement',
            'Aventure',
            'Comédie',
            'Action',
            'Thriller',
            'Drame',
            'Policier',
            'Sport',
            'Fantastique',
            'Jeunesse',
        ];

        foreach ($typeList as $typeName) {
            $type = new Type();

            $type->setName($typeName);

            $manager->persist($type);
            $manager->flush();
            
            // we push the type
            $types[] = $type;
        }

        // Person's table

        $personData= [
            [
                'name' => 'James Cameron',
                'birthdate' => '1954-08-16',
                'nationality' => 'Canadienne',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/James_Cameron_by_Gage_Skidmore.jpg/800px-James_Cameron_by_Gage_Skidmore.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Ed Harris',
                'birthdate' => '1950-11-28',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Ed_Harris_by_Gage_Skidmore.jpg/800px-Ed_Harris_by_Gage_Skidmore.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Mary Elizabeth Mastrantonio',
                'birthdate' => '1958-11-17',
                'nationality' => 'Américaine',
                'image' => 'http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcQPPWyzpA3XmnjRl_NfqP3_KRVDkrIm92mmBeuX95J8B-2FXU3KT6AfgbJk8vtU',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Michael Biehn',
                'birthdate' => '1956-07-31',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Michael_Biehn_by_Gage_Skidmore.jpg/800px-Michael_Biehn_by_Gage_Skidmore.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Patrice Laffont',
                'birthdate' => '1939-08-21',
                'nationality' => 'Française',
                'image' => 'https://file1.telestar.fr/var/telestar/storage/images/3/2/4/4/3244709/patrice-laffont.jpg?alias=original',
                'category' => 'Animateur',
            ],
            [
                'name' => 'Tom Shadyac',
                'birthdate' => '1958-12-11',
                'nationality' => 'Américaine',
                'image' => 'https://angelusnews.com/wp-content/uploads/2019/09/75nkv1g1gy_shutterstock_149971577.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Jim Carrey',
                'birthdate' => '1962-01-17',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Jim_Carrey_2008.jpg/800px-Jim_Carrey_2008.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Courteney Cox',
                'birthdate' => '1964-06-15',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0f/CourteneyCoxFeb09.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Sean Young',
                'birthdate' => '1959-11-19',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/38/Sean_Young_LF_%282%29.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Jean-Pierre Foucault',
                'birthdate' => '1947-11-23',
                'nationality' => 'Française',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/76/Jean-Pierre_Foucault_en_2018.jpg',
                'category' => 'Animateur',
            ],
            [
                'name' => 'Ridley Scott',
                'birthdate' => '1937-11-30',
                'nationality' => 'Américano-britannique',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/NASA_Journey_to_Mars_and_%E2%80%9CThe_Martian%22_%28201508180030HQ%29.jpg/800px-NASA_Journey_to_Mars_and_%E2%80%9CThe_Martian%22_%28201508180030HQ%29.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Sigourney Weaver',
                'birthdate' => '1949-10-08',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Sigourney_Weaver_by_Gage_Skidmore.jpg/800px-Sigourney_Weaver_by_Gage_Skidmore.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Tom Skerritt',
                'birthdate' => '1933-08-25',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Tom_Skerritt_2014_%28cropped%29.jpg/800px-Tom_Skerritt_2014_%28cropped%29.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Veronica Cartwright',
                'birthdate' => '1949-04-20',
                'nationality' => 'Américano-britannique',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/48/Veronica_Cartwright.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Nathalie Simon',
                'birthdate' => '1964-10-25',
                'nationality' => 'Française',
                'image' => 'https://voi.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fprismamedia_people.2F2017.2F06.2F30.2F68d2d462-7767-4e4a-942a-db6d4e2bb68d.2Ejpeg/2048x1536/quality/80/nathalie-simon.jpeg',
                'category' => 'Animateur',
            ], 
            [
                'name' => 'Jamy Gourmaud',
                'birthdate' => '1964-01-17',
                'nationality' => 'Française',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Jamy_gourmaud_LSlaP_101013.jpg/800px-Jamy_gourmaud_LSlaP_101013.jpg',
                'category' => 'Animateur',
            ],
            [
                'name' => 'Frédéric Courant',
                'birthdate' => '1960-04-14',
                'nationality' => 'Française',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/F%C3%AAte_de_la_science_2016_-_Cit%C3%A9_des_Sciences_et_de_l%27Industrie_-_007.jpg/800px-F%C3%AAte_de_la_science_2016_-_Cit%C3%A9_des_Sciences_et_de_l%27Industrie_-_007.jpg',
                'category' => 'Animateur',
            ],
            [
                'name' => 'Sabine Quidou',
                'birthdate' => '1970-11-27',
                'nationality' => 'Française',
                'image' => 'https://static1.purepeople.com/articles/9/19/12/69/@/2445580-sabine-quindou-au-photocall-de-france-te-950x0-1.jpg',
                'category' => 'Animateur',
            ],
            [
                'name' => 'Harrison Ford',
                'birthdate' => '1942-07-13',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Harrison_Ford_by_Gage_Skidmore_2.jpg/800px-Harrison_Ford_by_Gage_Skidmore_2.jpg',
                'category' => 'Animateur',
            ],
            [
                'name' => 'Clyde Philipps',
                'birthdate' => '1958-10-03',
                'nationality' => 'Américaine',
                'image' => 'http://t0.gstatic.com/licensed-image?q=tbn:ANd9GcRlW3wNeZbEcWGi8VgBPTh1sy6AWUqch5RYTnaSd5h5Cdok4-BITo-EbbMX-Ftr',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Corin Nemec',
                'birthdate' => '1971-11-05',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/2018-12-16_16-40-40_SF-Connexion-Cernay.jpg/800px-2018-12-16_16-40-40_SF-Connexion-Cernay.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Billy Jayne',
                'birthdate' => '1969-04-10',
                'nationality' => 'Américaine',
                'image' => 'https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/series/que-sont-ils-devenus-les-acteurs-de-parker-lewis-ne-perd-jamais/billy-jayne-aujourd-hui/55327702-1-fre-FR/Billy-Jayne-aujourd-hui.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Troy Slaten',
                'birthdate' => '1975-02-21',
                'nationality' => 'Américaine',
                'image' => 'https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/loisirs/series/que-sont-ils-devenus-les-acteurs-de-parker-lewis-ne-perd-jamais/troy-slaten-est-jerry-steiner/55327928-1-fre-FR/Troy-Slaten-est-Jerry-Steiner.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Melanie Chartoff',
                'birthdate' => '1948-12-15',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4f/Melanie_Chartoff_80.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Abraham Benrubi',
                'birthdate' => '1969-10-04',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Abraham_Benrubi_at_NASA_Social.jpg/800px-Abraham_Benrubi_at_NASA_Social.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Rutger Hauer',
                'birthdate' => '1944-01-23',
                'nationality' => 'Néerlandaise',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Rutger_Hauer_%282018%29.jpg/800px-Rutger_Hauer_%282018%29.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'John McTiernan',
                'birthdate' => '1951-01-08',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/John_McTiernan_at_the_Cin%C3%A9math%C3%A8que_Fran%C3%A7aise.JPG/800px-John_McTiernan_at_the_Cin%C3%A9math%C3%A8que_Fran%C3%A7aise.JPG',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Bruce Willis',
                'birthdate' => '1955-03-19',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Bruce_Willis_by_Gage_Skidmore.jpg/800px-Bruce_Willis_by_Gage_Skidmore.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Alan Rickman',
                'birthdate' => '1946-02-21',
                'nationality' => 'Britannique',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Alan_Rickman_after_Seminar_%283%29.jpg/800px-Alan_Rickman_after_Seminar_%283%29.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Alexander Godunov',
                'birthdate' => '1949-11-28',
                'nationality' => 'Américaine',
                'image' => '',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Gregory Widen',
                'birthdate' => '1958-11-30',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Gregorywiden.jpg/1024px-Gregorywiden.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Adrian Paul',
                'birthdate' => '1959-05-29',
                'nationality' => 'Anglaise',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Adrian_Paul_20100704_Japan_Expo_1.jpg/800px-Adrian_Paul_20100704_Japan_Expo_1.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Stan Kirsch',
                'birthdate' => '1968-07-17',
                'nationality' => 'Américaine',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTc0MzY5NzY1Ml5BMl5BanBnXkFtZTcwOTcwMTgwOA@@._V1_UY1200_CR153,0,630,1200_AL_.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Jim Byrnes',
                'birthdate' => '1948-09-22',
                'nationality' => 'Américaine',
                'image' => 'https://images.mubicdn.net/images/cast_member/135077/cache-271380-1508834318/image-w856.jpg?size=800x',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Alexandra Vandernoot',
                'birthdate' => '1965-09-19',
                'nationality' => 'Belge',
                'image' => 'https://static.wikia.nocookie.net/highlander/images/c/cb/Alexandra_Vandernoot.jpg/revision/latest?cb=20160501172032&path-prefix=fr',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Elizabeth Gracen',
                'birthdate' => '1961-04-03',
                'nationality' => 'Américaine',
                'image' => 'https://fr.web.img3.acsta.net/pictures/15/04/24/16/39/350811.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Stephen J.Cannell',
                'birthdate' => '1941-02-05',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Cannell.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Patrick Hasburgh',
                'birthdate' => '1949-11-28',
                'nationality' => 'Américaine',
                'image' => 'https://images.mubicdn.net/images/cast_member/243763/cache-469539-1568215337/image-w856.jpg?size=800x',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Johnny Depp',
                'birthdate' => '1963-06-09',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Johnny_Depp-2757_%28cropped%29.jpg/800px-Johnny_Depp-2757_%28cropped%29.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Peter DeLuise',
                'birthdate' => '1966-11-06',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/37/Peter_DeLuise_2011.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Holly Robinson Peete',
                'birthdate' => '1964-09-18',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/84/Holly_Robinson_Peete.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Dustin Nguyen',
                'birthdate' => '1962-09-17',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Dustin_Nguyen_22072007_BKKIFF.jpg/800px-Dustin_Nguyen_22072007_BKKIFF.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Steven Williams',
                'birthdate' => '1949-01-07',
                'nationality' => 'Américaine',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNTEyNjQ5Y2EtNGNhYy00YmY5LTkwMGItMmE0NTEwYzBhYTAyXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Richard Grieco',
                'birthdate' => '1965-03-23',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/70/Richard_Grieco.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Bill Cosby',
                'birthdate' => '1937-07-12',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Bill_Cosby_upright.jpg/800px-Bill_Cosby_upright.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Phylicia Rashad',
                'birthdate' => '1948-06-19',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/05/Phylicia_Rashad.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Sabrina Le Beauf',
                'birthdate' => '1958-03-21',
                'nationality' => 'Américaine',
                'image' => 'http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcT_y-SL4Eu2WH9tVeahsqDloq8w-OyC0DDZW7DIPo44K00oXxTRe8veTfWCcSjd',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Lisa Bonet',
                'birthdate' => '1967-11-1',
                'nationality' => 'Américaine',
                'image' => 'http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcQIwbrO6wuGSIDITEs_GFj5b4AhRwkp_Ormyos0G4tqhMMA6WOyq3R7-VhBjAdj',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Malcolm-Jamal Warner',
                'birthdate' => '1970-08-18',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Malcolm-Jamal_Warner.jpg/800px-Malcolm-Jamal_Warner.jpg',
                'category' => 'Acteur',
            ],

            [
                'name' => 'Joss Whedon',
                'birthdate' => '1964-06-23',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Joss_Whedon_by_Gage_Skidmore_8.jpg/800px-Joss_Whedon_by_Gage_Skidmore_8.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Sarah Michelle Gellar',
                'birthdate' => '1977-04-14',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2c/Sarah_Michelle_Gellar_Comic-Con_5%2C_2011.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Alyson Hannigan',
                'birthdate' => '1977-04-14',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Alyson_Hannigan_May_2015.jpg/800px-Alyson_Hannigan_May_2015.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Nicholas Brendon',
                'birthdate' => '1971-04-12',
                'nationality' => 'Américaine',
                'image' => 'http://t2.gstatic.com/licensed-image?q=tbn:ANd9GcSCoSQg63jDBgwxH5-ZWl5ga5ADcXwNXgx2OOHcCkwH5iFCea17kL_JR1rNj30K',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Charisma Carpenter',
                'birthdate' => '1970-07-23',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Charisma_Carpenter_May_2015.jpg/800px-Charisma_Carpenter_May_2015.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Anthony Stewart Head',
                'birthdate' => '1954-02-20',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/9b/Head%2C_Anthony_Stewart_%282007%29.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'David Boreanaz',
                'birthdate' => '1969-05-16',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/David_Boreanaz_Comic-Con_2012.jpg/800px-David_Boreanaz_Comic-Con_2012.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Chris Cater',
                'birthdate' => '1956-10-13',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Chris_Carter_by_Gage_Skidmore.jpg/800px-Chris_Carter_by_Gage_Skidmore.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'David Duchovny',
                'birthdate' => '1960-08-07',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/David_Duchovny_by_Gage_Skidmore.jpg/800px-David_Duchovny_by_Gage_Skidmore.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Gillian Anderson',
                'birthdate' => '1968-08-09',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Gillian_Anderson_Berlinale_2017.jpg/800px-Gillian_Anderson_Berlinale_2017.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Richard Donner',
                'birthdate' => '1930-04-24',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Richard_Donner_%284505771045%29_%28cropped%29.jpg/717px-Richard_Donner_%284505771045%29_%28cropped%29.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Sean Astin',
                'birthdate' => '1971-02-25',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Sean_Astin_by_Gage_Skidmore.jpg/612px-Sean_Astin_by_Gage_Skidmore.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Josh Brolin',
                'birthdate' => '1968-02-12',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Josh_Brolin_SDCC_2014.jpg/330px-Josh_Brolin_SDCC_2014.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Jeff Cohen',
                'birthdate' => '1974-06-25',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Jeff_Cohen_%28lawyer_and_actor%29.jpg/330px-Jeff_Cohen_%28lawyer_and_actor%29.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Sam Bobrick',
                'birthdate' => '1932-07-24',
                'nationality' => 'Américaine',
                'image' => 'https://dramaparis.com/wp/wp-content/uploads/2017/10/SAM-BOBRICK-NB-340x400.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Brandon Tartikoff',
                'birthdate' => '1949-01-13',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/91/Brandon_Tartikoff_at_the_1988_Emmy_Awards.jpg',
                'category' => 'Réalisateur',
            ],
            [
                'name' => 'Mark-Paul Gosselaar',
                'birthdate' => '1974-03-01',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Mark_Paul_Gosselaar_1.jpg/800px-Mark_Paul_Gosselaar_1.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Tiffani Amber Thiessen',
                'birthdate' => '1974-01-23',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Tiffani_Thiessen_%282018%29.jpg/800px-Tiffani_Thiessen_%282018%29.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Dustin Diamond',
                'birthdate' => '1977-01-07',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7f/Dustin_Diamond_2012.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Mario Lopez',
                'birthdate' => '1973-10-10',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/MarioLopezAAFeb09.jpg/800px-MarioLopezAAFeb09.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Elizabeth Berkley',
                'birthdate' => '1972-07-28',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0a/Elizabeth_Berkley_2016.png',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Lark Voorhies',
                'birthdate' => '1974-03-25',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a7/Lark_Voorhies.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Dennis Haskins',
                'birthdate' => '1950-11-18',
                'nationality' => 'Américaine',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/Haskins.jpg',
                'category' => 'Acteur',
            ],
            [
                'name' => 'Charly Nestor',
                'birthdate' => '1964-04-10',
                'nationality' => 'Française',
                'image' => 'http://t2.gstatic.com/licensed-image?q=tbn:ANd9GcSG4c22DcCjYET0nZ3xYiivavy6ozvuB4Syx6_2euiuKnzGnNLQHLV1_4A17wFT',
                'category' => 'Animateur',
            ],
            [
                'name' => 'Jean-Marc Lubin',
                'birthdate' => '1963-01-08',
                'nationality' => 'Française',
                'image' => 'https://static1.purepeople.com/articles/2/36/90/02/@/5320910-exclusif-portrait-de-jean-marc-lubin-amp_article_image_big-3.jpg',
                'category' => 'Animateur',
            ],
            [
                'name' => 'Masami Kurumada',
                'birthdate' => '1953-12-06',
                'nationality' => 'Japonaise',
                'image' => 'https://www.manga-news.com/public/images/authors/masami-kurumada.jpg',
                'category' => 'Réalisateur',
            ],
        ];    

        foreach ($personData as $dataperson) {
            $person = new Person();

            $person->setFirstname($dataperson['name']);
            $person->setBirthdate(new \DateTime($dataperson['birthdate']));
            $person->setNationality($dataperson['nationality']);
            $person->setImage($dataperson['image']);
            $person->setCategory($dataperson['category']);

            $manager->persist($person);
            $manager->flush();
            
            // we push the person
            $persons[] = $person;

        }

        // Table media category

        $mediasCategoriesList = ['Film', 'Série', 'Dessin Animé', 'Emission'];

        foreach ($mediasCategoriesList as $mediaCategoryName) {
            $mediaCategory = new MediaCategory();

            $mediaCategory->setName($mediaCategoryName);

            $manager->persist($mediaCategory);
            $manager->flush($mediaCategory);

            // we push the category
            $mediaCategories[] = $mediaCategory;
        }
        
        foreach ($mediaData as $data) {
            $media = new Media();

            $media->setTitle($data['title']);
            $media->setYear($data['year']);
            $media->setDuration($data['duration']);
            $media->setNbSeason($data['nb_season']);
            $media->setNbEpisode($data['nb_episode']);
            $media->setDurationEpisode($data['duration_episode']);
            $media->setImage($data['image']);
            $media->setPreface($data['preface']);
            $media->setSynopsis($data['synopsis']);
            $media->setSummary($data['summary']);
            $media->setAnecdote($data['anecdote']);
            $media->setTrailer($data['trailer']);
            $media->setOriginalTitle($data['original_title']);
            $media->setMediaCategories($mediaCategories[$data['media_category_id']]);

            foreach ($types as $media_type) {
                if (in_array($media_type->getName(), $data['media_type'])) {
                    $media->addType($media_type);
                }
            }

            foreach ($persons as $media_person) {
                if (in_array($media_person->getFirstname(), $data['media_person'])) {
                    $media->addPerson($media_person);
                }
            }

            $manager->persist($media);
        }
      
        $manager->flush($media);
    }
}
