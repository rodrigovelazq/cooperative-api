<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Members;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
             [
                 'order'=> 1,
                 'first_name'=> 'PÁNFILO',
                 'last_name'=> 'ALVAREZ',
                 'email'=> 'panfilo@email.com',
             ],
             [
                 'order'=> 2,
                 'first_name'=> 'ELENA BEATRIZ',
                 'last_name'=> 'DELGADO de ALVAREZ',
                 'email'=> 'elena@email.com',
             ],
             [
                 'order'=> 3,
                 'first_name'=> 'JULIO CESAR',
                 'last_name'=> 'ALVAREZ DELGADO',
                 'email'=> 'julio@gmail.com',
             ],
             [
                 'order'=> 4,
                 'first_name'=> 'MIRNA ELIZABETH',
                 'last_name'=> 'NÚÑEZ de ALVAREZ',
                 'email'=> 'mirnaelizabeth@gmail.com',
             ],
             [
                 'order'=> 5,
                 'first_name'=> 'JULIO CESAR',
                 'last_name'=> 'ALVAREZ NÚÑEZ',
                 'email'=> 'julio@gmail.com',
             ],
             [
                 'order'=> 6,
                 'first_name'=> 'CESAR ARTURO',
                 'last_name'=> 'ALVAREZ NÚÑEZ',
                 'email'=> 'cesar@gmail.com',
             ],
             [
                 'order'=> 7,
                 'first_name'=> 'JESSICA ELIZABETH',
                 'last_name'=> 'ALVAREZ NÚÑEZ',
                 'email'=> 'jessica@gmail.com',
             ],
             [
                 'order'=> 8,
                 'first_name'=> 'MIRNA ELIZABETH',
                 'last_name'=> 'ALVAREZ NÚÑEZ',
                 'email'=> 'mirna@gmail.com',
             ],
             [
                 'order'=> 9,
                 'first_name'=> 'MARISA NOEMI',
                 'last_name'=> 'SILVA ROLON',
                 'email'=> 'marisa@gmail.com',
             ],
             [
                 'order'=> 10,
                 'first_name'=> 'ARSENIO',
                 'last_name'=> 'VELÁZQUEZ RAMÍREZ',
                 'email'=> 'arsenio@gmail.com',
             ],
             [
                 'order'=> 11,
                 'first_name'=> 'GRACIELA I.',
                 'last_name'=> 'ALVAREZ de VELÁZQUEZ',
                 'email'=> 'graciela@gmail.com',
             ],
             [
                 'order'=> 12,
                 'first_name'=> 'GRACIELA BEATRIZ',
                 'last_name'=> 'VELÁZQUEZ ALVAREZ',
                 'email'=> 'cheltty@gmail.com',
             ],
             [
                 'order'=> 13,
                 'first_name'=> 'RODRIGO JUAN A.',
                 'last_name'=> 'VELÁZQUEZ ALVAREZ',
                 'email'=> 'rodrigo@gmail.com',
             ],
             [
                 'order'=> 14,
                 'first_name'=> 'MILENA MARÍA V.',
                 'last_name'=> 'VELÁZQUEZ ALVAREZ',
                 'email'=> 'milena@gmail.com',
             ],
             [
                 'order'=> 15,
                 'first_name'=> 'PÁNFILO EDGAR',
                 'last_name'=> 'ALVAREZ DELGADO',
                 'email'=> 'edgar@gmail.com',
             ],
             [
                 'order'=> 16,
                 'first_name'=> 'ALEJANDRA PATRICIA',
                 'last_name'=> 'ALVAREZ SERVIN',
                 'email'=> 'alejandra@gmail.com',
             ],
             [
                 'order'=> 17,
                 'first_name'=> 'ISABELINO',
                 'last_name'=> 'GODOY LEÓN',
                 'email'=> 'isabelino@gmail.com',
             ],
             [
                 'order'=> 18,
                 'first_name'=> 'MARÍA ELENA',
                 'last_name'=> 'ALVAREZ de GODOY',
                 'email'=> 'maria@gmail.com',
             ],
             [
                 'order'=> 19,
                 'first_name'=> 'ABEL ANDRÉS',
                 'last_name'=> 'GODOY ALVAREZ',
                 'email'=> 'abel@gmail.com',
             ],
             [
                 'order'=> 20,
                 'first_name'=> 'ELÍAS MOISÉS',
                 'last_name'=> 'GODOY ALVAREZ',
                 'email'=> 'elias@gmail.com',
             ],
             [
                 'order'=> 21,
                 'first_name'=> 'LUCIO GERMAN',
                 'last_name'=> 'ALVAREZ DELGADO',
                 'email'=> 'lucio@gmail.com',
             ],
             [
                 'order'=> 22,
                 'first_name'=> 'LIZ RAMONA',
                 'last_name'=> 'ALVAREZ de ALVAREZ',
                 'email'=> 'liz@gmail.com',
             ],
             [
                 'order'=> 23,
                 'first_name'=> 'KAETHE',
                 'last_name'=> 'HILDEGAR ARNOLD',
                 'email'=> 'kaethe@gmail.com',
             ],
             [
                 'order'=> 24,
                 'first_name'=> 'RODRIGO FABIAN',
                 'last_name'=> 'VERA CRISTALDO',
                 'email'=> 'rodrigovera@gmail.com',
             ],
             [
                 'order'=> 25,
                 'first_name'=> 'AGUSTIN RAMON',
                 'last_name'=> 'ALVAREZ DELGADO',
                 'email'=> 'agustin@gmail.com',
             ],
             [
                 'order'=> 26,
                 'first_name'=> 'VALERIA THAIS',
                 'last_name'=> 'ALVAREZ GODOY',
                 'email'=> 'valeria@gmail.com',
             ],
             [
                 'order'=> 27,
                 'first_name'=> 'FELIPE',
                 'last_name'=> 'ALVAREZ SILVA',
                 'email'=> 'felipe@gmail.com',
             ],
             [
                 'order'=> 28,
                 'first_name'=> 'JULIETA ELIZABETH',
                 'last_name'=> 'ALVAREZ VARGAS',
                 'email'=> 'julieta@gmail.com',
             ],
             [
                 'order'=> 29,
                 'first_name'=> 'INGRID V.',
                 'last_name'=> 'VALDOVINOS DELGADO',
                 'email'=> 'ingrid@gmail.com',
             ],
        ];
        foreach ($members as $member) {
            Members::create($member);
        }
    }
}
