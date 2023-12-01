

<div class="penutup"></div>
<div class="tangki">
 
   
    <div class="air" style="width: 100%; height:<?php
         foreach ($baca as $nilaisensor){
            
          $a=   $nilaisensor->tinggi;
         //  echo $a;
     //cari 1 persen dari 13
     $persen1 = $a * 1/100;
     if( $a >= 0 && $a <= 0.65){
        echo '100';
     } elseif($a >= 0.66 && $a <= 1.3){
      echo '95';
     }
     elseif($a >= 1.31 && $a <= 1.95){
      echo '90';
     }
     elseif($a >= 1.96 && $a <= 2.6){
      echo '85';
     }
     elseif($a >= 2.61 && $a <= 3.25){
      echo '80';
     }elseif($a >= 3.26 && $a <= 3.9){
      echo '75';
     }elseif($a >= 3.91 && $a <= 4.55){
      echo '70';
     }elseif($a >= 4.56 && $a <= 5.2){
      echo '65';
     }elseif($a >= 5.21 && $a <= 5.85){
      echo '60';
     }elseif($a >= 5.86 && $a <= 6.5){
      echo '55';
     }elseif($a >= 6.51 && $a <= 7.15){
      echo '50';
     }elseif($a >= 7.16 && $a <= 7.8){
      echo '45';
     }elseif($a >= 7.81 && $a <= 8.45){
      echo '40';
     }elseif($a >= 8.46 && $a <= 9.1){
      echo '35';
     }elseif($a >= 9.11 && $a <= 9.75){
      echo '30';
     }elseif($a >= 9.76 && $a <= 10.4){
      echo '25';
     }elseif($a >= 10.41 && $a <= 11.05){
      echo '20';
     }elseif($a >= 11.06 && $a <= 11.7){
      echo '15';
     }elseif($a >= 11.71 && $a <= 12.35){
      echo '10';
     }elseif($a >= 12.36){
      echo '5';
     }else {
      echo 'error';
     }
     
     
   //   elseif( $a == '0.26'){
   //      echo '2';
   //   }elseif( $a == '0.39'){
   //      echo '3';
   //   }elseif( $a == '0.52'){
   //      echo '4';
   //   }elseif( $a == '0.65'){
   //      echo '5';
   //   }elseif( $a == ' 0.78'){
   //      echo '6';
   //   }elseif( $a == '0.91'){
   //      echo '7';
   //   }elseif( $a == '1.04'){
   //      echo '8';
   //   }elseif( $a == '1.17'){
   //      echo '9';
   //   }elseif( $a == '1.3'){
   //      echo '10';
   //   }
   //   //10
   //   elseif( $a == '1.43'){
   //      echo '11';
   //   }elseif( $a == '1.56'){
   //      echo '12';
   //   }elseif( $a == ' 1.69'){
   //      echo '13';
   //   }elseif( $a == '1.82'){
   //      echo '14';
   //   }elseif( $a == ' 1.95'){
   //      echo '15';
   //   }elseif( $a == '2.08'){
   //      echo '16';
   //   }elseif( $a == '2.21'){
   //      echo '17';
   //   }elseif( $a == ' 2.34'){
   //      echo '18';
   //   }elseif( $a == ' 2.47'){
   //      echo '19';
   //   }elseif( $a == '2.6'){
   //      echo '20';
   //   }
   //   //20
   //  elseif( $a == '2.73'){
   //      echo '21';
   //   }elseif( $a == '2.86'){
   //      echo '22';
   //   }elseif( $a == '2.99'){
   //      echo '23';
   //   }elseif( $a == '3.12'){
   //      echo '24';
   //   }elseif( $a == '3.25'){
   //      echo '25';
   //   }elseif( $a == '3.38'){
   //      echo '26';
   //   }elseif( $a == '3.51'){
   //      echo '27';
   //   }elseif( $a == '3.64'){
   //      echo '28';
   //   }elseif( $a == '3.77'){
   //      echo '29';
   //   }elseif( $a == '3.9'){
   //      echo '30';
   //   }
   //  //30
   //  elseif( $a == '4.03'){
   //      echo '31';
   //   }elseif( $a == '4.16'){
   //      echo '32';
   //   }elseif( $a == '4.29'){
   //      echo '33';
   //   }elseif( $a == '4.42'){
   //      echo '34';
   //   }elseif( $a == '4.55'){
   //      echo '35';
   //   }elseif( $a == '4.68'){
   //      echo '36';
   //   }elseif( $a == '4.81'){
   //      echo '37';
   //   }elseif( $a == '4.94'){
   //      echo '38';
   //   }elseif( $a == '5.07'){
   //      echo '39';
   //   }elseif( $a == '5.2'){
   //      echo '40';
   //   }
   //  //40
   //  elseif( $a == '5.33'){
   //      echo '41';
   //   }elseif( $a == '5.46'){
   //      echo '42';
   //   }elseif( $a == '5.59'){
   //      echo '43';
   //   }elseif( $a == '5.72'){
   //      echo '44';
   //   }elseif( $a == '5.85'){
   //      echo '45';
   //   }elseif( $a == '5.98'){
   //      echo '46';
   //   }elseif( $a == '6.11'){
   //      echo '47';
   //   }elseif( $a == '6.24'){
   //      echo '48';
   //   }elseif( $a == '6.37'){
   //      echo '49';
   //   }elseif( $a == '6.5'){
   //      echo '50';
   //   }
   //  //50
   //  elseif( $a == '6.63'){
   //      echo '51';
   //   }elseif( $a == '6.76'){
   //      echo '52';
   //   }elseif( $a == '6.89'){
   //      echo '53';
   //   }elseif( $a == '7.02'){
   //      echo '54';
   //   }elseif( $a == '7.15'){
   //      echo '55';
   //   }elseif( $a == '7.28'){
   //      echo '56';
   //   }elseif( $a == '7.41'){
   //      echo '57';
   //   }elseif( $a == '7.54'){
   //      echo '58';
   //   }elseif( $a == '7.67'){
   //      echo '59';
   //   }elseif( $a == '7.8'){
   //      echo '60';
   //   }
   //  //60
   //  elseif( $a == '7.93'){
   //      echo '61';
   //   }elseif( $a == '8.06'){
   //      echo '62';
   //   }elseif( $a == '8.19'){
   //      echo '63';
   //   }elseif( $a == '8.32'){
   //      echo '64';
   //   }elseif( $a == '8.45'){
   //      echo '65';
   //   }elseif( $a == '8.58'){
   //      echo '66';
   //   }elseif( $a == '8.71'){
   //      echo '67';
   //   }elseif( $a == '8.84'){
   //      echo '68';
   //   }elseif( $a == '8.97'){
   //      echo '69';
   //   }elseif( $a == '9.1'){
   //      echo '70';
   //   }
   //  //70
   //  elseif( $a == '9.23'){
   //      echo '71';
   //   }elseif( $a == '9.36'){
   //      echo '72';
   //   }elseif( $a == '9.49'){
   //      echo '73';
   //   }elseif( $a == '9.62'){
   //      echo '74';
   //   }elseif( $a == '9.75'){
   //      echo '75';
   //   }elseif( $a == '9.88'){
   //      echo '76';
   //   }elseif( $a == '10.01'){
   //      echo '77';
   //   }elseif( $a == '10.14'){
   //      echo '78';
   //   }elseif( $a == '10.27'){
   //      echo '79';
   //   }elseif( $a == '10.4'){
   //      echo '80';
   //   }
   //  //80
   //  elseif( $a == '10.53'){
   //      echo '81';
   //   }elseif( $a == '10.66'){
   //      echo '82';
   //   }elseif( $a == '10.79'){
   //      echo '83';
   //   }elseif( $a == '10.92'){
   //      echo '84';
   //   }elseif( $a == '11.05'){
   //      echo '85';
   //   }elseif( $a == '11.18'){
   //      echo '86';
   //   }elseif( $a == '11.31'){
   //      echo '87';
   //   }elseif( $a == '11.44'){
   //      echo '88';
   //   }elseif( $a == '11.57'){
   //      echo '89';
   //   }elseif( $a == '11.7'){
   //      echo '90';
   //   }
   //  //90
   //  elseif( $a == '11.83'){
   //      echo '91';
   //   }elseif( $a == '11.96'){
   //      echo '92';
   //   }elseif( $a == '12.09'){
   //      echo '93';
   //   }elseif( $a == '12.22'){
   //      echo '94';
   //   }elseif( $a == '12.35'){
   //      echo '95';
   //   }elseif( $a == '12.48'){
   //      echo '96';
   //   }elseif( $a == '12.61'){
   //      echo '97';
   //   }elseif( $a == '12.74'){
   //      echo '98';
   //   }elseif( $a == '12.87'){
   //      echo '99';
   //   }else( $a == '13.0'){
   //      echo '100';
   //   }
    //100




        
        
        
        
        } 
         
         
         ?>%; color:white;">
   

</div>
