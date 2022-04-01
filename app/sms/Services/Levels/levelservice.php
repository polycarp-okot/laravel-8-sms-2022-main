<?php

namespace App\sms\Services\Levels;

use App\Models\Level;

class levelServices
{

    //get levelData function
    public function getLevelData()
    {
    }

    //store level data using function below
    public function storeLevelData($request)
    {

        return Level::updateOrCreate(
            ['id' => $request->edit_id],
            [
                'name' => $request->level_name,
                'status' => $request->level_status,
                'description' => $request->description
            ]
        );
    }

    //delete level data using function below
    public function deleteLevelData($levelModel)
    {

        return $levelModel->delete();
    }
}
