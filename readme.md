Nettpack-vue
=============

This is a simple pre-packaged and pre-configured application using the [Nette](https://nette.org), 
[Docker](https://www.docker.com/), [Vue](https://vuejs.org/) and [Webpack](https://webpack.js.org/) 
that you can use as the starting point for your new applications.

Requirements
------------

**PHP 7.1** or higher, **Composer**, **Yarn** and **Docker**.


Installation
------------

The best way to install Web Project is using Composer. If you don't have Composer yet,
download it following [the instructions](https://doc.nette.org/composer). Then use command:

	$ composer create-project misaon/nettpack-vue path/to/install
	$ cd path/to/install


Make directories `temp/` and `log/` writable.


Magic commands flow
----------------
Run docker with compose:

	$ docker-compose up -d

Nette will run at **port 80**. You can go to **http://localhost/api/** for test.

---

Run webpack dev (hot-reload) server at **port 8080**:

    $ yarn run dev
    
After run this command new tab of your browser will be opened. Nice! Demo is working :)


Other commands
----------------
Generate API documentation with:

    $ yarn run docs

API documentations will be generated into www/api-docs. You can go to **http://localhost/api-docs/** for test.

---

Build your final app with:
    
    $ yarn run build

After build you can go to  **http://localhost/** and you will see your nice app :)


Urls
----------------

1) Nette is available at **http://localhost/api/** url.
2) Final app (after build) is available at **http://localhost/** url.
3) Dev Webpack server (after $ yarn run dev) is available at **http://localhost:8080/build.html** url.
4) API generated documentation (after $ yarn run docs) is available at **http://localhost/api-docs/** url.
