<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productmodels')->insert([
            [
             "Name"=>"Laser Printers",
             "Price"=>"8000",
             "Description"=>"Increases productivity, Higher paper capacity,High print speed",
             "Gallery"=>"https://www.binarytides.com/blog/wp-content/uploads/2018/07/hp-laserjet-p1108-laser-printer.jpg"
            ],
            [
             "Name"=>"Solid Ink Printers",
             "Price"=>"6000",
             "Description"=>" Environmentally-friendly,Compact design,Consumables require less storage",
             "Gallery"=>"https://www.hp.com/us-en/shop/app/assets/images/product/6GW99E%23BGJ/center_facing.png?_=1606216657536"
            ],
            [
             "Name"=>"LED Printers",
             "Price"=>"5000",
             "Description"=>"Reliable and efficient,Often include free warranty extensions",
             "Gallery"=>"https://5.imimg.com/data5/MA/EA/WQ/SELLER-78563426/hp-color-laser-printer-500x500.jpg"
            ],
            [
             "Name"=>"Business Inkjet Printers",
             "Price"=>"10000",
             "Description"=>"Capable of producing highly detailed and photo-realistic prints,Limited warm-up time required",
             "Gallery"=>"https://90a1c75758623581b3f8-5c119c3de181c9857fcb2784776b17ef.ssl.cf2.rackcdn.com//503481_725218_01_front_zoom.jpg"
            ],
            [
             "Name"=>"Home Office Printers Inkjet",
             "Price"=>"15000",
             "Description"=>"Capable of producing photo-realistic prints,Practically no warm-up time",
             "Gallery"=>"https://cdn.vox-cdn.com/thumbor/4Q36fqzKQ8Ea9nXOr4ikMql_wd4=/1400x788/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/6570459/DeskJet_3755_home_office.0.JPG"
            ],
            [
             "Name"=>"Multifunction",
             "Price"=>"25000",
             "Description"=>"More compact than buying multiple devices,Perform numerous tasks simultaneously",
             "Gallery"=>"https://i.pcmag.com/imagery/roundups/001YRPs5HePYqsgyn8QFbK1-11..1602293235.jpg"
            ],
            [
             "Name"=>"3D Printers",
             "Price"=>"12000",
             "Description"=>"3D prints,Limitless possibilities,Capacity for full customisation",
             "Gallery"=>"https://www8.hp.com/us/en/images/i/hotspot-fusion-bg_1146x663.jpg"
            ],
            [
             "Name"=>"Dot Matrix",
             "Price"=>"5500",
             "Description"=>"Able to perform in hot and dirty conditions,Low maintenance costs",
             "Gallery"=>"https://psi-matrix.eu/wordpress/wp-content/uploads/2017/01/PP405_002.png"
            ]
         ]);
    }
}
