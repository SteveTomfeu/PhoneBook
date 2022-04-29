<?php

namespace App\Service;

use Illuminate\Support\Str;

class PhoneBook
{
    public static function searchByName(string $name):array
    {
        return collect(self::contacts())->filter(function ($contact) use ($name){
            return Str::contains(strtolower($contact['name']), strtolower($name));
        })->all();
    }

    public static function searchByCity(string $city):array
    {
        return collect(self::contacts())->filter(function ($contact) use ($city){
            return Str::contains(strtolower($contact['city']), strtolower($city));
        })->all();
    }

    public static function searchByEmail(string $email):array
    {
        return collect(self::contacts())->filter(function ($contact) use ($email){
            return Str::contains(strtolower($contact['email']), strtolower($email));
        })->all();
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