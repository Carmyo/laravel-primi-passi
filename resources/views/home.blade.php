<h1> Hello World </h1>
<?php
$data = [
    [
        'title'=> 'comic1',
        'price'=> 11,

    ],
    [
        'title'=> 'comic2',
        'price'=> 10,

    ],
    [
        'title'=> 'comic3',
        'price'=> 13,


    ],
]

?>
<?php
foreach ($data as $item)

<p>{{$item['title']}}</p>

?>