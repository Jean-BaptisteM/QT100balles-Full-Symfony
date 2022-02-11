<?php

namespace App\Fixtures\Data;

use App\Entity\Item;
use App\Entity\ItemCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ItemFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $itemData = [

            // Bonbons

            [
                'name' => 'Bâtonnets de chewing gum',
                'year' => '1980',
                'image' => 'batonnets-de-chewing-gum.jpg',
                'preface' => 'Ces bâtonnets/cigarettes de bubble gum sont des bonbons d\'antan en gomme fruitée et sucrée à mâcher',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Biberon de bonbons',
                'year' => '1980',
                'image' => 'biberon-de-bonbons-perly-bib.jpg',
                'preface' => 'Biberons en plastique remplis de petites billes aux goûts fruités.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Crayon en chocolat',
                'year' => '1980',
                'image' => 'crayons-en-chocolat.jpg',
                'preface' => 'Batonnets de chocolat en forme de crayon et rangés dans leur boîte. A deux pas de la fameuse cigarette en chocolat !',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Creepy Jelly',
                'year' => '1980',
                'image' => 'insectes-creepy-jelly.jpg',
                'preface' => 'Bonbons en forme d\'insecte gélifié moins amidonné, plus gélatineux, très ludique.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Dentiers',
                'year' => '1980',
                'image' => 'bonbons-dentiers.jpg',
                'preface' => 'Bonbons en forme de dentier de vampire decouverts de sucre.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Frizzy Pazzy',
                'year' => '1980',
                'image' => 'chewing-gum-frizzy-pazzy.jpg',
                'preface' => 'Petits granules qui claquent et explosent dans la bouche avant de se transformer en chewing-gum. Du ludique et du fun !',
                'video' => 'https://www.youtube.com/embed/f-ZlAU-JMc8',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Graines de tournesol pipas',
                'year' => '1980',
                'image' => 'graines-de-tournesol-pipas.jpg',
                'preface' => 'Grillées et salées, ces graines de tournesol n\'en étaient pas moins des stars dans ton rayon confiseries.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Meringues Petit Jésus',
                'year' => '1980',
                'image' => 'meringues-jesus.jpg',
                'preface' => 'Bonbons anciens, ces petites meringues  sont très tendres, en forme de Petits Jésus en sucre.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Nutella Go',
                'year' => '1980',
                'image' => 'nutella-go.jpg',
                'preface' => 'Petit pot à double compartiment, l\'un renferme des biscuits en bâtonnet à tremper dans l\'autre qui est rempli de Nutella.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Rock aux fruits',
                'year' => '1980',
                'image' => 'bonbons-rock-aux-fruits-x-20.jpg',
                'preface' => 'Bonbons rétro ronds et plats avec un motif de fruit, emballés individuellement.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Roudoudou',
                'year' => '1980',
                'image' => 'roudoudou-coquillage-a-lecher.jpg',
                'preface' => 'Le roudoudou est une confiserie en sucre cuit, coulée dans une petite coquille en plastique, en forme de coquillage.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Softi cubes',
                'year' => '1980',
                'image' => 'pate-a-macher-softi-en-cubes-gout-fruits-lot-de-5.jpg',
                'preface' => 'La saveur des fruits d’été dans une pâte à mâcher tendre. ',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Sucette Mammouth',
                'year' => '1980',
                'image' => 'sucette-mammouth-chewing-gum.jpg',
                'preface' => 'Une sucette géante qui se consume très lentement. Elle est constituée de plusieurs couches qui changent de goût pour arriver au centre à  une bille de chewig-gum. ',
                'video' => '',
                'slug' => '',
                'category_item_id' => '0',
            ],
            [
                'name' => 'Sucette Musicale',
                'year' => '1980',
                'image' => 'sucette-musicale-melody-pops.jpg',
                'preface' => 'Une sucette en forme de sifflet, idéale pour casser les oreilles.',
                'video' => 'https://www.youtube.com/embed/536vrpx0Vlw',
                'slug' => '',
                'category_item_id' => '0',
            ],

            // Objets
            
            [
                'name' => 'Walkman',
                'year' => '1979',
                'image' => 'walkman.jpg',
                'preface' => 'Un lecteur de cassette audio portatif, tout un symbole de cette époque !',
                'video' => 'https://www.youtube.com/embed/7lipckhgG5g',
                'slug' => '',
                'category_item_id' => '1',
            ],
            [
                'name' => 'Cassette vidéo VHS',
                'year' => '1976',
                'image' => 'vhs.jpg',
                'preface' => 'Disparue dans les années 2000 au profit du DVD, la bonne vieille cassette qui se prêtait pour matter nos bons vieux films',
                'video' => 'https://www.youtube.com/embed/G2G2zjNiwig',
                'slug' => '',
                'category_item_id' => '1',
            ],
            [
                'name' => 'Tam-tam',
                'year' => '1995',
                'image' => 'tam-tam.jpg',
                'preface' => 'Il permettait d’afficher 3 ou 4 lignes de texte.On appelle un télé-opérateur pour lui dicter le message qu’il devait ensuite écrire et envoyer sur le numéro qu’on a mentionné. Celui qui reçoit le message n’avait pas d’autre choix que de rappeler depuis une cabine téléphonique. Service arrêté en 1999 au profit de la migration vers le service de téléphonie mobile.',
                'video' => '',
                'slug' => '',
                'category_item_id' => '1',
            ],

            // Jouets

            [
                'name' => 'Furby',
                'year' => '1998',
                'image' => 'peluche-furby.jpg',
                'preface' => 'Furby est un jouet robotique électronique sous forme d\'une petite peluche animée interactive, qu\'il s\'agit de traiter avec grand soin en tant qu\'animal de compagnie virtuel. D\'apparence, c\'est une sorte de croisement entre un petit rongeur, un chat et un hibou qui fait également penser à un mogwai (gremlin avant la métamorphose). Plus son propriétaire s\'en occupe plus il parle français.',
                'video' => 'https://www.youtube.com/embed/52bDMZaCunA',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Jojo\'s',
                'year' => '1996',
                'image' => 'jojo-s.jpg',
                'preface' => 'Véritable phénomène, les "Original Jojo\'s" se sont vendus à plus de 60 millions d\'unités! Disponible essentiellement en librairies et kiosques, ces petits monstres étaient vendus en sachets de 2, avec dans chaque sachet 2 stickers à coller dans un album. La pochette coûtait 5 Francs.',
                'video' => 'https://www.youtube.com/embed/VqWebjM1-TM',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Jump Jumper',
                'year' => '1988',
                'image' => 'jump-jumper.jpg',
                'preface' => 'Ballon gonflable entouré d\'un anneau repose pied. Ce jouet ressemblant à Saturne constitue un véritable outil d\'équilibre et d\'adresse tout en s\'amusant à sauter.',
                'video' => 'https://www.youtube.com/embed/b0qVgrGPN38',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Main Collante',
                'year' => '1980',
                'image' => 'main-collante.jpg',
                'preface' => 'Trophée de base à la fête forraine, on s\'amuse à la balancer et la voit s\'engluer contre les murs, les vitres, le visage de ses camarades... C\'est aussi un excellent attrape crasse !',
                'video' => 'https://www.youtube.com/embed/b6aOjXwuxso',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Les figurines Babies',
                'year' => '1990',
                'image' => 'les-babies.jpg',
                'preface' => 'Véritable phénomène, on pouvait les acheter à la boulangerie. En système de pochette surprise, allions nous avoir un original que personne n\'a dans la cour de récré? Sans doute une des plus grosses pressions de nos 7/8 ans.',
                'video' => 'https://www.youtube.com/embed/viO6HVEypa4',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Les Boglins',
                'year' => '1989',
                'image' => 'boglins-1.jpg',
                'preface' => 'Petit monstre en caoutchouc en adopté, vendu dans sa boite. Un peu notre gremlins à nous. Il est moche mais il sent bon. Et il sert de marionnette.',
                'video' => 'https://www.youtube.com/embed/Y8iJUR6vZs0',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Les Pogs',
                'year' => '1995',
                'image' => 'pog.jpg',
                'preface' => 'Petite rondelle en carton illustrée et à collectionner. Le jeu classique, à deux personnes, consiste à empiler au minimum un pog pour chaque joueur sur une pile unique, puis à lancer un kini ou dégommeur, une rondelle en plastique ou en métal aux mêmes dimensions que les pogs mais d\'épaisseur différente, sur la pile afin de la retourner. Celui qui parvient à retourner un pog le gagne.',
                'video' => 'https://www.youtube.com/embed/s1G-HfEmBwk',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Polly Pocket',
                'year' => '1989',
                'image' => 'polly-pocket.jpg',
                'preface' => 'Polly Pocket est une gamme de petites poupées en plastique et accessoires destinés aux jeunes enfants. Pocket signifie poche en anglais car les premiers modèles étaient contenus dans des boîtes, assez petites pour être glissées dans une poche, et servant à la fois de décors et de rangement pour les figurines de 1,2 cm.',
                'video' => 'https://www.youtube.com/embed/t5U3FmX1emE',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Ressort Ondamania',
                'year' => '1993',
                'image' => 'ressort-ondamania.jpg',
                'preface' => 'Le jouet qui ne sert absolument à rien mais qu\'on à tous! On nous a trop bien vendu le fait de pouvoir lui faire dévaler les escaliers. Il nous le fallait absolument!',
                'video' => 'https://www.youtube.com/embed/QNJYjtTblxo',
                'slug' => '',
                'category_item_id' => '2',
            ],
            [
                'name' => 'Tamagotchi',
                'year' => '1996',
                'image' => 'tamagotchi.jpg',
                'preface' => 'Le premier animal de compagnie virtuel. Et comme on savait s\'amuser dans les années 90, il fallait bien s\'en occuper sous peine de le voir mourir!',
                'video' => 'https://www.youtube.com/embed/1zptPfIcs0Q',
                'slug' => '',
                'category_item_id' => '2',
            ],




        ];
        
        $itemCategoryList = ['Bonbon', 'Objet', 'Jouet'];

        foreach($itemCategoryList as $itemCategoryName) {
            $itemCategory = new ItemCategory();
        
            $itemCategory->setName($itemCategoryName);

            $manager->persist($itemCategory);

            // we push the category
            $itemCategories[] = $itemCategory;
        
         }


            foreach ($itemData as $data) {
                $item = new Item();

                $item->setName($data['name']);
                $item->setYear($data['year']);
                $item->setImage($data['image']);
                $item->setPreface($data['preface']);
                $item->setVideo($data['video']);
                $item->setItemCategories($itemCategories[$data['category_item_id']]);
            
                $manager->persist($item);
            }

            $manager->flush($item);
        }
    }

