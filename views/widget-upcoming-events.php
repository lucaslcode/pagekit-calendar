<?php
/**
 * @var \Pagekit\Widget\Model\Widget $widget
 */
 ?>

<?php $view->script('moment', 'calendar:assets/js/moment.min.js', 'jquery') ?>
<?php if (count($events) > 0): ?>
	<ul class="<?= $widget->get('list_class') ?>">
	<?php foreach ($events as $event) { ?>
		<li class="<?= $widget->get('listitem_class') ?>"><article class="<?= $widget->get('article_class') ?>">
			<h1 class="<?= $widget->get('title_class') ?>"><?= $event->title ?></h1>
			<p class="<?= $widget->get('meta_class') ?>"><time datetime="<?= $event->start->format(\DateTime::ATOM) ?>"><?= $event->start->format($widget->get('date_format')) ?></time></p>
			<p class="<?= $widget->get('description_class') ?>"><?= $app['content']->applyPlugins($event->description, ['widget' => $widget, 'markdown' => true]) ?></p>
		</article></li>
	<?php } ?>
	</ul>
	<?php if ($widget->get('show_view_all')): ?>
		<p><a href="<?= $view->url('@calendar') ?>"><?= $widget->get('view_all_text') ?></a></p>
	<?php endif; ?>
<?php else: ?>
	<p class="<?= $widget->get('no_events_class') ?>"><?= $widget->get('no_events_message') ?></p>
<?php endif; ?>