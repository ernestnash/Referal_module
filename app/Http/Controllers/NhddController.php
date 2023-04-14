<?php

namespace App\Http\Controllers;

use App\Models\Nhdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NhddController extends Controller
{
    public function savenhdd() {
        $records = Storage::json('/public/nhdd.json');

        foreach($records as $record) {
            $nhdd = new Nhdd;
            $nhdd->id=$record['id'];
                    $nhdd ->public_access= $record['public_access'];
                    $nhdd->created_at = $record['created_at'];
                    $nhdd ->updated_at = $record['updated_at'];
                    $nhdd->created_by_id =$record['created_by_id'];
                    'updated_by_id' -> $record['updated_by_id'],
                    'is_active' -> $record['is_active'],
                    'extras' -> $record['extras'],
                    'uri' -> $record['uri'],
                    'version' -> $record['version'],
                    'released' -> $record['released'],
                    'retired' -> $record['retired'],
                    'is_latest_version' -> $record['is_latest_version'],
                    'name' -> $record['name'],
                    'full_name' -> $record['full_name'],
                    'default_locale' -> $record['default_locale'],
                    'supported_locales' => $nhdd['supported_locales'],
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
                    'index' => $nhdd['index'];
        }
    }
}
