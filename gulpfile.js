//https://www.smashingmagazine.com/2014/06/building-with-gulp/

//This is where you will define your Gulp tasks, which will be run using the gulp command.

//First, we’re loading the gulp and gulp-uglify modules
var gulp = require('gulp'),
   uglify = require('gulp-uglify'),
   jshint = require('gulp-jshint'),
   concat = require('gulp-concat')
   livereload = require('gulp-livereload');

gulp.task('minify', function () {
   gulp.src('web/js/*.js')
      .pipe(jshint())
      .pipe(jshint.reporter('default'))
      .pipe(uglify())
      .pipe(concat('app1.js'))
      .pipe(gulp.dest('web/build'))
});


gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('web/stylesheets/main.css');
});