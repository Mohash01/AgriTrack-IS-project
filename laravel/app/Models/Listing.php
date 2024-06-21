<?php
     namespace App\Models;

     class Listing {
        public static function all(){
return [
    [
       'id' =>1,
       'title' => 'Listing One',
       'description' =>'Our web application centralizes digital record-keeping, providing real-time market insights and secure MPESA/bank payments. It automates administrative tasks, ensuring accurate reporting and enhanced operational efficiency. This solution improves data management, market access, and financial transparency for Kenvan dairy farmers.
   '
    ],
   
    [
       'id' =>2,
       'title' => 'Listing two',
       'description' =>'Our web application centralizes digital record-keeping, providing real-time market insights and secure MPESA/bank payments. It automates administrative tasks, ensuring accurate reporting and enhanced operational efficiency. This solution improves data management, market access, and financial transparency for Kenvan dairy farmers.
   '
    ]
    ];
        }
public static function find($id){

    $listings = self::all();

    foreach ($listings as $listing){
        if ($listing['id']==$id){
            return $listing;
        }
    }
}

     }
