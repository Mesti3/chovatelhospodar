<template>
    <section class="section">
        <h2>Simple form</h2>
        <p>In this example you can try form (post) submit process via example below.</p>
        <form @submit.prevent="processTestForm">
            <div>
                <label for="name">Name</label>
                <input v-model="formTest.name" type="text" id="name">
            </div>
            <div>
                <label for="mail">E-mail</label>
                <input v-model="formTest.email" type="email" id="mail" required>
            </div>
            <div>
                <label for="msg">Message</label>
                <textarea v-model="formTest.message" id="msg" rows="3"></textarea>
            </div>
            <button type="submit">Send</button>
        </form>
        <p>Nette response: <span>{{ formTestResponse }}</span></p>
    </section>
</template>

<script>

export default {
  name: 'SimpleForm',
  data() {
    return {
      formTest: {
        name: '',
        email: '',
        message: '',
      },
      formTestResponse: '',
    };
  },
  methods: {
    processTestForm: function () {
      this.$http.post(this.$apiUrl + '/simple-form/test/', this.formTest).then(response => {
        this.formTestResponse = response.body;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
    form {
        & > div {
            display: flex;
            align-items: center;
            margin-bottom: .5rem;

            & > label {
                width: 5em;
                padding-right: 1em;
            }

            & > input,
            & > textarea {
                flex: 1 1 auto;
            }
        }
    }
</style>
