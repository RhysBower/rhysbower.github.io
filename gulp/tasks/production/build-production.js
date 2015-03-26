var gulp = require('gulp');
var runSequence = require('run-sequence');

gulp.task('build:production', function(callback) {
  runSequence('clean',
  [
    'sass',
    'js',
    'copy:img',
    'copy:fonts',
    'jekyll:production'
  ],
  [
    'optimize:css',
    'optimize:html',
    'optimize:img',
    'optimize:js'
  ],
  callback);
});