<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->id();
            $table->string("type_id");
            $table->string("sku");
            $table->string("opera_sku")->nullable();
            $table->string("old_sku")->nullable();
            $table->integer("override_opera");
            $table->string("name");
            $table->string("inlet", 30);
            $table->string("outlet", 30);
            $table->string("hose_type")->nullable();
            $table->string("angle_in_deg")->nullable();
            $table->string("max_lpm", 30)->nullable();
            $table->string("voltage")->nullable();
            $table->string("material", 30)->nullable();
            $table->string("bar", 30)->nullable();
            $table->string("o-ring_thickness")->nullable();
            $table->string("diameter", 50)->nullable();
            $table->string("colour", 30)->nullable();
            $table->string("rpm", 30)->nullable();
            $table->integer("status")->nullable();
            $table->string("url_key")->nullable();
            $table->integer("visibility")->nullable();
            $table->string("clearance", 30)->nullable();
            $table->string("max_temperature", 30)->nullable();
            $table->text("description")->nullable();
            $table->text("short_description")->nullable();
            $table->text("tech_spec_1")->nullable();
            $table->text("tech_spec_2")->nullable();
            $table->text("tech_spec_3")->nullable();
            $table->text("product_videos")->nullable();
            $table->string("nozzle_value")->nullable();
            $table->string("nozzle_size")->nullable();
            $table->string("foam_value")->nullable();
            $table->string("is_featured", 10)->nullable();
            $table->string("featured_position")->nullable();
            $table->string("hose_clamp_size")->nullable();
            $table->string("orifice_size")->nullable();
            $table->string("shoe_size")->nullable();
            $table->string("thread")->nullable();
            $table->string("size_and_angle")->nullable();
            $table->string("inlet_outlet")->nullable();
            $table->string("clothing_size")->nullable();
            $table->string("wheel_style")->nullable();
            $table->string("flow_and_pressure")->nullable();
            $table->string("country_of_manufacture")->nullable();
            $table->string("select_nozzle_size", 30)->nullable();
            $table->string("dn_internal_diameter", 30)->nullable();
            $table->string("currency")->nullable();
            $table->string("pack_size")->nullable();
            $table->string("easyturn")->nullable();
            $table->boolean("priority")->nullable();
            $table->string("manufacturer_number_1", 30)->nullable();
            $table->string("manufacturer_number_2", 30)->nullable();
            $table->string("manufacturer_number_3", 30)->nullable();
            $table->string("manufacturer_number_4", 30)->nullable();
            $table->string("manufacturer_number_5", 30)->nullable();
            $table->string("manufacturer_number_6", 30)->nullable();
            $table->string("manufacturer_number_7", 30)->nullable();
            $table->string("manufacturer_number_8", 30)->nullable();
            $table->string("manufacturer_number_9", 30)->nullable();
            $table->string("manufacturer_number_10", 30)->nullable();
            $table->string("hose_application")->nullable();
            $table->string("hose_inlet", 30)->nullable();
            $table->string("hose_outlet", 30)->nullable();
            $table->string("hose_length", 30)->nullable();
            $table->string("hose_colour", 30)->nullable();
            $table->string("price")->nullable();
            $table->string("special_price")->nullable();
            $table->boolean("poa")->nullable();
            $table->string("poa_price", 30)->nullable();
            $table->string("msrp")->nullable();
            $table->string("meta_title")->nullable();
            $table->text("meta_keywords")->nullable();
            $table->text("meta_description")->nullable();
            $table->string("pdf_title_1")->nullable();
            $table->string("pdf_title_2")->nullable();
            $table->string("pdf_title_3")->nullable();
            $table->string("pdf_title_4")->nullable();
            $table->string("bullet_point_1")->nullable();
            $table->string("bullet_point_2")->nullable();
            $table->string("bullet_point_3")->nullable();
            $table->string("bullet_point_4")->nullable();
            $table->string("maintenance_videos")->nullable();
            $table->string("maintenance_video_title_1")->nullable();
            $table->string("maintenance_video_url_1")->nullable();
            $table->string("maintenance_video_title_2")->nullable();
            $table->string("maintenance_video_url_2")->nullable();
            $table->string("maintenance_video_url_3")->nullable();
            $table->string("maintenance_video_title_3")->nullable();
            $table->string("maintenance_video_title_4")->nullable();
            $table->string("maintenance_video_url_4")->nullable();
            $table->boolean("stock_status")->nullable();
            $table->string("related_products")->nullable();
            $table->string("configurable_product_parent_id", 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
