var gulp = require('gulp');
var runSequence = require('run-sequence');

gulp.task('build', function(callback) {
  runSequence('clean',
  [
    'sass',
    'js',
    'copy:img',
    'copy:fonts',
    'jekyll'
  ],
  callback);
});