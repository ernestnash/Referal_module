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
                    'public access' => $nhdd['public access'],
                    'created at' => $nhdd['created at'],
                    'updated at' => $nhdd['updated at'],
                    'created_by_id' => $nhdd['created_by_id'],
                    'updated_by_id' => $nhdd['updated_by_id'],
                    'is active' => $nhdd['is active'],
                    'extras' => $nhdd['extras'],
                    'uri' => $nhdd['uri'],
                    'version' => $nhdd['version'],
                    'released' => $nhdd['released'],
                    'retired' => $nhdd['retired'],
                    'is latest version' => $nhdd['is latest version'],
                    'custom validation schema' => $nhdd['custom validation schema'],
                    'parent_id' => $nhdd['parent_id'],
                    'map type' => $nhdd['map type'],
                    'sort weight' => $nhdd['sort weight'],
                    'external id' => $nhdd['external id'],
                    'comment' => $nhdd['comment'],
                    'versioned_object_id' => $nhdd['versioned_object_id'],
                    'mnemonic' => $nhdd['mnemonic'],
                    'from_concept_id' => $nhdd['from_concept_id'],
                    'to_concept_id' => $nhdd['to_concept_id'],
                    'to_source_id' => $nhdd['to_source_id'],
                    'from_source_id' => $nhdd['from_source_id'],
                    'from concept code' => $nhdd['from concept code'],
                    'from concept name' => $nhdd['from concept name'],
                    'from source url' => $nhdd['from source url'],
                    'from source version' => $nhdd['from source version'],
                    'to concept code' => $nhdd['to concept code'],
                    'to concept name' => $nhdd['to concept name'],
                    'to source url' => $nhdd['to source url'],
                    'to source version' => $nhdd['to source version'],
                    'counted' => $nhdd['counted'],
                    'index' => $nhdd['index']
                ]);
            }


    }
}
