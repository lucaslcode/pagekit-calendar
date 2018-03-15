<template>

    <div class="uk-form-horizontal">

        <div class="uk-form-row">
            <label for="form-num-display" class="uk-form-label">{{ 'Events to display' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-num-display" class="uk-input">
            </div>
        </div>

    </div>

</template>

<script>
    module.exports = {
        section: {
            label: 'Settings'
        },
        props: ['num-display']
    };
    window.Widgets.components['system-text:settings'] = module.exports;
</script>