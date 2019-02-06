<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <input
                :id="field.attribute"
                :dusk="field.attribute"
                type="search"
                v-model="value"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="field.name"
            />
        </template>
    </default-field>
</template>

<script>
import { PlaceField, FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [HandlesValidationErrors, FormField, PlaceField],

    computed: {
        /**
         * Get the list of Canada.
         */
        states() {
            return {
                AB: {
                    count: '51',
                    name: 'Alberta',
                    abbr: 'AB',
                },
                BC: {
                    count: '52',
                    name: 'British Columbia',
                    abbr: 'BC',
                },
                MB: {
                    count: '53',
                    name: 'Manitoba',
                    abbr: 'MB',
                },
                NB: {
                    count: '54',
                    name: 'New Brunswick',
                    abbr: 'NB',
                },
                NL: {
                    count: '55',
                    name: 'Newfoundland',
                    abbr: 'NL',
                },
                NT: {
                    count: '56',
                    name: 'Northwest Territories',
                    abbr: 'NT',
                },
                NS: {
                    count: '57',
                    name: 'Nova Scotia',
                    abbr: 'NS',
                },
                ON: {
                    count: '58',
                    name: 'Ontario',
                    abbr: 'ON',
                },
                PE: {
                    count: '59',
                    name: 'Prince Edward Island',
                    abbr: 'PE',
                },
                QC: {
                    count: '60',
                    name: 'Quebec',
                    abbr: 'QC',
                },
                SK: {
                    count: '61',
                    name: 'Saskatchewan',
                    abbr: 'SK',
                },
                NU: {
                    count: '62',
                    name: 'Nunavut',
                    abbr: 'NU',
                },
                HI: {
                    count: '63',
                    name: 'Hawaii',
                    abbr: 'HI',
                },
                YT: {
                    count: '64',
                    name: 'Yukon',
                    abbr: 'YT',
                },
            }
        },
    },
}
</script>
