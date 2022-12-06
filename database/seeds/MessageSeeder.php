<?php

use App\Message;
use App\User;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //     'Mi sono trovato veremente bene con questo dottore!',
        //     'Dottore qualificato, consigliato',
        //     'Bravissimo!',
        //     'Gentile e professionale',
        $messages = [
            [
                'name' => 'Mario',
                'surname' => 'Viola',
                'title' => 'Richiesta visita',
                'email' => 'marioviola@gmail.com',
                'message_text' =>  'Salve, posso prenotare una visita medica?',
                'user_id' => '1'
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Blu',
                'title' => 'Ricetta Medica',
                'email' => 'giovanniblu@gmail.com',
                'message_text' =>  'Salve, mi servirebbe una ricetta per una scatola di Tachipirina',
                'user_id' => '1'
            ],
            // ------------------------------------
            [
                'name' => 'Maria',
                'surname' => 'Rossellini',
                'title' => 'Richiesta visita specialistica',
                'email' => 'mariarossellini@gmail.com',
                'message_text' =>  'Buongiorno, ho molta tosse',
                'user_id' => '2'
            ],
            [
                'name' => 'Giovanna',
                'surname' => 'Velli',
                'title' => 'Ricetta Medica per Antibiotici',
                'email' => 'giovannavelli@gmail.com',
                'message_text' =>  'Salve, avrei bisogno di una somministrazione di antibiotici',
                'user_id' => '2'
            ],
            [
                'name' => 'Annamaria',
                'surname' => 'Merlini',
                'title' => 'Mio figlio ha la tosse',
                'email' => 'merlinianna@gmail.com',
                'message_text' =>  'Salve, posso prenotare una visita medica per mio figlio?',
                'user_id' => '3'
            ],
            [
                'name' => 'Franco',
                'surname' => 'Aranceti',
                'title' => 'Andrologia',
                'email' => 'francuccio@gmail.com',
                'message_text' =>  'Salve, ho bisogno di una visita per problemi genitali',
                'user_id' => '4'
            ],
            [
                'name' => 'Francesca',
                'surname' => 'Claritas',
                'title' => 'Richiesta prescrizione ',
                'email' => 'frafra@gmail.com',
                'message_text' =>  'Salve, avrei bisogno di farmi prescrivere degli psicofarmaci',
                'user_id' => '5'
            ],
            [
                'name' => 'Giulio',
                'surname' => 'Frangei',
                'title' => 'Problema alla spalla',
                'email' => 'giulione@gmail.com',
                'message_text' =>  'Salve, ho un problema alla spalla',
                'user_id' => '5'
            ],
            [
                'name' => 'Giordano',
                'surname' => 'Giordanelli',
                'title' => 'Richiesta visita',
                'email' => 'giordi@gmail.com',
                'message_text' =>  'Salve, posso prenotare una visita medica?',
                'user_id' => '6'
            ],
            [
                'name' => 'Andrea',
                'surname' => 'Martini',
                'title' => 'Visita specialistica',
                'email' => 'andre@gmail.com',
                'message_text' =>  'Buondi! Ho problemi al ginocchio. ',
                'user_id' => '6'
            ],
            [
                'name' => 'Martina',
                'surname' => 'Secca',
                'title' => 'Richiesta Psicofarmaci',
                'email' => 'martinasecca@gmail.com',
                'message_text' =>  'Salve, soffro di attacchi di panico',
                'user_id' => '6'
            ],
            [
                'name' => 'Claudia',
                'surname' => 'Biancucci',
                'title' => 'Aiuto!',
                'email' => 'Cla@gmail.com',
                'message_text' =>  'Salve, ho bisogno di aiuto!',
                'user_id' => '7'
            ],
            [
                'name' => 'Lisa',
                'surname' => 'Lodoni',
                'title' => 'Radiografia',
                'email' => 'lisalodoni@gmail.com',
                'message_text' =>  'Salve, ho un problema al bacino. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '7'
            ],
            [
                'name' => 'Alissa',
                'surname' => 'Loni',
                'title' => 'Radiografia',
                'email' => 'alissaloni@gmail.com',
                'message_text' =>  'Salve, ho un problema al bacino. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '8'
            ],
            [
                'name' => 'PierGiorgio',
                'surname' => 'Amato',
                'title' => 'Radiografia',
                'email' => 'pieramato@gmail.com',
                'message_text' =>  'Salve, ho un problema al bacino. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '8'
            ],
            [
                'name' => 'Filippo',
                'surname' => 'Tagoro',
                'title' => 'Radiografia',
                'email' => 'filippotag@gmail.com',
                'message_text' =>  'Salve, ho un problema al bacino. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '8'
            ],
            [
                'name' => 'Vito',
                'surname' => 'LoBianco',
                'title' => 'Medicina Sportiva',
                'email' => 'vitobianco@gmail.com',
                'message_text' =>  'Salve, dovrei fare una visita urgente per attività agonistiche.',
                'user_id' => '9'
            ],
            [
                'name' => 'Giorgio',
                'surname' => 'Tuninetti',
                'title' => 'Radiografia',
                'email' => 'giotuni@gmail.com',
                'message_text' =>  'Salve, ho un problema alla spalla. Mi fa molto male e vorrei fare una ecografia',
                'user_id' => '9'
            ],
            [
                'name' => 'Deborah',
                'surname' => 'Donato',
                'title' => 'Mammografia',
                'email' => 'deborahdonato@gmail.com',
                'message_text' =>  'Salve, ho dolore al seno. Mi fa molto male e vorrei fare una mammografia',
                'user_id' => '9'
            ],
            [
                'name' => 'Sonia',
                'surname' => 'Galita',
                'title' => 'Quando posso contattarla?',
                'email' => 'soniagalita@gmail.com',
                'message_text' =>  'Salve dottore, ho bisogno di contattarla. Mi può chiamare?',
                'user_id' => '9'
            ],
            [
                'name' => 'Oronzo',
                'surname' => 'Gonzo',
                'title' => 'E\' urgente!',
                'email' => 'oronzo@gmail.com',
                'message_text' =>  'Salve, mi contatti, è urgente!',
                'user_id' => '9'
            ],
            [
                'name' => 'Geraldo',
                'surname' => 'Tagiro',
                'title' => 'Radiografia',
                'email' => 'geraldo@gmail.com',
                'message_text' =>  'Salve, ho un problema al bacino. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '9'
            ],
            [
                'name' => 'Raimondo',
                'surname' => 'Fiorentini',
                'title' => 'Radiografia',
                'email' => 'raimondo@gmail.com',
                'message_text' =>  'Salve, ho un problema al piede sinistro. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '10'
            ],
            [
                'name' => 'Maya',
                'surname' => 'Lagena',
                'title' => 'Salve, sono una sua nuova paziente',
                'email' => 'maya@gmail.com',
                'message_text' =>  'Salve Dottore, sono Maya! Quando posso passare?',
                'user_id' => '10'
            ],
            [
                'name' => 'Luna',
                'surname' => 'Romano',
                'title' => 'Radiografia',
                'email' => 'luna@gmail.com',
                'message_text' =>  'Salve, ho un problema. Vorrei prenotare una visita.',
                'user_id' => '10'
            ],
            [
                'name' => 'Gioshua',
                'surname' => 'Baldi',
                'title' => 'Radiografia',
                'email' => 'baldig@gmail.com',
                'message_text' =>  'Salve dottore, mi fa male la pancia, cosa posso prendere?',
                'user_id' => '11'
            ],
            [
                'name' => 'Filippo',
                'surname' => 'Innocenti',
                'title' => 'Visita di routine',
                'email' => 'filippoinno@gmail.com',
                'message_text' =>  'Salve, vorrei fare una visita di routine.',
                'user_id' => '11'
            ],
            [
                'name' => 'Moira',
                'surname' => 'Pollino',
                'title' => 'Radiografia',
                'email' => 'moira@gmail.com',
                'message_text' =>  'Salve, ho un problema al bacino. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '13'
            ],
            [
                'name' => 'Michael',
                'surname' => 'Fagotto',
                'title' => 'Radiografia',
                'email' => 'mike@gmail.com',
                'message_text' =>  'Salve, come funziona il vostro servizio? E quali sono i vostri prezzi?',
                'user_id' => '14'
            ],
            [
                'name' => 'Daniele',
                'surname' => 'Greco',
                'title' => 'Visita specialistica',
                'email' => 'danigreco@gmail.com',
                'message_text' =>  'Salve, ho bisogno urgente di contattarla!',
                'user_id' => '14'
            ],
            [
                'name' => 'Erik',
                'surname' => 'Vezzuoli',
                'title' => 'Geriartria',
                'email' => 'erik@gmail.com',
                'message_text' =>  'Salve, ho un problema di cui vorrei parlarne a voce con lei!',
                'user_id' => '14'
            ],

            [
                'name' => 'Filippo',
                'surname' => 'Saltinbelli',
                'title' => 'Medicina Sportiva',
                'email' => 'filipposalt@gmail.com',
                'message_text' =>  'Salve, dovrei svolgere della palestra. Che fogli medici dovrò presentare?',
                'user_id' => '15'
            ],
            [
                'name' => 'Fiorenza',
                'surname' => 'Tagaro',
                'title' => 'Radiografia',
                'email' => 'fiorenza@gmail.com',
                'message_text' =>  'Salve, ho un problema al bacino. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '17'
            ],

            [
                'name' => 'Melissa',
                'surname' => 'Solo',
                'title' => 'Mammografia',
                'email' => 'filippotag@gmail.com',
                'message_text' =>  'Salve, ho un problema al seno. Mi fa molto male e vorrei fare una mammografia',
                'user_id' => '17'
            ],
            [
                'name' => 'Geppetto',
                'surname' => 'Galimberti',
                'title' => 'Radiografia',
                'email' => 'gg@gmail.com',
                'message_text' =>  'Salve, ho un problema al bacino. Mi fa molto male e vorrei fare una radiografia',
                'user_id' => '19'
            ],

            [
                'name' => 'Xena',
                'surname' => 'Taliti',
                'title' => 'Ecografia',
                'email' => 'xena@gmail.com',
                'message_text' =>  'Salve, penso di essere incinta. Vorrei fare un\' ecografia il prima possibile!',
                'user_id' => '19'
            ],
            [
                'name' => 'Maria',
                'surname' => 'Spiga',
                'title' => 'Visita di Routine',
                'email' => 'filippotag@gmail.com',
                'message_text' =>  'Salve, vorrei fare una visita di routine.',
                'user_id' => '20'
            ],

            [
                'name' => 'Cecilia',
                'surname' => 'Sassi',
                'title' => 'Controllo Ortopedico',
                'email' => 'cec.sassi@gmail.com',
                'message_text' =>  'Salve, vorrei fare un controllo ortopedico se è possibile, grazie',
                'user_id' => '20'
            ],
            [
                'name' => 'Marco',
                'surname' => 'Amato',
                'title' => 'Visita di controllo',
                'email' => 'marco.amato@gmail.com',
                'message_text' =>  'Salve, vorrei fare una visita di controllo, quando sarebbe disponibile?',
                'user_id' => '20'
            ],

            
        ];
        foreach ($messages as $message) {
            $newMessage = new Message();
            $newMessage->name = $message['name'];
            $newMessage->surname = $message['surname'];
            $newMessage->title = $message['title'];
            $newMessage->email = $message['email'];
            $newMessage->message_text = $message['message_text'];
            $newMessage->user_id = $message['user_id'];
            $newMessage->save();
            
        }
    }
}
