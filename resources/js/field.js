Nova.booting((Vue, router) => {
    Vue.component('index-nova-placefield-canadian-provinces', require('./components/IndexField'));
    Vue.component('detail-nova-placefield-canadian-provinces', require('./components/DetailField'));
    Vue.component('form-nova-placefield-canadian-provinces', require('./components/FormField'));
})