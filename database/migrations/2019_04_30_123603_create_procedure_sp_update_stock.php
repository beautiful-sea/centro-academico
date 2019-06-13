<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureSpUpdateStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("

            CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_UpdateStock` (IN `id_prod` INT, IN `amount_bought` INT,IN `unitary_value` DECIMAL(9,2),IN `color_id` INT, IN `size_id` INT)  BEGIN
                declare counter int(11);
                declare new_amount int(11);

                SELECT count(*) into counter FROM stocks WHERE id_product = id_prod AND sizes_id = size_id AND colors_id = color_id;
             
                IF counter > 0 THEN
                    UPDATE stocks SET amount=amount + amount_bought, unitary_value= unitary_value,sizes_id = size_id,colors_id = color_id,updated_at=NOW()
                    WHERE id_product = id_prod AND sizes_id = size_id AND colors_id = color_id;
                ELSE
                    INSERT INTO stocks (id_product, amount, unitary_value,sizes_id,colors_id,created_at,updated_at) values (id_prod, amount_bought, unitary_value,color_id,size_id,NOW(),NOW());
                END IF;

                SELECT amount into new_amount FROM stocks WHERE id_product = id_prod AND sizes_id = size_id AND  colors_id = color_id;
    
                IF new_amount <=0 THEN
                    DELETE FROM stocks WHERE id_product = id_prod AND sizes_id = size_id AND colors_id = color_id;
                END IF;
            END
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS SP_UpdateStock');
    }
}
