<?php

function MyBiodata()
    {
        $biodata = array(
        //a. name (String, diambil dari parameter pertama) :
            'name' => 'Widdi Endila Depasa',
        //b. age (Number, diambil dari parameter ke dua) :
            'age'=> 24,
        //c. address (String) :
            'address' => 'Surabaya',
        //d. hobbies (Array) :
            'hobbies' => ['Membaca','Olahraga'],
        //e. is_married (Boolean) :
            'is_married' => false,
        //d. list_school (Array of Object) with key name, year_in, year_out, and major (if any, if no set “null” ) :
            'list_school' => [
                array('list' => 0 , 'Highschool' => 'SMA Bhayangkari 1 Surabaya', 'Year In' => 2011, 'Year Out' => 2014),
                array('list' => 1 , 'University' => 'ITATS', 'Year In' => 2014, 'Year Out' => 2018)],
        //e. skills (Array of Obj) with key skill_name and level (beginner, advanced, expert)
            'skills' => [
                array('number' => 0, 'Skills' => 'HTML', 'Level' => 'Beginner'),
                array('number' => 1, 'Skills' => 'CSS', 'Level' => 'Beginner'),
                array('number' => 2, 'Skills' => 'PHP', 'Level' => 'Beginner'),
                array('number' => 3, 'Skills' => 'Javascript', 'Level' => 'Beginner')]
         );

         return json_encode([$biodata]);
    }

    echo MyBiodata();
?>