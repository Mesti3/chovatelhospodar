<template>
    <section>
        <section class="section">
            <h2>Simple (ajax) handle</h2>
            <p>In this example you can try communication between client and Nette via button
                below.</p>
            <button v-on:click="ajaxTest" type="button" class="btn">Run Ajax & Nette request
            </button>
            <p>Nette response: <span>{{ ajaxTestResponse }}</span></p>
        </section>
        <section class="section">
            <h2>Simple form</h2>
            <p>In this example you can try form (post) submit process via example below.</p>
            <form @submit.prevent="processTestForm">
                <div>
                    <label for="name">Name:</label> <input v-model="formTest.name" type="text"
                    id="name" name="user_name">
                </div>
                <div>
                    <label for="mail">E-mail:</label> <input v-model="formTest.email" type="email"
                    id="mail" name="user_mail">
                </div>
                <div>
                    <label for="msg">Message:</label> <textarea v-model="formTest.message" id="msg"
                    name="user_message"></textarea>
                </div>
                <button type="submit">Send</button>
            </form>
            <p>Nette response: <span>{{ formTestResponse }}</span></p>
        </section>
    </section>
</template>

<script>

export default {
  name: 'Welcome',
  data() {
    return {
      ajaxTestResponse: '',
      formTestResponse: '',
      formTest: {
        name: '',
        email: '',
        message: '',
      },
    };
  },
  methods: {
    ajaxTest: function () {
      this.$http.get('http://localhost/api/?do=ajaxTest')
      .then(response => {
        this.ajaxTestResponse = response.body;
      });
    },
    processTestForm: function () {
      const formData = new FormData();
      formData.append('name', this.formTest.name);
      formData.append('email', this.formTest.email);
      formData.append('message', this.formTest.message);

      this.$http.post('http://localhost/api/?do=formTest', formData).then(response => {
        this.formTestResponse = response.body;
      });
    },
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
