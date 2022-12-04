<?php

namespace App\Helpers\Graph;

class GraphHelper {

    public static function staticData() {
        $array = [
            'academic_year' => [
                '2013/2014',
                '2014/2015',
                '2015/2016',
                '2016/2017',
                '2017/2018',
                '2018/2019',
                '2019/2020',
                '2020/2021',
                '2021/2022',
                '2022/2023',
            ],
            'number_of_students' => [
                26,
                28,
                27,
                33,
                35,
                31,
                34,
                36,
                32,
                30,
            ],
        ];
        
        return json_encode($array);
    }

}