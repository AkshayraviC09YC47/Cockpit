import FieldCode from "./field-code.js"

export default {

    _meta: {
        label: 'Object',
        info: 'Object input',
        icon: 'system:assets/icons/object.svg',
        settings: [
            {name: 'height', type: 'number'},
        ]
    },

    data() {
        return {
            val: null,
            error: null
        }
    },

    props: {
        modelValue: {
            default: null
        },
        height: {
            default: null
        },
        size: {
            type: Number,
            default: 14
        },
        asString: {
            type: Boolean,
            default: false
        },
        codemirror: {
            type: Object,
            default: {}
        }
    },

    components: {
        'field-code': FieldCode
    },

    watch: {
        val: {
            handler() { this.update() },
            deep: true
        },
        modelValue: {
            handler(val) {

                if (this.code.editor && !this.code.editor.hasFocus()) {

                    if (this.asString && typeof(val) == 'string') {
                        this.val = val;
                    } else {
                        this.val = JSON5.stringify(val, null, 2);
                    }
                }
            },
            deep: true
        }
    },

    template: /*html*/`
        <div class="kiss-position-relative" field="object">
            <field-code class="field-object-code" v-model="val" :height="height" :size="size" :codemirror="codemirror" mode="json5"></field-code>

            <div class="kiss-margin kiss-text-monospace kiss-size-small kiss-bgcolor-danger kiss-position-absolute animated fadeIn" style="left:0;right:0;bottom:0;z-index:3;padding:5px;" v-if="error">
                {{ error }}
            </div>
        </div>
    `,

    mounted() {
        this.code = this.$el.querySelector('.field-object-code');

        let val = this.modelValue;

        if (this.asString && typeof(val) == 'string') {
            val = JSON5.parse(val);
        }

        this.val = JSON5.stringify(val, null, 2);
    },

    methods: {
        update() {

            this.error = null

            try {
                let val = this.val ? JSON5.parse(this.val) : null;
                this.$emit('update:modelValue', this.asString ? JSON5.stringify(val) : val);
            } catch(e) {
                this.error = `${e.lineNumber}: ${e.message}`;
            }
        }
    }
}