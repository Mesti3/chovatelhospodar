<template>
    <section>
        <!-- Import components -->
        <simple-ajax></simple-ajax>
        <simple-form></simple-form>
        <!-- # Import components -->
    </section>
</template>

<script>
import SimpleAjax from '../components/SimpleAjax';
import SimpleForm from '../components/forms/SimpleForm';

export default {
  name: 'Welcome',
  metaInfo: {
    title: 'Welcome',
  },
  components: {
    'simple-ajax': SimpleAjax,
    'simple-form': SimpleForm,
  },
};
</script>

<style lang="scss" scoped>
    .section {
        &:not(:last-child) {
            border-bottom: 1px solid #fff;
        }
    }
</style>
