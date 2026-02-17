<?php
$ctas = [
    [
        'number' => '1010', 
        'target' => '1548', 
        'symbol' => '+', 
        'title' => 'Diyalog İçeriği', 
    ],
    [
        'number' => '2', 
        'target' => '12', 
        'symbol' => '+', 
        'title' => 'Hedef Dil', 
    ],
    [
        'number' => '0', 
        'target' => '500', 
        'symbol' => 'K', 
        'title' => 'Öğrenici', 
    ],
    [
        'number' => '0', 
        'target' => '80', 
        'symbol' => '+', 
        'title' => 'Araştırmacı', 
    ]
];
?>

<?php foreach ($ctas as $item): ?>
<div class="counter-box text-center">
    <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
            data-target="<?php echo $item['target']; ?>"><?php echo $item['number']; ?></span><?php echo $item['symbol']; ?>
    </h1>
    <h5 class="counter-head text-white uppercase font-medium"><?php echo $item['title']; ?></h5>
</div>
<!--end counter box-->
<?php endforeach; ?>
