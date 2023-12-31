<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Suit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'is_admin' => 1,
            'name' => 'Muhammad Rizki',
            'email' => 'mhdky502@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'is_admin' => 0,
            'name' => 'Effenril Agung Marpaung',
            'email' => 'effenrilagung300@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'is_admin' => 0,
            'name' => 'Niki Pranata Febri Anandi',
            'email' => 'nikipranatafa@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'is_admin' => 0,
            'name' => 'Muhammad Ridwan',
            'email' => 'ridwan@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'is_admin' => 0,
            'name' => 'Surya Darma',
            'email' => 'suryadarma@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'is_admin' => 0,
            'name' => 'Andika Sahputra Golo',
            'email' => 'andikagulo@gmail.com',
            'password' => Hash::make('password')
        ]);

        Suit::create([
            'category_id' => 1,
            'color_id' => 1,
            'main_picture' => 'img/product-1.png',
            'picture_1' => 'img/detail-1.jfif',
            'picture_2' => 'img/detail-2.jfif',
            'picture_3' => 'img/detail-3.jfif',
            'name' => 'Black',
            'code' => Str::random(6),
            'size' => 'M',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 1,
            'color_id' => 2,
            'main_picture' => 'img/product-2.png',
            'picture_1' => 'img/detail-4.png',
            'picture_2' => 'img/detail-5.png',
            'picture_3' => 'img/detail-6.png',
            'picture_4' => 'img/detail-7.png',
            'name' => 'Taupe Gray',
            'code' => Str::random(6),
            'size' => 'XL',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 1,
            'color_id' => 3,
            'main_picture' => 'img/product-3.png',
            'picture_1' => 'img/detail-8.png',
            'picture_2' => 'img/detail-9.png',
            'picture_3' => 'img/detail-10.png',
            'picture_4' => 'img/detail-11.png',
            'name' => 'Slate Gray',
            'code' => Str::random(6),
            'size' => 'L',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 1,
            'color_id' => 4,
            'main_picture' => 'img/product-4.png',
            'name' => 'Olive Gray',
            'code' => Str::random(6),
            'size' => 'M',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 1,
            'color_id' => 5,
            'main_picture' => 'img/product-5.png',
            'picture_1' => 'img/detail-12.png',
            'picture_3' => 'img/detail-13.png',
            'picture_5' => 'img/detail-15.png',
            'name' => 'Dusty Rose',
            'code' => Str::random(6),
            'size' => 'L',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 1,
            'color_id' => 6,
            'main_picture' => 'img/product-6.png',
            'picture_1' => 'img/detail-16.png',
            'picture_2' => 'img/detail-17.png',
            'picture_3' => 'img/detail-18.png',
            'picture_4' => 'img/detail-19.png',
            'name' => 'Olive Brown',
            'code' => Str::random(6),
            'size' => 'L',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 2,
            'color_id' => 7,
            'main_picture' => 'img/product-7.png',
            'name' => 'Dusky Lavender',
            'code' => Str::random(6),
            'size' => 'S',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 2,
            'color_id' => 8,
            'main_picture' => 'img/product-8.png',
            'name' => 'Midnight Blue',
            'code' => Str::random(6),
            'size' => 'S',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 2,
            'color_id' => 9,
            'main_picture' => 'img/product-9.png',
            'name' => 'Cobalt Blue',
            'code' => Str::random(6),
            'size' => 'S',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 2,
            'color_id' => 10,
            'main_picture' => 'img/product-10.png',
            'name' => 'Dusty Brown',
            'code' => Str::random(6),
            'size' => 'S',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 2,
            'color_id' => 1,
            'main_picture' => 'img/product-11.png',
            'name' => 'Steel Blue',
            'code' => Str::random(6),
            'size' => 'S',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);

        Suit::create([
            'category_id' => 2,
            'color_id' => 2,
            'main_picture' => 'img/product-12.png',
            'name' => 'Burnt Orange',
            'code' => Str::random(6),
            'size' => 'S',
            'material' => 'Wool',
            'description' => '<p class="paragraf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">Lorem ipsum <strong>dolor</strong>, sit amet consectetur adipisicing elit. Quisquam rerum nobis quia dicta vero. Nemo optio iure <a href="#" class="link">Ini adalah link</a> consequuntur, ipsum dolor animi quam! Ducimus consectetur beatae reprehenderit cum porro aperiam labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
                        <p class="paragraf">
                            <ul class="list">
                                <li class="list-li">ke satu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus sed quibusdam atque libero enim vitae beatae explicabo ex nostrum. Maxime vero ea, aspernatur ipsum error possimus. Vel obcaecati et id!</li>
                                <li class="list-li">ke dua</li>
                            </ul>
                        </p>',
        ]);
    }
}
