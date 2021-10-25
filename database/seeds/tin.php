<?php

use Illuminate\Database\Seeder;

class tin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20; $i++ ) {
            DB::table('tin')->insert([
                ['TieuDe' => 'Oppo Xss ' . $i,'TomTat'=>'Thằng Được nó sống ở cái làng này chưa bao giờ mất lòng một ai, kể cả người già con đến đứa trẻ con nít. Việc nó ra đi đột ngột khiến vùng quê nghèo này ai cũng thấy sốc, anh Trần Văn Chương nghẹn lại.
                ','urlHinh'=>'upload/images/Hinh%20ve%20tiet%20lo%20suc%20manh%20noi%20tam%20cua%20ban.png', 'SoLanXem'=>'2'.$i, 
                'Ngay'=>Now(),'tags'=>'','AnHien'=>1
               ],
                ['TieuDe' => 'Oppo Xss ' . $i,'TomTat'=>'Thằng Được nó sống ở cái làng này chưa bao giờ mất lòng một ai, kể cả người già con đến đứa trẻ con nít. Việc nó ra đi đột ngột khiến vùng quê nghèo này ai cũng thấy sốc, anh Trần Văn Chương nghẹn lại.
                ','urlHinh'=>'upload/images/Hinh%20ve%20tiet%20lo%20suc%20manh%20noi%20tam%20cua%20ban.png', 'SoLanXem'=>'2'.$i, 
                'Ngay'=>Now(),'tags'=>'','AnHien'=>1
               ],
                ['TieuDe' => 'Oppo ssXA ' . $i,'TomTat'=>'Nhận quà mang lại niềm vui cho bạn nhưng cho đi còn làm bạn vui sướng, hạnh phúc, giải tỏa căng thẳng nhiều hơn gấp bội lần - các nhà khoa học đã kết luận như thế.
                ','urlHinh'=>'upload/images/Hinh%20ve%20tiet%20lo%20suc%20manh%20noi%20tam%20cua%20ban.png', 'SoLanXem'=>'2'.$i, 
                'Ngay'=>Now(),'tags'=>'','AnHien'=>1
               ],
             ]);
        }//for
    }
}
