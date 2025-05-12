<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chapters')->insert([
            [
                'id' => 1,
                'title' => 'Dernier Appel',
                'description' => "Tu es Alex Mercer, inspecteur à la brigade criminelle. Il est tard, tu termines un rapport lorsque ton téléphone fixe sonne. Une voix mécanique chuchote : 'Si tu veux sauver une vie, tu as jusqu'à l'aube. Première pièce à l'Hôtel Astoria.' Puis le silence. Aucune trace de l'appel sur ton écran.",
            ],
            [
                'id' => 2,
                'title' => "L'Hôtel Astoria",
                'description' => "Tu arrives à l'hôtel. Le hall est désert, hormis le réceptionniste, nerveux, qui t'observe. Sur le comptoir, un vieux carnet de réservation est ouvert à une page. En observant autour de toi, tu repères un ascenseur bloqué au 3e étage.",
            ],
            [
                'id' => 3,
                'title' => 'Recherche d’appel',
                'description' => "Tu tentes de tracer l'appel depuis ton bureau. Tu localises un relais téléphonique proche de l'Hôtel Astoria, mais l'appel semble masqué.",
            ],
            [
                'id' => 4,
                'title' => 'Appel au supérieur',
                'description' => "Tu appelles ton supérieur pour signaler l'appel anonyme. Il minimise la situation et refuse d'envoyer des renforts. Tu es seul.",
            ],
            [
                'id' => 5,
                'title' => 'Interrogatoire du réceptionniste',
                'description' => "Le réceptionniste est nerveux. Selon ton approche, il t'avoue qu'une fille en pleurs est montée au 3e étage il y a moins d'une heure.",
            ],
            [
                'id' => 6,
                'title' => 'Escalier vers l’inconnu',
                'description' => "Tu choisis de prendre les escaliers plutôt que l'ascenseur. Tu entends un bruit suspect au 2e étage.",
            ],
            [
                'id' => 7,
                'title' => 'Demander des renforts',
                'description' => "Tu demandes du renfort, mais sans preuve solide, personne ne vient. Tu dois agir seul.",
            ],
            [
                'id' => 8,
                'title' => 'Insistance fatale',
                'description' => "Ton insistance excessive agace ton supérieur. Tu es suspendu, perdant tout accès à l'enquête. La victime est abandonnée.",
            ],
            [
                'id' => 9,
                'title' => 'Découverte au 3e étage',
                'description' => "Tu arrives au 3e étage. Une chambre est ouverte : la 306. À l'intérieur, des signes de lutte et un message : 'Trouvez M avant minuit.'",
            ],
            [
                'id' => 10,
                'title' => 'Fouille du comptoir',
                'description' => "Derrière le comptoir, tu trouves une clé électronique pour la chambre 312 et un téléphone encore chaud.",
            ],
            [
                'id' => 11,
                'title' => 'Enquête au 3e étage',
                'description' => "Arrivé au 3e étage par les escaliers, tu retrouves la chambre 306 ouverte, traces de lutte à l'intérieur.",
            ],
            [
                'id' => 12,
                'title' => 'Incident au 2e étage',
                'description' => "Un inconnu masqué t'agresse violemment au 2e étage. Tu dois fuir ou riposter.",
            ],
            [
                'id' => 13,
                'title' => 'Préparation légère',
                'description' => "Avant de partir, tu prends un gilet pare-balles et une lampe torche. Cela pourrait te sauver.",
            ],
            [
                'id' => 14,
                'title' => 'Fouille minutieuse de la chambre 306',
                'description' => "Sous le lit, tu découvres un téléphone jetable. Le journal d’appels révèle un numéro partiellement effacé lié à 'M'.",
            ],
            [
                'id' => 15,
                'title' => 'Exploration des autres chambres',
                'description' => "Dans une autre chambre, tu trouves du sang, une chaussure de femme et un message : 'Ne fais pas confiance à D.E.'",
            ],
            [
                'id' => 16,
                'title' => 'Chambre 312',
                'description' => "Avec la clé, tu entres dans la chambre 312. Un ordinateur diffuse une vidéo d'une femme attachée. L'affaire est toujours en cours.",
            ],
            [
                'id' => 17,
                'title' => 'Fuite réussie',
                'description' => "Tu parviens à fuir ton agresseur et rejoins le 3e étage pour reprendre l’enquête.",
            ],
            [
                'id' => 18,
                'title' => 'Appel risqué',
                'description' => "Tu appelles le numéro trouvé. Une voix rauque te menace, et une silhouette apparaît derrière toi.",
            ],
            [
                'id' => 19,
                'title' => 'Chambres voisines',
                'description' => "Dans une chambre voisine, tu trouves un badge au nom de 'Mike W.', un faux employé.",
            ],
            [
                'id' => 20,
                'title' => 'Confrontation avec le réceptionniste',
                'description' => "Tu confrontes le réceptionniste sur D.E. Il avoue que D.E. avait des 'amis' suspects.",
            ],
            [
                'id' => 21,
                'title' => 'Piste de D.E.',
                'description' => "En cherchant D.E., tu trouves une chambre suspecte avec un bruit venant de l’intérieur.",
            ],
            [
                'id' => 22,
                'title' => 'Chasse à l\'homme',
                'description' => "En poursuivant une silhouette, tu entends une porte claquer au 5e étage.",
            ],
            [
                'id' => 23,
                'title' => 'Appel de renforts',
                'description' => "Tu appelles des renforts, mais ils arriveront tard. Tu dois agir seul pour l’instant.",
            ],
            [
                'id' => 24,
                'title' => 'Survie de justesse',
                'description' => "Grâce à ton gilet, tu survis à l’attaque d’un complice. Sur lui, une carte au nom 'Mike W.'.",
            ],
            [
                'id' => 25,
                'title' => 'Réinterroger le réceptionniste',
                'description' => "Sous pression, le réceptionniste avoue avoir embauché récemment un 'Mike W.' sans documents officiels.",
            ],
            [
                'id' => 26,
                'title' => 'À la recherche de Mike W.',
                'description' => "Tu trouves une planque secrète au sous-sol avec des plans d'évasion et des photos de cibles.",
            ],
            [
                'id' => 27,
                'title' => 'Liste des clients',
                'description' => "Une analyse de la liste des clients montre plusieurs fausses identités commençant par 'M'.",
            ],
            [
                'id' => 28,
                'title' => 'Surveillance discrète',
                'description' => "En observant discrètement, tu vois un homme suspect descendre par l'escalier de service.",
            ],
            [
                'id' => 29,
                'title' => 'Confrontation brutale',
                'description' => "Tu confrontes l'homme suspect. Il attaque. Si tu es préparé, tu peux riposter.",
            ],
            [
                'id' => 30,
                'title' => 'Espionnage prudent',
                'description' => "Tu suis discrètement l'homme. Il dépose un téléphone contenant un message inquiétant te visant.",
            ],
            [
                'id' => 31,
                'title' => '5e étage – Poursuite finale',
                'description' => "Tu poursuis une silhouette dans les couloirs sombres du 5e étage.",
            ],
            [
                'id' => 32,
                'title' => 'Piéger les escaliers',
                'description' => "Tu bloques les escaliers pour forcer ton adversaire à se montrer.",
            ],
            [
                'id' => 33,
                'title' => 'Attente tendue',
                'description' => "En attendant discrètement, tu vois un homme tenter de fuir précipitamment.",
            ],
            [
                'id' => 34,
                'title' => 'Enquête active',
                'description' => "Tu poursuis ton enquête en découvrant des traces de lutte dans un placard.",
            ],
            [
                'id' => 35,
                'title' => 'Capture ou Erreur fatale',
                'description' => "Tu intercepte un complice mais comprends que le vrai coupable est soit ton supérieur soit le réceptionniste.",
            ],
            [
                'id' => 36,
                'title' => 'Épilogue – Le dernier choix',
                'description' => "Ta dernière décision déterminera l'issue de l'enquête : sauver la victime ou échouer.",
            ],
        ]);
    }
}
