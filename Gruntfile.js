'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/*.js',
        '!assets/js/scripts.min.js'
      ]
    },
    less: {
      dist: {
        files: {
          'assets/css/main.min.css': [
            'assets/less/app.less'
          ]
        },
        options: {
          compress: true,
          // LESS source map
          // To enable, set sourceMap to true and update sourceMapRootpath based on your install
          sourceMap: true,
          sourceMapFilename: 'assets/css/main.min.css.map',
          sourceMapRootpath: '/app/mu-plugins/abrams-wp-dashboard/'
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': [
            'assets/js/_*.js'
          ]
        },
        options: {
          // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
          sourceMap: 'assets/js/scripts.min.js.map',
          sourceMappingURL: '/app/mu-plugins/abrams-wp-dashboard/assets/js/scripts.min.js.map'
        }
      }
    },
    version: {
      options: {
        file: 'lib/scripts.php',
        css: 'assets/css/main.min.css',
        cssHandle: 'abrams_wp_dashboard_main',
        js: 'assets/js/scripts.min.js',
        jsHandle: 'abrams_wp_dashboard_scripts'
      }
    },
    watch: {
      less: {
        files: [
          'assets/less/*.less'
        ],
        tasks: ['less', 'version']
      },
      js: {
        files: [
          '<%= jshint.all %>',
          'assets/js/plugins/*.js'
        ],
        tasks: ['uglify', 'version']
      },
      livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          livereload: false
        },
        files: [
          'assets/css/main.min.css',
          'assets/js/scripts.min.js',
          'lib/*.php',
          '*.php'
        ]
      }
    },
    clean: {
      dist: [
        'assets/css/main.min.css',
        'assets/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-bower-task');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-wp-version');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'less',
    'uglify',
    'version'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};
