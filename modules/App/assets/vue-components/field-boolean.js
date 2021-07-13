export default {

    _meta: {
        label: 'Boolean',
        info: 'An input that is either true or false',
        icon: 'settings:assets/icons/boolean.svg',
        color: 'rgb(253, 229, 227)',
        settings: [
            {name: 'label', type: 'text'},
        ]
    },

    data() {
        return {
            val: this.modelValue
        }
    },

    props: {
        modelValue: {
            type: Boolean,
            default: false
        },
        label: {
            type: String,
            default: false
        }
    },

    watch: {
        modelValue() {
            this.val = this.modelValue;
            this.update();
        }
    },

    template: /*html*/`
        <div class="kiss-flex kiss-flex-middle" field="boolean">
            <div class="kiss-flex kiss-flex-middle"><input class="app-switch" type="checkbox" v-model="val" @change="update"></div>
            <span class="kiss-text-caption kiss-margin-small-left" :class="{'kiss-color-muted':!val}" v-if="label">{{ label }}</span>
        </div>
    `,

    methods: {
        update() {
            this.$emit('update:modelValue', this.val)
        }
    }
}