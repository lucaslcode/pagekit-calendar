<template>
	<div class="uk-grid pk-grid-large" data-uk-grid-margin>

		<div class="uk-flex-item-1 uk-form-horizontal">
			
			<div class="uk-form-row">
					<label for="form-title" class="uk-form-label">{{ 'Title' | trans }}</label>
					<div class="uk-form-controls">
						<input id="form-title" class="uk-form-width-large" type="text" name="title" v-model="widget.title" v-validate:required>
						<p class="uk-form-help-block uk-text-danger" v-show="form.title.invalid">{{ 'Title cannot be blank.' | trans }}</p>
					</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-num-display" class="uk-form-label">{{ 'Max events to display' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-num-display" class="uk-form-width-small uk-text-right" type="number" name="title"
						   v-model="widget.data.num_display" min="1" number>
				</div>
			</div>
			
			<div class="uk-form-row">
                <label for="form-show_view_all" class="uk-form-label"><input id="form-show_view_all" type="checkbox" v-model="widget.data.show_view_all"> {{ 'Show \'See all\' link' | trans }}</label>
			</div>
			
			<div class="uk-form-row" v-if="widget.data.show_view_all">
				<label for="form-view_all_text" class="uk-form-label">{{ 'See all text' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-view_all_text" class="uk-form-width-large" type="text" name="view_all_text" v-model="widget.data.view_all_text">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-list_class" class="uk-form-label">{{ 'List container classes' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-list_class" class="uk-form-width-large" type="text" name="list_class" v-model="widget.data.list_class">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-listitem_class" class="uk-form-label">{{ 'Event &lt;li&gt; classes' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-listitem_class" class="uk-form-width-large" type="text" name="listitem_class" v-model="widget.data.listitem_class">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-article_class" class="uk-form-label">{{ 'Event &lt;article&gt; classes' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-article_class" class="uk-form-width-large" type="text" name="article_class" v-model="widget.data.article_class">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-title_class" class="uk-form-label">{{ 'Title classes' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-title_class" class="uk-form-width-large" type="text" name="title_class" v-model="widget.data.title_class">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-meta_class" class="uk-form-label">{{ 'Date text classes' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-meta_class" class="uk-form-width-large" type="text" name="meta_class" v-model="widget.data.meta_class">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-date_format" class="uk-form-label"><a href="http://php.net/manual/en/function.date.php">{{ 'Date text format' | trans }}</a></label>
				<div class="uk-form-controls">
					<input id="form-date_format" class="uk-form-width-large" type="text" name="date_format" v-model="widget.data.date_format">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-description_class" class="uk-form-label">{{ 'Description classes' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-description_class" class="uk-form-width-large" type="text" name="description_class" v-model="widget.data.description_class">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-no_events_message" class="uk-form-label">{{ 'No events found message' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-no_events_message" class="uk-form-width-large" type="text" name="no_events_message" v-model="widget.data.no_events_message">
				</div>
			</div>
			
			<div class="uk-form-row">
				<label for="form-no_events_class" class="uk-form-label">{{ 'No events found classes' | trans }}</label>
				<div class="uk-form-controls">
					<input id="form-no_events_class" class="uk-form-width-large" type="text" name="no_events_class" v-model="widget.data.no_events_class">
				</div>
			</div>
			
		</div>
		<div class="pk-width-sidebar pk-width-sidebar-large">

			<partial name="settings"></partial>

		</div>
	</div>

</template>

<script>
    module.exports = {
        section: {
            label: 'Settings'
        },
        props: ['widget', 'config', 'form'],
		created() {
			this.$options.partials = this.$parent.$options.partials;
			this.$set('widget.data', _.merge({
				num_display: 3,
				show_view_all: 1,
				view_all_text: 'See all...',
				list_class: 'uk-grid uk-grid-match uk-container-center',
				listitem_class: 'uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-3',
				article_class: 'uk-article',
				title_class: 'uk-h4 uk-article-title',
				meta_class: 'uk-article-meta',
				date_format: 'g:ia, D jS F, Y',
				description_class: '',
				no_events_message: 'No upcoming events at the moment.',
				no_events_class: ''
			}, this.widget.data));
		}
    };
    window.Widgets.components['calendar-upcoming-events:settings'] = module.exports;
</script>