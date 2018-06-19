<template>
    <section class="section">
        <h2>Simple ajax handle</h2>
        <p>In this example you can try communication between client and Nette via button below.</p>
        <button v-on:click="processSimpleAjax" type="button" class="btn">Run Ajax request</button>
        <p>Nette response: <span>{{ simpleAjaxResponse }}</span></p>
    </section>
</template>

<script>
export default {
  name: 'SimpleForm',
  data() {
    return {
      simpleAjaxResponse: '',
    };
  },
  methods: {
    processSimpleAjax: function () {
      this.$http.get(this.$apiUrl + '/simple-ajax/test/')
      .then(response => {
        this.simpleAjaxResponse = response.body;
      });
    },
  },
};
</script>

<style lang="scss" scoped>

</style>
