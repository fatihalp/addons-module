<?php

 return[
   "allow_update"   =>   [
      "name"      =>"Güncellemeye İzin Ver",
      "instructions"      =>"Üretim modundayken kısıtlamaları içindeki eklentilerin güncellenmesine izin verilsin mi?",

   ],
   "allow_download"   =>   [
      "name"      =>"İndirmeye İzin Ver",
      "instructions"      =>"Üretim modunda yeni eklentiler indirmeye izin verilsin mi?",
      "warning"      =>"Bu,
      <strong>composer.json\'da</strong> değişikliklere neden olabilir",

   ],
   "allow_removal"   =>   [
      "name"      =>"Kaldırmaya İzin Ver",
      "instructions"      =>"Üretim modunda ekleri kaldırmaya izin verilsin mi?",
      "warning"      =>"Bu,
      <strong>composer.json\'da</strong> değişikliklere neden olabilir",

   ],

];