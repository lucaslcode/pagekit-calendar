<?php
return [
    'name' => 'calendar/upcoming-events',
    'label' => 'Upcoming Events',
    'render' => function ($widget) use ($app) {
        return $app->view('calendar/widget-upcoming-events.php');
    },
    'events' => [
        'view.scripts' => function ($event, $scripts) {
            $scripts->register('widget-upcoming-events', 'calendar:app/bundle/widget-upcoming-events.js', '~widgets');
        }
    ]
];