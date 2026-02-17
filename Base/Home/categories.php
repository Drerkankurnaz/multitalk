<?php
$categories = [
    [
        'icon' => 'iconoir-laptop-dev-mode text-2xl', 
        'name' => 'Art & Design', 
        'title' => "10+ İçerikler", 
    ],
    [
        'icon' => 'iconoir-antenna-signal text-2xl', 
        'name' => 'Web Development', 
        'title' => "10+ İçerikler", 
    ],
    [
        'icon' => 'iconoir-network-reverse text-2xl', 
        'name' => 'Digital Marketing', 
        'title' => "10+ İçerikler", 
    ],
    [
        'icon' => 'iconoir-html5 text-2xl', 
        'name' => 'HTML CSS', 
        'title' => "10+ İçerikler", 
    ],
    [
        'icon' => 'iconoir-cube-replace-face text-2xl', 
        'name' => 'Leadership', 
        'title' => "10+ İçerikler", 
    ],
    [
        'icon' => 'iconoir-cpu text-2xl', 
        'name' => 'Data Science', 
        'title' => "10+ İçerikler", 
    ],
    [
        'icon' => 'iconoir-chat-bubble-check text-2xl', 
        'name' => 'ChatGPT', 
        'title' => "10+ İçerikler", 
    ],
    [
        'icon' => 'iconoir-learning text-2xl', 
        'name' => 'Deep Learning', 
        'title' => "10+ İçerikler", 
    ]
];
?>

<?php foreach ($categories as $item): ?>
<div
    class="group flex items-center bg-white hover:bg-gradient-to-tr hover:to-violet-600 hover:from-fuchsia-600 dark:bg-slate-900 rounded-md shadow shadow-slate-200 dark:shadow-slate-800 duration-500 p-5">
    <div
        class="size-12 bg-violet-600/5 group-hover:bg-white/20 text-violet-600 group-hover:text-white rounded-md flex align-middle justify-center items-center shadow-sm">
        <i class="<?php echo $item['icon']; ?>"></i>
    </div>

    <div class="content ms-3">
        <a href="" class="title text-lg font-semibold group-hover:text-white"><?php echo $item['name']; ?></a>
        <p class="text-slate-400 group-hover:text-white/50"><?php echo $item['title']; ?></p>
    </div>
</div>
<!--end content-->
<?php endforeach; ?>