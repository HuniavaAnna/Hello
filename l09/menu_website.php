<?php

$menuItems = [
    'Головна' => "/link1",
    'Контакти' => "/link2",
    'Товари' =>  [
        'Книги' =>  "/link3_1",
        'Комікси' =>  "/link3_1",
        ]
    ];

echo '<ul>';
foreach ($menuItems as $label => $link) {
    echo '<li>';
    if (is_array($link)) {
        echo $label;
        echo '<ul>';
        foreach ($link as $subLabel => $subLink) {
            echo '<li><a href="' . $subLink . '">' . $subLabel . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo '<a href="' . $link . '">' . $label . '</a>';
    }
    echo '</li>';
}
echo '</ul>';
?>


