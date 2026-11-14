declare(strict_types=1);
<?php

const FREE_DELIVERY_FROM = 50000;

function deliveryFee(string $area, int $subtotal):  int
{
    if ($subtotal >50000){
        return 0;
    }
    return match($area){
        'Bole', 'kazanchis' => 4500,
        'piassa', 'Megenagna' =>6000,
        default         =>8000,
    };
}


function orderTotal(array $lines, string $area ):array{
$subtotal = 0;
foreach($lines as $line){
    $subtotal += $line['qty']* $line['price'];
}
$fee = deliveryFee($area, $subtotal);

return [
    'subtotal'=> $subtotal,
    'fee'=> $fee,
    'total'=> $subtotal + $fee
];

}