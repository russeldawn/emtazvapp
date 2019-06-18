export default {
    methods: {
        info(title, msg) {
            const h = this.$createElement;
            this.$info({
                title: title,
                content: h('div', {}, [
                    h('p', 'some messages...some messages...'),
                    h('p', 'some messages...some messages...'),
                ]),
                onOk() {},
            });
        },

        success(title, msg) {
            this.$success({
                title: title,
                content: msg,
            });
        },

        error(title, msg) {
            this.$error({
                title: title,
                content: msg,
            });
        },

        warning(title, msg) {
            this.$warning({
                title: title,
                content: msg,
            });
        },

        fromMixin() {
            console.log('this is from the mixin log!!!');

        },

        showConfirm() {
            this.$confirm({
              title: 'Do you Want to delete these items?',
              content: 'Some descriptions',
              onOk() {
                console.log('OK');
              },
              onCancel() {
                console.log('Cancel');
              },
              class: 'test',
            });
          },

    }
}