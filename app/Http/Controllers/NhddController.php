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
            $nhdd->public_access= $record['public_access'];
            $nhdd->created_at = $record['created_at'];
            $nhdd->updated_at = $record['updated_at'];
            $nhdd->created_by_id =$record['created_by_id'];
            $nhdd->updated_by_id =$record['updated_by_id'];
            $nhdd->is_active = $record['is_active'];
            $nhdd->extras = $record['extras'];
            $nhdd->uri = $record['uri'];
            $nhdd->version = $record['version'];
            $nhdd->released = $record['released'];
            $nhdd->retired = $record['retired'];
            $nhdd->is_latest_version = $record['is_latest_version'];
            $nhdd->name = $record['name'];
            $nhdd ->full_name = $record['full_name'];
            $nhdd->default_locale = $record['default_locale'];
            $nhdd ->supported_locales = $record['supported_locales'];
            $nhdd ->website = $nhdd['website'];
            $nhdd->description = $nhdd['description'];
            $nhdd->external_id = $nhdd['external_id'];
            $nhdd ->concept_class = $nhdd['concept_class'];
            $nhdd ->datatype = $nhdd['datatype'];
            $nhdd ->comment = $nhdd['comment'];
            $nhdd ->parent_id = $nhdd['parent_id'];
            $nhdd ->versioned_object_id = $nhdd['versioned_object_id'];
            $nhdd ->mnemonic = $nhdd['mnemonic'];
            $nhdd ->counted = $nhdd['counted'];
            $nhdd ->index = $nhdd['index'];
            $nhdd -> save();
        }
    }
}
