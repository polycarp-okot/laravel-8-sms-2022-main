<?php 

namespace App\sms\Services\Levels;


class levelServices{

    //get levelData function
public function getLevelData(){


}

//store level data using function below
public function storeLevelData($levelModel, $request){

    return $levelModel::updateOrCreate(['id' =>$request->edit_id],
    [
        'name'=>$request->level_name,
        'status'=>$request->level_status,
        'description'=>$request->description
    ]);
    

}

//delete level data using function below
public function deleteLevelData($levelModel){

    return $levelModel::delete();
    

}


}