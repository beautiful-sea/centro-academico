<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggersStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE TRIGGER `TRG_InputProduct_AD` AFTER DELETE ON `input_products` FOR EACH ROW BEGIN
                  CALL SP_UpdateStock (old.id_product, old.amount * -1, old.unitary_value);
            END;
            CREATE TRIGGER `TRG_InputProduct_AI` AFTER INSERT ON `input_products` FOR EACH ROW BEGIN
                  CALL SP_UpdateStock (new.id_product, new.amount, new.unitary_value);
            END;
            CREATE TRIGGER `TRG_InputProduct_AU` AFTER UPDATE ON `input_products` FOR EACH ROW BEGIN
                  CALL SP_UpdateStock (new.id_product, old.amount - new.amount, new.unitary_value);
            END;

            CREATE TRIGGER `TRG_OutputProduct_AD` AFTER DELETE ON `output_products` FOR EACH ROW BEGIN
                  CALL SP_UpdateStock (old.id_product, old.amount, old.unitary_value);
            END;
            CREATE TRIGGER `TRG_OutputProduct_AU` AFTER UPDATE ON `output_products` FOR EACH ROW BEGIN
                  CALL SP_UpdateStock (new.id_product, old.amount - new.amount, new.unitary_value);
            END;
            CREATE TRIGGER `TRG_OutputProducts_AI` AFTER INSERT ON `output_products` FOR EACH ROW BEGIN
                  CALL SP_UpdateStock (new.id_product, new.amount * -1, new.unitary_value);
            END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
            DROP TRIGGER `TRG_OutputProducts_AI`;
            DROP TRIGGER `TRG_OutputProduct_AU`;
            DROP TRIGGER `TRG_OutputProduct_AD`;
            DROP TRIGGER `TRG_InputProduct_AU`;
            DROP TRIGGER `TRG_InputProduct_AI`;
            DROP TRIGGER `TRG_InputProduct_AD`;');
    }
}
