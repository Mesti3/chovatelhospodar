<template>
    <main id="app" class="container">

        <header>
            <h1>Nettpack</h1>
            <h2>Nette 3, Webpack 4 and Vue.js works together with <3</h2>
        </header>

        <!-- Navigation -->
        <nav>
            <router-link tag="a" active-class="is-active" to="/" exact>Welcome</router-link>
            |
            <router-link tag="a" active-class="is-active" to="/about/" exact>About</router-link>
        </nav>
        <!-- Navigation -->

        <!-- Include page content -->
        <router-view></router-view>
        <!-- # Include page content -->

    </main>
</template>

<script>
export default {
  name: 'App',
  metaInfo: {
    title: 'Welcome',
    titleTemplate: '%s | Nettpack',
  },
};
</script>

<style lang="scss">
    // Variables
    $bg-color: #3c8ed7;
    $font-color: #fff;
    $primary-bg-blur: rgba(255, 255, 255, .3);

    // Global
    body {
        background: $bg-color;
        color: $font-color;
        font-family: 'Helvetica Neue', sans-serif;
    }

    // Custom
    #app {
        &.container {
            display: block;
            margin: 2rem auto 0;
            max-width: 980px;
        }

        & > header {
            background: $primary-bg-blur;
            padding: 1rem;
            text-align: center;
        }

        & > nav {
            background: $primary-bg-blur;
            margin: 1rem auto;
            padding: 1rem;

            & > a {
                color: $font-color;

                &.is-active {
                    font-weight: bold;
                }
            }
        }

        & > section {
            background: $primary-bg-blur;
            margin-bottom: 3rem;
            padding: 1rem;
        }
    }

    // Components
    .btn {
        font-size: 16px;
    }
</style>
