module.exports = function(grunt) {
'use strict';

grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),

  site: {
    styles: {
        src: 'ui/styles/sass',
        dest: 'ui/styles/css'
    },
    js: {
      src: 'ui/js',
      dest: 'ui/js/min'
    }
  },

  // STYLES
  sass: {
    options: {
      style: 'compressed',
      quiet: true, // compact / expanded / nestedx
      sourcemap: 'none'
    },
    dev: {
      files: [{
        expand: true,
        cwd: '<%= site.styles.src %>',
        src: ['**/*.scss', '!_*/**/*.scss'],
        dest: '<%= site.styles.dest %>',
        ext: '.css'
      }]
    },
    style: {
      files: { '<%= site.styles.dest %>/dkh.css': '<%= site.styles.src %>/dkh.scss' }
    }
  },

  // JS
  uglify: {
    dkh: {
      files: {
        '<%= site.js.dest %>/dkh.js': ['<%= site.js.src %>/dkh.js']
      }
    }
  },

  watch: {
    css: {
      files: '<%= site.styles.src %>/**/*.scss',
      tasks: ['sass:dev']
    },
    style: {
      files: '<%= site.styles.src %>/**/*.scss',
      tasks: ['sass:style']
    },
    scripts: {
      files: '<%= site.js.src %>/dkh.js',
      tasks: ['uglify:dkh']
    },
  }

});

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['watch']);
};
