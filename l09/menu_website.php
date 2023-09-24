<?php

$menu = [
    "/link1",
    "/link2",
        [
            "/link3_1",
            "/link3_1",
        ]
    ];

foreach ($menu as $item) {
    echo '<li>';
}
?>
 <ul>
      <li><a href="/link1">Головна</a></li>
      <li><a href="/link2">Про нас</a></li>
      <li>
          Товари
          <ul>
              <li><a href="/link3_1">Книги</a></li>
              <li><a href="/link3_2">Комікси</a></li>
          </ul>
      </li>
 </ul>


