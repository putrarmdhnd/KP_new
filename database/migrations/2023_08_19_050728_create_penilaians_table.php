<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_asesi');
            $table->string('nama_asesor');
            $table->string('tempat_ujian');
            $table->integer('111');
            $table->integer('112');
            $table->integer('113');
            $table->integer('121');
            $table->integer('122');
            $table->integer('123');
            $table->integer('124');
            $table->integer('211');
            $table->integer('212');
            $table->integer('221');
            $table->integer('222');
            $table->integer('311');
            $table->integer('312');
            $table->integer('313');
            $table->integer('314');
            $table->integer('321');
            $table->integer('322');
            $table->integer('323');
            $table->integer('324');
            $table->integer('325');
            $table->integer('331');
            $table->integer('332');
            $table->integer('411');
            $table->integer('412');
            $table->integer('413');
            $table->integer('421');
            $table->integer('422');
            $table->integer('423');
            $table->integer('424');
            $table->integer('425');
            $table->integer('431');
            $table->integer('432');
            $table->integer('433');
            $table->integer('434');
            $table->integer('511');
            $table->integer('512');
            $table->integer('513');
            $table->integer('521');
            $table->integer('522');
            $table->integer('523');
            $table->integer('531');
            $table->integer('532');
            $table->integer('611');
            $table->integer('612');
            $table->integer('613');
            $table->integer('621');
            $table->integer('622');
            $table->integer('623');
            $table->integer('631');
            $table->integer('632');
            $table->integer('711');
            $table->integer('712');
            $table->integer('721');
            $table->integer('722');
            $table->integer('723');
            $table->integer('724');
            $table->integer('725');
            $table->integer('726');
            $table->integer('727');
            $table->integer('811');
            $table->integer('812');
            $table->integer('821');
            $table->integer('822');
            $table->integer('823');
            $table->integer('831');
            $table->integer('832');
            $table->integer('911');
            $table->integer('912');
            $table->integer('921');
            $table->integer('922');
            $table->integer('931');
            $table->integer('932');
            $table->integer('933');
            $table->integer('934');
            $table->integer('1011');
            $table->integer('1012');
            $table->integer('1013');
            $table->integer('1021');
            $table->integer('1022');
            $table->integer('1023');
            $table->integer('1024');
            $table->integer('1031');
            $table->integer('1032');
            $table->integer('1033');
            $table->integer('1034');
            $table->integer('1041');
            $table->integer('1111');
            $table->integer('1112');
            $table->integer('1121');
            $table->integer('1122');
            $table->integer('1123');
            $table->integer('1124');
            $table->integer('1131');
            $table->integer('1132');
            $table->integer('1133');
            $table->integer('1141');
            $table->integer('1142');
            $table->integer('1211');
            $table->integer('1212');
            $table->integer('1213');
            $table->integer('1214');
            $table->integer('1215');
            $table->integer('1216');
            $table->integer('1217');
            $table->integer('1218');
            $table->integer('1221');
            $table->integer('1222');
            $table->integer('1223');
            $table->integer('1224');
            $table->integer('1225');
            $table->integer('1226');
            $table->integer('1227');
            $table->integer('1231');
            $table->integer('1232');
            $table->integer('1233');
            $table->integer('1234');
            $table->integer('1311');
            $table->integer('1312');
            $table->integer('1313');
            $table->integer('1321');
            $table->integer('1322');
            $table->integer('1331');
            $table->integer('1332');
            $table->integer('1341');
            $table->integer('1342');
            $table->integer('1343');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
