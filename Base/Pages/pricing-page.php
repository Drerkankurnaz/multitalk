<?php
$pages = [
    [
        'name' => 'Weekly', 
        'style' => 'group md:flex items-center justify-between p-6 rounded-lg shadow hover:shadow-md shadow-slate-100 dark:shadow-slate-800 transition-all duration-500', 
        'price' => '9', 
        'duration' => 'Week', 
        'button_text' => 'Login Now', 
        'button_style' => 'h-8 px-3 tracking-wide inline-flex items-center justify-center font-medium rounded-md border border-violet-600/20 hover:bg-violet-600 text-violet-600 hover:text-white text-sm md:mt-0 mt-4', 
    ],
    [
        'name' => 'Monthly', 
        'style' => 'group md:flex items-center justify-between p-6 rounded-lg shadow hover:shadow-md shadow-slate-100 dark:shadow-slate-800 transition-all duration-500 mt-6', 
        'price' => '29', 
        'duration' => 'Month', 
        'button_text' => 'Join Now', 
        'button_style' => 'h-8 px-3 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600/10 hover:bg-violet-600 text-violet-600 hover:text-white text-sm md:mt-0 mt-4', 
    ],
    [
        'name' => 'Yearly', 
        'style' => 'group md:flex items-center justify-between p-6 rounded-lg shadow hover:shadow-md shadow-slate-100 dark:shadow-slate-800 transition-all duration-500 mt-6', 
        'price' => '299', 
        'duration' => 'Year', 
        'button_text' => 'Subscribe Now', 
        'button_style' => 'h-8 px-3 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600 text-white text-sm md:mt-0 mt-4', 
    ]
];
?>

<?php foreach ($pages as $item): ?>
<div class="<?php echo $item['style']; ?>">
    <div class="md:w-36">
        <h3 class="text-xl text-violet-600 font-semibold"><?php echo $item['name']; ?></h3>

        <div class="flex mt-3">
            <span class="text-lg">$</span>
            <span class="text-2xl font-semibold"><?php echo $item['price']; ?></span>
            <span class="text-lg self-end">/ <?php echo $item['duration']; ?></span>
        </div>
    </div>

    <ul class="list-none">
        <li class="text-slate-400 mt-2"><span class="text-violet-600 text-lg me-2"><i
                    class="iconoir-check-circle align-middle"></i></span>Full Access</li>
        <li class="text-slate-400 mt-2"><span class="text-violet-600 text-lg me-2"><i
                    class="iconoir-check-circle align-middle"></i></span>Source Files</li>
    </ul>

    <ul class="list-none">
        <li class="text-slate-400 mt-2"><span class="text-violet-600 text-lg me-2"><i
                    class="iconoir-check-circle align-middle"></i></span>Free Appointments</li>
        <li class="text-slate-400 mt-2"><span class="text-violet-600 text-lg me-2"><i
                    class="iconoir-check-circle align-middle"></i></span>Enhanced Security</li>
    </ul>

    <div class="md:w-36 md:text-end">
        <a href="" class="<?php echo $item['button_style']; ?>"><?php echo $item['button_text']; ?></a>
    </div>
</div>
<!--end content-->
<?php endforeach; ?>