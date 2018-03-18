<?php
use MHDev\Calendar\Model\Event;

return [
    'name' => 'calendar/upcoming-events',
    'label' => 'Upcoming Events',
    'render' => function ($widget) use ($app) {
	
		$query = Event::query();
		$events = $query->where('end >= NOW()')->limit($widget->get('num_display'))->orderBy('end','asc')->get();
        return $app->view('calendar/widget-upcoming-events.php', compact('widget', 'events'));
    },
    'events' => [
        'view.scripts' => function ($event, $scripts) {
            $scripts->register('widget-upcoming-events', 'calendar:app/bundle/widget-upcoming-events.js', ['~widgets']);
        }
    ]
];