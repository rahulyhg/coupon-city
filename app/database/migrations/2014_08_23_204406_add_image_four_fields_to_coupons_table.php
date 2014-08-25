<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class AddImageFourFieldsToCouponsTable extends Migration
    {

        /**
         * Make changes to the table.
         *
         * @return void
         */
        public function up()
        {
            Schema::table('coupons', function (Blueprint $table) {

                $table->string("image_four_file_name")->nullable();
                $table->integer("image_four_file_size")->nullable();
                $table->string("image_four_content_type")->nullable();
                $table->timestamp("image_four_updated_at")->nullable();

            });

        }

        /**
         * Revert the changes to the table.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('coupons', function (Blueprint $table) {

                $table->dropColumn("image_four_file_name");
                $table->dropColumn("image_four_file_size");
                $table->dropColumn("image_four_content_type");
                $table->dropColumn("image_four_updated_at");

            });
        }

    }