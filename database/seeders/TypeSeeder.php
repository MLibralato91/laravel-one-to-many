<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config('types.types');
        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->image = $type['image'];
            $newType->description = $type['description'];
            $newType->save();
        }
    }
}
