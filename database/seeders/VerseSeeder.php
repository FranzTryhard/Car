<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Verse;

class VerseSeeder extends Seeder
{
    public function run(): void
    {
        Verse::create([
            'reference' => 'Proverbs 3:5-6',
            'text' => 'Trust in the Lord with all your heart and lean not on your own understanding; in all your ways submit to him, and he will make your paths straight.'
        ]);

        Verse::create([
            'reference' => 'Isaiah 40:31',
            'text' => 'But those who hope in the Lord will renew their strength. They will soar on wings like eagles; they will run and not grow weary, they will walk and not be faint.'
        ]);

        Verse::create([
            'reference' => 'Romans 8:28',
            'text' => 'And we know that in all things God works for the good of those who love him, who have been called according to his purpose.'
        ]);

        Verse::create([
            'reference' => 'Matthew 11:28',
            'text' => 'Come to me, all you who are weary and burdened, and I will give you rest.'
        ]);

        Verse::create([
            'reference' => 'Joshua 1:9',
            'text' => 'Be strong and courageous. Do not be afraid; do not be discouraged, for the Lord your God will be with you wherever you go.'
        ]);
    }
}
