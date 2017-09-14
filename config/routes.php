<?php
return array(
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index', // ActionIndex in NewsController
    'Director/([0-9]+)'=> 'Director/view/$1',
    'Director'=> 'Director/view/$1',
    'Chief/([0-9]+)'=> 'Chief/view/$1',
    'Chief'=> 'Chief/view/$1',
    'Sector/([0-9]+)'=> 'Sector/view/$1',
    'Sector'=> 'Sector/view/$1',
    'Worker/([0-9]+)'=> 'Worker/view/$1',
    'Worker'=> 'Worker/view/$1',
    'Index/([0-9]+)'=> 'index/view/$1',
    '([0-9]+)'=> 'index/view/$1',
    'Index'=> 'index/view/$1',
    ''=> 'index/view/$1',
);