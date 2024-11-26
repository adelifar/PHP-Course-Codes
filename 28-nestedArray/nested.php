<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<pre>
    <?php
    function e($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }


    $courses = [
        'Java from zero to hero',
        'Complete PHP',
        'Learning React'
    ];
    $coursesDescription = [
        'Learn java from zero to professional programmer. you learn all about java programming',
        'learn PHP with a lot of projects and examples from scratch',
        'Learn Reactjs with a simple method to be a professional  front end developer',
    ];
    $coursesIcon = [
        '☕', '🐘', '⚛️'
    ];
    //    $courses=[ 'Java from zero to hero'=>'Learn java from zero to professional programmer. you learn all about java programming',]
    $courses = [
        [
            'title' => 'Java from zero to hero',
            'description' => 'Learn java from zero to professional programmer. you learn all about java programming',
            'icon' => '☕'
        ],
        [
            'title' => 'Complete PHP',
            'description' => 'learn PHP with a lot of projects and examples from scratch',
            'icon' => '🐘'
        ],
        [
            'title' => 'Learning React',
            'description' => 'Learn Reactjs with a simple method to be a professional  front end developer',
            'icon' => '⚛️'
        ]
    ];
    var_dump($courses);
    var_dump($courses[2]['icon']);
    var_dump($courses[2]['title']);

    foreach ($courses as $course) {
        var_dump($course);
        var_dump($course['icon']);
    }
    ?>
</pre>
<?php foreach ($courses as $course): ?>
    <details>
        <summary><?= e($course['icon']) ?> <?= e($course['title']) ?></summary>
        <p><?= e($course['description']) ?></p>
    </details>
<?php endforeach; ?>

<pre>
    <?php
    $courses = [
        [
            'title' => 'Java from zero to hero',
            'description' => 'Learn java from zero to professional programmer. you learn all about java programming',
            'icon' => '☕',
            'topics' => [
                'data types',
                'operators',
                'Object oriented programming',
                'JavaFx',
                'Stream',
                'Maven',
                'Socket programming'
            ]
        ],
        [
            'title' => 'Complete PHP',
            'description' => 'learn PHP with a lot of projects and examples from scratch',
            'icon' => '🐘',
            'topics' => [
                'variables',
                'arrays',
                'include',
                'database',
                'OOP',
                'Cookie',
                'Sessions'
            ]
        ],
        [
            'title' => 'Learning React',
            'description' => 'Learn Reactjs with a simple method to be a professional  front end developer',
            'icon' => '⚛️',
            'topics' => [
                'states',
                'refs',
                'typescript',
                'redux',
                'nextjs',
                'unit testing'
            ]
        ],
        [
            'title' => 'Android programming',
            'description' => 'Learn to develop Applications for android Smartphones and tablets',
            'icon' => '🤖',
//            'topics'=>[]
        ]
    ];
    var_dump($courses);
    //    foreach ($courses as $course){
    //        var_dump($course);
    //    }
    ?>
</pre>

<?php foreach ($courses as $course): ?>
    <details>
        <summary><?= e($course['icon']) ?> <?= e($course['title']) ?></summary>
        <p><?= e($course['description']) ?>        </p>
        <?php if (!empty($course['topics'])): ?>
            <ul>
                <?php foreach ($course['topics'] as $topic): ?>
                    <li><?= e($topic) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </details>
<?php endforeach; ?>
</body>
</html>