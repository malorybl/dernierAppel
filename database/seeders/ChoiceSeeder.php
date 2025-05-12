<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('choices')->insert([
            // Choix du Chapitre 1
            [
                'chapter_id' => 1,
                'content' => "Te rendre immédiatement à l'Hôtel Astoria",
                'next_chapter_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 1,
                'content' => "Tenter de retracer l'appel depuis ton bureau",
                'next_chapter_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 1,
                'content' => "Prévenir ton supérieur avant d'agir",
                'next_chapter_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 2
            [
                'chapter_id' => 2,
                'content' => "Parler au réceptionniste",
                'next_chapter_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 2,
                'content' => "Prendre l'ascenseur pour monter au 3e étage",
                'next_chapter_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 3
            [
                'chapter_id' => 3,
                'content' => "Te rendre à l’Hôtel Astoria",
                'next_chapter_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 3,
                'content' => "Tenter de prévenir des renforts",
                'next_chapter_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 4
            [
                'chapter_id' => 4,
                'content' => "Y aller seul malgré tout",
                'next_chapter_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 4,
                'content' => "Insister lourdement auprès du supérieur",
                'next_chapter_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 5
            [
                'chapter_id' => 5,
                'content' => "Monter rapidement au 3e étage",
                'next_chapter_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 5,
                'content' => "Fouiller derrière le comptoir",
                'next_chapter_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 6
            [
                'chapter_id' => 6,
                'content' => "Continuer jusqu’au 3e étage",
                'next_chapter_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 6,
                'content' => "Aller voir ce qui se passe au 2e étage",
                'next_chapter_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 7
            [
                'chapter_id' => 7,
                'content' => "Aller seul à l'Hôtel Astoria",
                'next_chapter_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 7,
                'content' => "Prendre du matériel de protection",
                'next_chapter_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 9
            [
                'chapter_id' => 9,
                'content' => "Fouiller entièrement la chambre 306",
                'next_chapter_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 9,
                'content' => "Chercher dans les autres chambres",
                'next_chapter_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 10
            [
                'chapter_id' => 10,
                'content' => "Monter à la chambre 312",
                'next_chapter_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 11
            [
                'chapter_id' => 11,
                'content' => "Fouiller entièrement la chambre 306",
                'next_chapter_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 11,
                'content' => "Chercher dans les autres chambres",
                'next_chapter_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 12
            [
                'chapter_id' => 12,
                'content' => "Tenter de fuir",
                'next_chapter_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 12,
                'content' => "Riposter",
                'next_chapter_id' => null, // Game Over si échec
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 14
            [
                'chapter_id' => 14,
                'content' => "Tenter d'appeler le numéro trouvé",
                'next_chapter_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 14,
                'content' => "Continuer à fouiller d'autres chambres",
                'next_chapter_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Choix du Chapitre 15
            [
                'chapter_id' => 15,
                'content' => "Confronter le réceptionniste à propos de D.E.",
                'next_chapter_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 15,
                'content' => "Chercher D.E. dans l'hôtel",
                'next_chapter_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        
                        
                        // Choix du Chapitre 16
                        [
                            'chapter_id' => 16,
                            'content' => "Chercher l'homme dans l'hôtel",
                            'next_chapter_id' => 22,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 16,
                            'content' => "Appeler des renforts immédiatement",
                            'next_chapter_id' => 23,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 17
                        [
                            'chapter_id' => 17,
                            'content' => "Fouiller la chambre 306",
                            'next_chapter_id' => 14,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 17,
                            'content' => "Explorer les autres chambres",
                            'next_chapter_id' => 15,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 18
                        [
                            'chapter_id' => 18,
                            'content' => "Si tu as pris le gilet, riposter",
                            'next_chapter_id' => 24,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 18,
                            'content' => "Sans protection, tu es tué",
                            'next_chapter_id' => null, // Game Over
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 19
                        [
                            'chapter_id' => 19,
                            'content' => "Interroger à nouveau le réceptionniste",
                            'next_chapter_id' => 25,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 19,
                            'content' => "Chercher la chambre de Mike W.",
                            'next_chapter_id' => 26,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 20
                        [
                            'chapter_id' => 20,
                            'content' => "Demander la liste complète des clients",
                            'next_chapter_id' => 27,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 20,
                            'content' => "Surveiller discrètement les mouvements",
                            'next_chapter_id' => 28,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 21
                        [
                            'chapter_id' => 21,
                            'content' => "Enfoncer la porte",
                            'next_chapter_id' => 29,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 21,
                            'content' => "Observer discrètement",
                            'next_chapter_id' => 30,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 22
                        [
                            'chapter_id' => 22,
                            'content' => "Monter au 5e étage",
                            'next_chapter_id' => 31,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 22,
                            'content' => "Piéger les escaliers",
                            'next_chapter_id' => 32,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 23
                        [
                            'chapter_id' => 23,
                            'content' => "Patienter discrètement",
                            'next_chapter_id' => 33,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 23,
                            'content' => "Continuer l’enquête seul",
                            'next_chapter_id' => 34,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 24
                        [
                            'chapter_id' => 24,
                            'content' => "Continuer à chercher M",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 24,
                            'content' => "Enfermer l'agresseur et attendre",
                            'next_chapter_id' => 36,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 25
                        [
                            'chapter_id' => 25,
                            'content' => "Forcer le réceptionniste à t’accompagner",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 25,
                            'content' => "Agir seul",
                            'next_chapter_id' => 36,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 26
                        [
                            'chapter_id' => 26,
                            'content' => "Tendre un piège à la sortie d'urgence",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 26,
                            'content' => "Attendre l’arrivée des renforts",
                            'next_chapter_id' => 36,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 27
                        [
                            'chapter_id' => 27,
                            'content' => "Piéger la chambre de M.D.",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 27,
                            'content' => "Attendre que M. revienne",
                            'next_chapter_id' => 36,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 28
                        [
                            'chapter_id' => 28,
                            'content' => "Suivre l'homme discrètement",
                            'next_chapter_id' => 29,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 28,
                            'content' => "L’intercepter immédiatement",
                            'next_chapter_id' => 30,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 29
                        [
                            'chapter_id' => 29,
                            'content' => "Tu t'es préparé, tu ripostes",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 29,
                            'content' => "Tu n'est pas préparé mais tu décide quand même de riposter",
                            'next_chapter_id' => null,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 30
                        [
                            'chapter_id' => 30,
                            'content' => "Analyser le téléphone",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 30,
                            'content' => "Tendre une embuscade",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 31
                        [
                            'chapter_id' => 31,
                            'content' => "Poursuivre immédiatement",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 31,
                            'content' => "Appeler du renfort discret",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 32
                        [
                            'chapter_id' => 32,
                            'content' => "Attendre",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 32,
                            'content' => "Monter confronter directement",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 33
                        [
                            'chapter_id' => 33,
                            'content' => "Intercepter",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 33,
                            'content' => "Suivre discrètement",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix du Chapitre 34
                        [
                            'chapter_id' => 34,
                            'content' => "Suivre les traces",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 34,
                            'content' => "Tendre une embuscade",
                            'next_chapter_id' => 35,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
            
                        // Choix final Chapitre 35
                        [
                            'chapter_id' => 35,
                            'content' => "Accuser ton supérieur",
                            'next_chapter_id' => NULL, 
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                        [
                            'chapter_id' => 35,
                            'content' => "Retourner confronter le réceptionniste",
                            'next_chapter_id' => 36, 
                            'created_at' => now(),
                            'updated_at' => now(),
                        ],
                    ]);
                }
            }
            


