<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'name' => 'Nur Rohman',
            'spesific_skill' => 'Web Developer',
            'birth_date' => '2003-06-04',
            'email' => 'rohmanuyeoke@gmail.com',
            'phone' => '6285713050749',
            'address' => 'Pesarean, Pagerbarang - Tegal',
            'facebook_url' => 'https://facebook.com/nurmangg',
            'instagram_url' => 'https://instagram.com/nurmangg',
            'twitter_url' => 'https://twitter.com/nurmangg',
            'linkedin_url' => 'https://linkedin.com/in/nurmangg',
            'github_url' => 'https://github.com/nurmangg',
            'youtube_url' => 'https://youtube.com/nurmangg',
            'profile_image' => 'FNVZaTz4HDjQHVAmSSi43qD9xWjlwK-metacHJvZmlsIDIucG5n-.png',
            'description' => 'I am a third-year student at Politeknik Harapan Bersama Tegal majoring in Informatics Engineering with experience as a Web Designer and projects on campus. I have a great interest in Website Development and Android. I am passionate about continuing to learn the latest technologies and applying them in innovative projects.

In my academic journey, I have been involved in various projects that strengthen my technical and problem-solving skills. I believe that hard work, dedication, and passion for learning are the keys to becoming a successful software developer. With this vision, I hope to contribute to the technology industry and create solutions that are beneficial to society.',
        ]);
    }
}
