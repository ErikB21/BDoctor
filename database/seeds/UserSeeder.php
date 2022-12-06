<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'Girolamo',
                'surname' => 'De Prisco',
                'slug' =>  'girolamo-deprisco', 
                'email' =>  'girolamodeprisco@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'via Veneto, 3',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '32499975312',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Sandra',
                'surname' => 'Iannone',
                'slug' =>  'sandra-iannone',
                'email' => 'sandraiannone@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'via Roma, 1',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3332499973',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Marilena',
                'surname' => 'Fiorentini',
                'slug' =>  'marlinea-fiorentini',
                'email' => 'marilenafiorentini@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'piazza Delle Erbe, 25',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '32499975343',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'slug' =>  'mario-rossi',
                'email' => 'mariorossi@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'via Sicilia, 2',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '32499967312',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Federico',
                'surname' => 'Masotti',
                'slug' =>  'federico-masotti',
                'email' => 'federicomasotti@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'via Garibaldi, 5',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3456789001',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Gianluigi',
                'surname' => 'Gialli',
                'slug' =>  'gianluigi-gialli',
                'email' => 'gianluigigialli@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'piazza Verdi, 15',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3336789543',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Marco',
                'surname' => 'Verdi',
                'slug' =>  'marco-verdi',
                'email' => 'marcoverdi@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via Milano, 17',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3462525369',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Axel',
                'surname' => 'Fiorentini',
                'slug' =>  'axel-fiorentini',
                'email' => 'axelfiorentini@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via Chieri, 19',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3462675369',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Spada',
                'slug' =>  'giovanni-spada',
                'email' => 'giovannispada@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via Mancini, 159',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3462658969',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Gianfranco',
                'surname' => 'Sassi',
                'slug' =>  'gianfranco-sassi',
                'email' => 'gianfrancosassi@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Viale Mameli, 29',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3462657486',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Maria',
                'surname' => 'Masala',
                'slug' =>  'gianfranco-masala',
                'email' => 'gianfrancomasala@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Viale Umberto, 133',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3462657253',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Mariangela',
                'surname' => 'Campani',
                'slug' =>  'mariangela-campani',
                'email' => 'mariangelacampani@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via Flexbox, 36',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3532677253',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Gianni',
                'surname' => 'Pincopallo',
                'slug' =>  'gianni-pincopallo',
                'email' => 'giannipincopallo@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via XX Settembre, 12',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3532676123',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Matteo',
                'surname' => 'Canali',
                'slug' =>  'matteo-canali',
                'email' => 'matteocanali@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via Luca Pacioli, 88',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3531596123',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Enrico',
                'surname' => 'Colombo',
                'slug' =>  'enrico-colombo',
                'email' => 'enricocolombo@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via Fratelli Rosselli, 117',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3531578852',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Antonio',
                'surname' => 'Fontana',
                'slug' =>  'antonio-fontana',
                'email' => 'antoniofontana@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via del Lavoro, 75',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3125678852',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Marta',
                'surname' => 'Barbieri',
                'slug' =>  'marta-barbieri',
                'email' => 'martabarbieri@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via Leonardo da Vinci, 324',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3121218852',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Camilla',
                'surname' => 'Amato',
                'slug' =>  'camilla-amato',
                'email' => 'camillaamato@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via Silvio Pellico, 24',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3175218852',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Martina',
                'surname' => 'Serra',
                'slug' =>  'martina-serra',
                'email' => 'martinaserra@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via S. Costanzo, 158',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3175218852',
                'services' => 'Visita Specialistica'
            ],
            [
                'name' => 'Alessio',
                'surname' => 'Gentile',
                'slug' =>  'alessio-gentile',
                'email' => 'alessiogentile@gmail.com',
                'password'  => Hash::make('testtest'),
                'address' => 'Via S. Cristoforo, 45',
                'cv' => '',
                'profile_pic' => '',
                'phone' => '3172579652',
                'services' => 'Visita Specialistica'
            ],

            
        ];
            foreach ($users as $user) {
                $newuser = new User();
                $newuser->name = $user['name'];
                $newuser->surname = $user['surname'];
                $newuser->email = $user['email'];
                $newuser->slug = Str::slug($user['slug']);
                $newuser->password = $user['password'];
                $newuser->address = $user['address'];
                $newuser->cv = $user['cv'];
                $newuser->profile_pic = $user['profile_pic'];
                $newuser->phone = $user['phone'];
                $newuser->services = $user['services'];   
                $newuser->save();    
            }
    }
}
