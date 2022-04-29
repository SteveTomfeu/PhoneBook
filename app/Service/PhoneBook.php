<?php

namespace App\Service;

use Illuminate\Support\Str;

class PhoneBook
{
    public static function searchByName(string $name):array
    {
        return self::searchBy('name', $name);
    }

    public static function searchByCity(string $city):array
    {
        return self::searchBy('city', $city);
    }

    public static function searchByEmail(string $email):array
    {
        return self::searchBy('email', $email);;
    }

    public static function searchBy(string $key, string $value):array
    {
        return collect(self::contacts())->filter(fn ($contact) 
            =>Str::contains(strtolower($contact[$key]), strtolower($value))
        )->all();
    }

    public static function contacts(): array
    {
        return [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '123456789',
                'city' => 'Quebec, CA',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'phone' => '987456123',
                'city' => 'Quebec, CA',
            ],
            [
                'name' => 'Alice Doe',
                'email' => 'alicedoe@example.com',
                'phone' => '123056789',
                'city' => 'France, FR',
            ],
            [
                'name' => 'Anne Doe',
                'email' => 'annedoe@example.com',
                'phone' => '123856789',
                'city' => 'Belgique, BG',
            ]
        ];
    }
}