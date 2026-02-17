<?php
$blogs = [
    [
        'id' => 1,
        'img' => '/images/course/1.jpg', 
        'name' => 'Degree', 
        'title' => "The Future of Remote Work: Trending Now", 
    ],
    [
        'id' => 2,
        'img' => '/images/course/2.jpg', 
        'name' => 'University', 
        'title' => "The Psychology of Learning: How Cognitive", 
    ],
    [
        'id' => 3,
        'img' => '/images/course/3.jpg', 
        'name' => 'Developer', 
        'title' => "Crafting Compelling Presentations: Design", 
    ],
    [
        'id' => 4,
        'img' => '/images/course/4.jpg', 
        'name' => 'HTML5', 
        'title' => "Demystifying Data Science: A Beginner’s", 
    ],
    [
        'id' => 5,
        'img' => '/images/course/5.jpg', 
        'name' => 'Institution', 
        'title' => "The Art of Effective Online Collaboration", 
    ],
    [
        'id' => 6,
        'img' => '/images/course/6.jpg', 
        'name' => 'Graduation', 
        'title' => "Student Success Stories: From Learning", 
    ],
    [
        'id' => 7,
        'img' => '/images/course/7.jpg', 
        'name' => 'Certification', 
        'title' => "Instructor Spotlight: Meet the Faces Behind", 
    ],
    [
        'id' => 8,
        'img' => '/images/course/8.jpg', 
        'name' => 'Frontend', 
        'title' => "Navigating the Job Market: Career Tips", 
    ],
    [
        'id' => 9,
        'img' => '/images/course/9.jpg', 
        'name' => 'Mobile', 
        'title' => "Building a Growth Mindset: Strategie", 
    ]
];
?>

<?php foreach ($blogs as $item): ?>
<div
    class="group relative h-fit overflow-hidden bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 transition-all duration-500">
    <div class="relative overflow-hidden">
        <img src="<?php echo $static_url, $item['img']; ?>" class="" alt="">
        <div class="absolute start-6 bottom-6">
            <span
                class="bg-violet-600 text-white text-[12px] px-2.5 py-1 rounded-md h-4"><?php echo $item['name']; ?></span>
        </div>
    </div>

    <div class="relative p-6">
        <div class="">
            <div class="flex justify-between mb-4">
                <span class="text-slate-400 text-sm flex items-center"><i data-feather="calendar"
                        class="size-4 me-1"></i> 3rd Oct 24</span>
                <span class="text-slate-400 text-sm flex items-center"><i data-feather="clock" class="size-4 me-1"></i>
                    5 Min</span>
            </div>

            <a href="blog-detail.php?id=<?php echo $item['id']; ?>"
                class="text-lg hover:text-violet-600 font-medium"><?php echo $item['title']; ?></a>

            <div class="mt-3">
                <a href="blog-detail.php?id=<?php echo $item['id']; ?>"
                    class="btn btn-link hover:text-violet-600 after:bg-violet-600 duration-500 ease-in-out">Devamını Gör <i
                        class="mdi mdi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!--end content-->
<?php endforeach; ?>