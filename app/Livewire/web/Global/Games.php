<?php

namespace App\Livewire\Web\Global;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')] 
class Games extends Component
{
    public $users = [
        [
            'name' => 'John Doe',
            'age' => 25,
            'address' => 'New York, USA'
        ],
        [
            'name' => 'Jane Doe',
            'age' => 22,
            'address' => 'Paris, France'
        ],
        [
            'name' => 'Michael Doe',
            'age' => 30,
            'address' => 'London, UK'
        ],
        [
            'name' => 'Sara Doe',
            'age' => 28,
            'address' => 'Berlin, Germany'
        ],
        [
            'name' => 'David Doe',
            'age' => 35,
            'address' => 'Madrid, Spain'
        ],
        [
            'name' => 'Jennifer Doe',
            'age' => 40,
            'address' => 'Rome, Italy'
        ],
        [
            'name' => 'Chris Doe',
            'age' => 45,
            'address' => 'Tokyo, Japan'
        ],
        [
            'name' => 'Jessica Doe',
            'age' => 50,
            'address' => 'Beijing, China'
        ],
        [
            'name' => 'Daniel Doe',
            'age' => 55,
            'address' => 'Sydney, Australia'
        ],
        [
            'name' => 'Emily Doe',
            'age' => 60,
            'address' => 'Cape Town, South Africa'
        ],
        [
            'name' => 'Matthew Doe',
            'age' => 65,
            'address' => 'Rio de Janeiro, Brazil'
        ],
        [
            'name' => 'Laura Doe',
            'age' => 70,
            'address' => 'Moscow, Russia'
        ],
        [
            'name' => 'Kevin Doe',
            'age' => 75,
            'address' => 'New Delhi, India'
        ],
        [
            'name' => 'Hannah Doe',
            'age' => 80,
            'address' => 'Cairo, Egypt'
        ],
        [
            'name' => 'Andrew Doe',
            'age' => 85,
            'address' => 'Mexico City, Mexico'
        ],
        [
            'name' => 'Olivia Doe',
            'age' => 90,
            'address' => 'Buenos Aires, Argentina'
        ],
        [
            'name' => 'James Doe',
            'age' => 95,
            'address' => 'Lima, Peru'
        ],
        [
            'name' => 'Ava Doe',
            'age' => 100,
            'address' => 'Santiago, Chile'
        ],
        [
            'name' => 'William Doe',
            'age' => 105,
            'address' => 'Caracas, Venezuela'
        ],
        [
            'name' => 'Sophia Doe',
            'age' => 110,
            'address' => 'Bogota, Colombia'
        ],
        [
            'name' => 'Benjamin Doe',
            'age' => 115,
            'address' => 'Quito, Ecuador'
        ],
        [
            'name' => 'Mia Doe',
            'age' => 120,
            'address' => 'Montevideo, Uruguay'
        ],
        [
            'name' => 'Ethan Doe',
            'age' => 125,
            'address' => 'Asuncion, Paraguay'
        ],
        [
            'name' => 'Amelia Doe',
            'age' => 130,
            'address' => 'Sao Paulo, Brazil'
        ],
        [
            'name' => 'Alexander Doe',
            'age' => 135,
            'address' => 'Lisbon, Portugal'
        ],
        [
            'name' => 'Harper Doe',
            'age' => 140,
            'address' => 'Madrid, Spain'
        ]


    ];

    public function render()
    {
        return view('livewire.web.global.games');
    }
}
