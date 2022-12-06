<?php

use App\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'review_text' =>  'Medico Pessimo',
                'vote' => '1',
                'user_id' => '1'
            ],
            [
                'name' => 'Marco',
                'surname' => 'Sanna',
                'review_text' =>  'Non mi sono trovato molto bene con questo medico',
                'vote' => '3',
                'user_id' => '1'
            ],
            [
                'name' => 'Andrea',
                'surname' => 'Rossettini',
                'review_text' =>  'Medico molto disponibile, consigliato!',
                'vote' => '4',
                'user_id' => '1'
            ],
            [
                'name' => 'Giacomo',
                'surname' => 'Carta',
                'review_text' =>  'Medico prepato, consigliato',
                'vote' => '5',
                'user_id' => '1'
            ],
            [
                'name' => 'Claudia',
                'surname' => 'Falchi',
                'review_text' =>  'Medico molto gentile, personale qualificato, molto consigliato|',
                'vote' => '5',
                'user_id' => '2'
            ],
            [
                'name' => 'Marta',
                'surname' => 'Rossi',
                'review_text' =>  'Medico pessimo, tempi di attesa lunghissimi!',
                'vote' => '2',
                'user_id' => '2'
            ],
            [
                'name' => 'Matteo',
                'surname' => 'Sanna',
                'review_text' =>  'Medico bravissimo, peccato per i lunghi tempi di attesa!',
                'vote' => '2',
                'user_id' => '2'
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Metri',
                'review_text' =>  'Medico super disponibile, consigliato!',
                'vote' => '5',
                'user_id' => '3'
            ],
            [
                'name' => 'Federica',
                'surname' => 'Pagnotta',
                'review_text' =>  'Sono stata a visita da quetso medico e mi sono trovata benissimo!',
                'vote' => '4',
                'user_id' => '3'
            ],
            [
                'name' => 'Gerolamo',
                'surname' => 'Milo',
                'review_text' =>  'Il miglior medico in tutta Milano',
                'vote' => '5',
                'user_id' => '7'
            ],
            [
                'name' => 'William',
                'surname' => 'Rossi',
                'review_text' =>  'Medico molto disponibile, consigliato!',
                'vote' => '5',
                'user_id' => '7'
            ],
            [
                'name' => 'Laura',
                'surname' => 'Destra',
                'review_text' =>  'Medico pessimo, tempi di attesa lunghissimi!',
                'vote' => '5',
                'user_id' => '7'
            ],
            // --------------------------------
            [
                'name' => 'Maria',
                'surname' => 'Robbiati',
                'review_text' =>  'Medico molto competente, personale molto gentile!',
                'vote' => '4',
                'user_id' => '5'
            ],
            [
                'name' => 'Luca',
                'surname' => 'Frasca',
                'review_text' =>  'Studio troppo affollato, troppa attesa.',
                'vote' => '3',
                'user_id' => '5'
            ],
            [
                'name' => 'Biagio',
                'surname' => 'Corsi',
                'review_text' =>  'Visita molto accurata, soddisfatto!',
                'vote' => '4',
                'user_id' => '4'
            ],
            [
                'name' => 'Maria',
                'surname' => 'Luchi',
                'review_text' =>  'Medico Pessimo',
                'vote' => '1',
                'user_id' => '5'
            ],
            [
                'name' => 'Teresa',
                'surname' => 'Paoletti',
                'review_text' =>  'Ottimo studio, medico disponibile!',
                'vote' => '4',
                'user_id' => '4'
            ],
            [
                'name' => 'Dario',
                'surname' => 'Ferrario',
                'review_text' =>  'Medico Pessimo, studio disordinato',
                'vote' => '2',
                'user_id' => '6'
            ],
            [
                'name' => 'Miriam',
                'surname' => 'Rossofuoco',
                'review_text' =>  'Medico Pessimo',
                'vote' => '1',
                'user_id' => '6'
            ],
            [
                'name' => 'Luca',
                'surname' => 'Vinci',
                'review_text' =>  'Ottima esperienza, consigliato!',
                'vote' => '4',
                'user_id' => '3'
            ],
            [
                'name' => 'Angelo',
                'surname' => 'Neri',
                'review_text' =>  'Medico frettoloso!',
                'vote' => '4',
                'user_id' => '8'
            ],
            // --------------------------------
            // --------------------------------
            [
                'name' => 'Angela',
                'surname' => 'Altero',
                'review_text' =>  'Studio molto organizzato!',
                'vote' => '4',
                'user_id' => '1'
            ],
            [
                'name' => 'Dario',
                'surname' => 'Nudi',
                'review_text' =>  'Medico fantastico, personale preparato!',
                'vote' => '4',
                'user_id' => '2'
            ],
            [
                'name' => 'Franca',
                'surname' => 'Ilari',
                'review_text' =>  'Medico frettoloso! Attesa infinita!',
                'vote' => '2',
                'user_id' => '3'
            ],
            [
                'name' => 'Anna',
                'surname' => 'Sincereri',
                'review_text' =>  'Medico molto consigliato!',
                'vote' => '4',
                'user_id' => '4'
            ],
            [
                'name' => 'Anna ',
                'surname' => 'Polini',
                'review_text' =>  'Studio disorganizzato! problemi per le prenotazioni!',
                'vote' => '1',
                'user_id' => '5'
            ],
            [
                'name' => 'Ugo',
                'surname' => 'Spancer',
                'review_text' =>  'Medico eccezionale!',
                'vote' => '5',
                'user_id' => '6'
            ],
            [
                'name' => 'Luca',
                'surname' => 'Brighi',
                'review_text' =>  'Personale molto preparato!',
                'vote' => '4',
                'user_id' => '7'
            ],
            [
                'name' => 'Angelino',
                'surname' => 'Aneruti',
                'review_text' =>  'Impossibile prenotare',
                'vote' => '1',
                'user_id' => '1'
            ],
            [
                'name' => 'Rocco',
                'surname' => 'Floridi',
                'review_text' =>  'Medico preparatissimo ed empatico!',
                'vote' => '5',
                'user_id' => '2'
            ],
            [
                'name' => 'Angela',
                'surname' => 'Pirri',
                'review_text' =>  'Medico frettoloso!',
                'vote' => '2',
                'user_id' => '3'
            ],
            [
                'name' => 'Marco',
                'surname' => 'Todoli',
                'review_text' =>  'Tutto perfetto!',
                'vote' => '5',
                'user_id' => '4'
            ],
            [
                'name' => 'Mirta',
                'surname' => 'Ghini',
                'review_text' =>  'Studio sporco, personale ok',
                'vote' => '3',
                'user_id' => '5'
            ],
            [
                'name' => 'Claudia',
                'surname' => 'Piovri',
                'review_text' =>  'Medico freddo e distante, andava di fretta!',
                'vote' => '1',
                'user_id' => '6'
            ],
            [
                'name' => 'Clara',
                'surname' => 'Nido',
                'review_text' =>  'Medico e personale super, comunicazioni e prenotazioni rapide e precise!',
                'vote' => '4',
                'user_id' => '7'
            ],
            [
                'name' => 'Paolo',
                'surname' => 'Nerini',
                'review_text' =>  'Medico Fantastico!',
                'vote' => '4',
                'user_id' => '9'
            ],
            [
                'name' => 'Teo',
                'surname' => 'Ulivieri',
                'review_text' =>  'Medico e personale super, comunicazioni e prenotazioni rapide e precise!',
                'vote' => '4',
                'user_id' => '10'
            ],
            [
                'name' => 'Angelo',
                'surname' => 'Peri',
                'review_text' =>  'Medico frettoloso! Studio caotico, attesa infinita,',
                'vote' => '1',
                'user_id' => '11'
            ],
            [
                'name' => 'Marta',
                'surname' => 'Silvi',
                'review_text' =>  'Medici cordiali e attenti a tutto!',
                'vote' => '4',
                'user_id' => '11'
            ],
            [
                'name' => 'Vito',
                'surname' => 'Tinti',
                'review_text' =>  'Studio sporco, personale ok',
                'vote' => '3',
                'user_id' => '13'
            ],
            [
                'name' => 'Angelina',
                'surname' => 'Neri',
                'review_text' =>  'Medico frettoloso!',
                'vote' => '3',
                'user_id' => '12'
            ],
            [
                'name' => 'Lorenzo',
                'surname' => 'Nuvola',
                'review_text' =>  'Il migliore di tutti!',
                'vote' => '5',
                'user_id' => '14'
            ],
            [
                'name' => 'Gino',
                'surname' => 'Mantovani',
                'review_text' =>  'Medico frettoloso!',
                'vote' => '3',
                'user_id' => '10'
            ],
            [
                'name' => 'Mario',
                'surname' => 'Rizzo',
                'review_text' =>  'Medico molto professionale, consigliato!',
                'vote' => '4',
                'user_id' => '20'
            ],
            [
                'name' => 'Angelo',
                'surname' => 'Lisi',
                'review_text' =>  'Medico puntuale e studio accogliente!',
                'vote' => '4',
                'user_id' => '17'
            ],
            [
                'name' => 'Davide',
                'surname' => 'Brusco',
                'review_text' =>  'studio vecchio e sporco!',
                'vote' => '1',
                'user_id' => '10'
            ],
            [
                'name' => 'Tito',
                'surname' => 'Bresadola',
                'review_text' =>  'Medico puntuale e studio accogliente!',
                'vote' => '4',
                'user_id' => '19'
            ],
            [
                'name' => 'Angelo',
                'surname' => 'Lisi',
                'review_text' =>  'Medico puntuale e studio molto organizzato',
                'vote' => '4',
                'user_id' => '11'
            ],
            [
                'name' => 'Claudio',
                'surname' => 'Loppa',
                'review_text' =>  'Medico consigliato, tutto perfetto!',
                'vote' => '5',
                'user_id' => '18'
            ],
            [
                'name' => 'Antonella',
                'surname' => 'Lusi',
                'review_text' =>  'personale eccezionale',
                'vote' => '4',
                'user_id' => '18'
            ],
            [
                'name' => 'Antonello',
                'surname' => 'Ludovici',
                'review_text' =>  'personale preparato',
                'vote' => '4',
                'user_id' => '8'
            ],
            [
                'name' => 'Aida',
                'surname' => 'Pioppi',
                'review_text' =>  'Studio nuovo, medico molto gentile e preparato',
                'vote' => '5',
                'user_id' => '15'
            ],
            [
                'name' => 'Asia',
                'surname' => 'Masi',
                'review_text' =>  'personale eccezionale',
                'vote' => '4',
                'user_id' => '19'
            ],
            [
                'name' => 'Stefano',
                'surname' => 'Landi',
                'review_text' =>  'esperienza da dimenticare',
                'vote' => '1',
                'user_id' => '16'
            ],
        ];

        foreach ($reviews as $review) {
            $newReview = new Review();
            $newReview->name = $review['name'];
            $newReview->surname = $review['surname'];
            $newReview->review_text = $review['review_text'];
            $newReview->vote = $review['vote'];
            $newReview->user_id = $review['user_id'];
            $newReview->save();
        }
    }
}
