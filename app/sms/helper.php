<?php

class Helper{
    public static function getStatus(){
        return [
            "" => 'select status',
            constStatus::Active => "Active",
            constStatus::InActive => "Inactive",

        ];
    }

    public static function getStatusClass($status){
        switch ($status) {
            case constStatus::InActive:
                return "badge badge-danger";
                break;

            case constStatus::Archive:
                return "badge badge-warning";
                break;

            default:
                return "badge badge-success";

                break;
        }
    }

    public static function getStatusValue($status){
        switch ($status) {
            case constStatus::InActive:
                return "InActive";
                break;

            case constStatus::Archive:
                return "Archived";
                break;

            default:
                return "Active";

                break;
        }
    }

    public static function getSelectedValue($key,$value){
        return $key == $value? 'selected': '';
    }
}

