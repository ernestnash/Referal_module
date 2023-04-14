<?php

namespace Database\Seeders;

use App\Models\Nhdd;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NhddTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/nhdd.json');
        $nhdds = json_decode($json, true);


            foreach($nhdds as $nhdd){
                Nhdd::query()->updateOrCreate([
                    'id' => $nhdd['id'],
                    'public_access' => $nhdd['public_access'],
                    'created_at' => $nhdd['created_at'],
                    'updated_at' => $nhdd['updated_at'],
                    'created_by_id' => $nhdd['created_by_id'],
                    'updated_by_id' => $nhdd['updated_by_id'],
                    'is_active' => $nhdd['is_active'],
                    'extras' => $nhdd['extras'],
                    'uri' => $nhdd['uri'],
                    'version' => $nhdd['version'],
                    'released' => $nhdd['released'],
                    'retired' => $nhdd['retired'],
                    'is_latest_version' => $nhdd['is_latest_version'],
                    'name' => $nhdd['name'],
                    'full_name' => $nhdd['full_name'],
                    'default_locale' => $nhdd['default_locale'],
                    'website' => $nhdd['website'],
                    'description' => $nhdd['description'],
                    'external_id' => $nhdd['external_id'],
                    'concept_class' => $nhdd['concept_class'],
                    'datatype' => $nhdd['datatype'],
                    'comment' => $nhdd['comment'],
                    'parent_id' => $nhdd['parent_id'],
                    'versioned_object_id' => $nhdd['versioned_object_id'],
                    'mnemonic' => $nhdd['mnemonic'],
                    'counted' => $nhdd['counted'],
                    'index' => $nhdd['index']
                ]);
            }


    }
}
