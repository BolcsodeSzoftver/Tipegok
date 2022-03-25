<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAgazatiPotleksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agazati_potleks', function (Blueprint $table) {
            $table->id();
            $table->string('eletkor');
            $table->integer('A');
            $table->integer('B');
            $table->integer('C');
            $table->integer('D');
            $table->integer('E');
            $table->integer('F');
            $table->integer('G');
            $table->integer('H');
            $table->integer('I');
            $table->integer('J');
            $table->timestamps();
        });

        DB::table('agazati_potleks')->insert([
            ['eletkor' => "0-1 év között", 'A' => 15700, 'B' => 18654, 'C' => 18882, 'D'=> 18996, 'E' => 24514, 'F' => 63570, 'G' => 63570, 'H' => 73260, 'I' => 73260, 'J' => 73260],
            ['eletkor' => "1-2 év között", 'A' => 15700, 'B' => 18654, 'C' => 18882, 'D'=> 18996, 'E' => 24514, 'F' => 63570, 'G' => 63570, 'H' => 73260, 'I' => 73260, 'J' => 73260],
            ['eletkor' => "2-3 év között", 'A' => 15700, 'B' => 18654, 'C' => 18882, 'D'=> 18996, 'E' => 24514, 'F' => 63570, 'G' => 63570, 'H' => 73260, 'I' => 73260, 'J' => 73260],
            ['eletkor' => "3-4 év között", 'A' => 16156, 'B' => 19110, 'C' => 19338, 'D'=> 19452, 'E' => 24514, 'F' => 63570, 'G' => 63570, 'H' => 73260, 'I' => 73260, 'J' => 73260],
            ['eletkor' => "4-5 év között", 'A' => 16156, 'B' => 19110, 'C' => 19338, 'D'=> 19452, 'E' => 28083, 'F' => 72986, 'G' => 72986, 'H' => 90417, 'I' => 90417, 'J' => 90417],
            ['eletkor' => "5-6 év között", 'A' => 16156, 'B' => 19110, 'C' => 19338, 'D'=> 19452, 'E' => 28083, 'F' => 72986, 'G' => 72986, 'H' => 90417, 'I' => 90417, 'J' => 90417],
            ['eletkor' => "6-7 év között", 'A' => 16156, 'B' => 19566, 'C' => 19794, 'D'=> 19908, 'E' => 28083, 'F' => 72986, 'G' => 72986, 'H' => 90417, 'I' => 90417, 'J' => 90417],
            ['eletkor' => "7-8 év között", 'A' => 16156, 'B' => 19566, 'C' => 19794, 'D'=> 19908, 'E' => 28083, 'F' => 72986, 'G' => 72986, 'H' => 90417, 'I' => 90417, 'J' => 90417],
            ['eletkor' => "8-9 év között", 'A' => 16156, 'B' => 19566, 'C' => 19794, 'D'=> 22532, 'E' => 31652, 'F' => 80049, 'G' => 80049, 'H' => 100221, 'I' => 100221, 'J' => 100221],
            ['eletkor' => "9-10 év között",  'A' => 17068, 'B' => 20022, 'C' => 20250, 'D' => 22532, 'E' => 31652, 'F' => 80049, 'G' => 80049, 'H' => 100221, 'I' => 100221, 'J' => 100221],
            ['eletkor' => "10-11 év között", 'A' => 17068, 'B' => 20022, 'C' => 20250, 'D' => 22532, 'E' => 31652, 'F' => 80049, 'G' => 80049, 'H' => 100221, 'I' => 100221, 'J' => 100221],
            ['eletkor' => "11-12 év között", 'A' => 17068, 'B' => 20022, 'C' => 20250, 'D' => 22532, 'E' => 31652, 'F' => 80049, 'G' => 80049, 'H' => 100221, 'I' => 100221, 'J' => 100221],
            ['eletkor' => "12-13 év között", 'A' => 17524, 'B' => 20478, 'C' => 20706, 'D' => 26102, 'E' => 35222, 'F' => 87111, 'G' => 87111, 'H' => 114723, 'I' => 114723, 'J' => 114723],
            ['eletkor' => "13-14 év között", 'A' => 17524, 'B' => 20478, 'C' => 20706, 'D' => 26102, 'E' => 35222, 'F' => 87111, 'G' => 87111, 'H' => 114723, 'I' => 114723, 'J' => 114723],
            ['eletkor' => "14-15 év között", 'A' => 17524, 'B' => 20478, 'C' => 20706, 'D' => 26102, 'E' => 35222, 'F' => 87111, 'G' => 87111, 'H' => 114723, 'I' => 114723, 'J' => 114723],
            ['eletkor' => "15-16 év között", 'A' => 17980, 'B' => 20934, 'C' => 21162, 'D' => 26102, 'E' => 35222, 'F' => 87111, 'G' => 87111, 'H' => 114723, 'I' => 114723, 'J' => 114723],
            ['eletkor' => "16-17 év között", 'A' => 17980, 'B' => 20934, 'C' => 21162, 'D' => 29671, 'E' => 38791, 'F' => 93879, 'G' => 93879, 'H' => 132980, 'I' => 132980, 'J' => 132980],
            ['eletkor' => "17-18 év között", 'A' => 17980, 'B' => 20934, 'C' => 21162, 'D' => 29671, 'E' => 38791, 'F' => 93879, 'G' => 93879, 'H' => 132980, 'I' => 132980, 'J' => 132980],
            ['eletkor' => "18-19 év között", 'A' => 18436, 'B' => 21390, 'C' => 21618, 'D' => 29671, 'E' => 38791, 'F' => 93879, 'G' => 93879, 'H' => 132980, 'I' => 132980, 'J' => 124190],
            ['eletkor' => "19-20 év között", 'A' => 18436, 'B' => 21390, 'C' => 21618, 'D' => 29671, 'E' => 38791, 'F' => 93879, 'G' => 93879, 'H' => 132980, 'I' => 132980, 'J' => 124190],
            ['eletkor'=>"20-21 év között",  'A' =>  18436, 'B' => 23955, 'C' => 23955, 'D' => 33240, 'E' => 42360, 'F' => 110211, 'G' => 110211, 'H' => 142639, 'I' => 142639, 'J' => 133849],
            ['eletkor'=>"21-22 év között",  'A' =>  18892, 'B' => 23955, 'C' => 23955, 'D' => 33240, 'E' => 42360, 'F' => 110211, 'G' => 110211, 'H' => 142639, 'I' => 142639, 'J' => 124190],
            ['eletkor'=>"22-23 év között",  'A' =>  18892, 'B' => 23955, 'C' => 23955, 'D' => 33240, 'E' => 42360, 'F' => 110211, 'G' => 110211, 'H' => 142639, 'I' => 142639, 'J' => 124190],
            ['eletkor'=>"23-24 év között",  'A' =>  18892, 'B' => 23955, 'C' => 23955, 'D' => 33240, 'E' => 42360, 'F' => 110211, 'G' => 110211, 'H' => 142639, 'I' => 142639, 'J' => 124190],
            ['eletkor'=>"24-25 év között",  'A' =>  21728, 'B' => 26738, 'C' => 26738, 'D' => 37166, 'E' => 46286, 'F' => 128897, 'G' => 128897, 'H' => 142639, 'I' => 136334, 'J' => 114537],
            ['eletkor'=>"25-26 év között",  'A' =>  21728, 'B' => 26738, 'C' => 26738, 'D' => 37166, 'E' => 46286, 'F' => 128897, 'G' => 128897, 'H' => 142639, 'I' => 136334, 'J' => 114537],
            ['eletkor'=>"26-27 év között",  'A' =>  21728, 'B' => 26738, 'C' => 26738, 'D' => 37166, 'E' => 46286, 'F' => 128897, 'G' => 128897, 'H' => 142639, 'I' => 136334, 'J' => 114537],
            ['eletkor'=>"27-28 év között",  'A' =>  21728, 'B' => 26738, 'C' => 26738, 'D' => 37166, 'E' => 46286, 'F' => 128897, 'G' => 128897, 'H' => 142639, 'I' => 127814, 'J' => 104881],
            ['eletkor'=>"28-29 év között",  'A' =>  24122, 'B' => 31261, 'C' => 31261, 'D' => 42163, 'E' => 51283, 'F' => 138576, 'G' => 138576, 'H' => 158889, 'I' => 144063, 'J' => 121130],
            ['eletkor'=>"29-30 év között",  'A' =>  24122, 'B' => 31261, 'C' => 31261, 'D' => 42163, 'E' => 51283, 'F' => 138576, 'G' => 138576, 'H' => 158889, 'I' => 144063, 'J' => 121130],
            ['eletkor'=>"30-31 év között",  'A' =>  24122, 'B' => 31261, 'C' => 31261, 'D' => 42163, 'E' => 51283, 'F' => 138576, 'G' => 138576, 'H' => 158889, 'I' => 135543, 'J' => 111473],
            ['eletkor'=>"31-32 év között",  'A' =>  24122, 'B' => 31261, 'C' => 31261, 'D' => 42163, 'E' => 51283, 'F' => 138576, 'G' => 138576, 'H' => 158889, 'I' => 135543, 'J' => 111473],
            ['eletkor'=>"32-33 év között",  'A' =>  26815, 'B' => 35784, 'C' => 35784, 'D' => 47517, 'E' => 56637, 'F' => 146563, 'G' => 146563, 'H' => 179619, 'I' => 156275, 'J' => 132205],
            ['eletkor'=>"33-34 év között",  'A' =>  26815, 'B' => 35784, 'C' => 35784, 'D' => 47517, 'E' => 56637, 'F' => 146563, 'G' => 146563, 'H' => 171365, 'I' => 147755, 'J' => 122549],
            ['eletkor'=>"34-35 év között",  'A' =>  26815, 'B' => 35784, 'C' => 35784, 'D' => 47517, 'E' => 56637, 'F' => 146563, 'G' => 146563, 'H' => 171365, 'I' => 147755, 'J' => 122549],
            ['eletkor'=>"35-36 év között",  'A' =>  26815, 'B' => 35784, 'C' => 35784, 'D' => 47517, 'E' => 56637, 'F' => 146563, 'G' => 146563, 'H' => 171365, 'I' => 147755, 'J' => 122549],
            ['eletkor'=>"36-37 év között",  'A' =>  29509, 'B' => 40654, 'C' => 40654, 'D' => 52871, 'E' => 58266, 'F' => 146563, 'G' => 146563, 'H' => 183679, 'I' => 158546, 'J' => 132465],
            ['eletkor'=>"37-38 év között",  'A' =>  29509, 'B' => 40654, 'C' => 40654, 'D' => 52871, 'E' => 58266, 'F' => 146563, 'G' => 146563, 'H' => 183679, 'I' => 158546, 'J' => 132465],
            ['eletkor'=>"38-39 év között",  'A' =>  29509, 'B' => 40654, 'C' => 40654, 'D' => 52871, 'E' => 58266, 'F' => 146563, 'G' => 146563, 'H' => 183679, 'I' => 158546, 'J' => 132465],
            ['eletkor'=>"39-40 év között",  'A' =>  29509, 'B' => 40654, 'C' => 40654, 'D' => 52871, 'E' => 58266, 'F' => 146563, 'G' => 146563, 'H' => 175261, 'I' => 148606, 'J' => 121650],
            ['eletkor'=>"40-41 év között",  'A' =>  32202, 'B' => 45525, 'C' => 45525, 'D' => 58266, 'E' => 60069, 'F' => 155463, 'G' => 155463, 'H' => 195993, 'I' => 169338, 'J' => 142381],
            ['eletkor'=>"41-42 év között",  'A' =>  32202, 'B' => 45525, 'C' => 45525, 'D' => 58266, 'E' => 60069, 'F' => 155463, 'G' => 155463, 'H' => 195993, 'I' => 169338, 'J' => 142381],
            ['eletkor'=>"42-43 év között",  'A' =>  32202, 'B' => 45525, 'C' => 45525, 'D' => 58266, 'E' => 60069, 'F' => 155463, 'G' => 149210, 'H' => 187575, 'I' => 159398, 'J' => 131566],
            ['eletkor'=>"43-44 év között",  'A' =>  32202, 'B' => 45525, 'C' => 45525, 'D' => 58266, 'E' => 60069, 'F' => 155463, 'G' => 149210, 'H' => 187575, 'I' => 159398, 'J' => 131566],
            ['eletkor'=>"44-45 év között",  'A' =>  34895, 'B' => 50395, 'C' => 50395, 'D' => 63579, 'E' => 65423, 'F' => 171794, 'G' => 165542, 'H' => 208307, 'I' => 180129, 'J' => 152298],
            ['eletkor'=>"45-46 év között",  'A' =>  34895, 'B' => 50395, 'C' => 50395, 'D' => 63579, 'E' => 65423, 'F' => 171794, 'G' => 157604, 'H' => 199889, 'I' => 170189, 'J' => 141483],
            ['eletkor'=>"46-47 év között",  'A' =>  34895, 'B' => 50395, 'C' => 50395, 'D' => 63579, 'E' => 65423, 'F' => 171794, 'G' => 157604, 'H' => 199889, 'I' => 170189, 'J' => 141483],
            ['eletkor'=>"47-48 év között",  'A' =>  34895, 'B' => 50395, 'C' => 50395, 'D' => 63579, 'E' => 65423, 'F' => 171794, 'G' => 157604, 'H' => 199889, 'I' => 170189, 'J' => 141483],
            ['eletkor'=>"48 év felett",     'A' =>  37588, 'B' => 55266, 'C' => 55266, 'D' => 68933, 'E' => 70777, 'F' => 186830, 'G' => 172178, 'H' => 212203, 'I' => 180981, 'J' => 15139]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agazati_potleks');
    }
}