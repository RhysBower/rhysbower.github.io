var gulp      = require('gulp');
var csscomb = require('gulp-csscomb');
var minifycss = require('gulp-minify-css');

gulp.task('optimize:css', function() {
  return gulp.src('_site/css/**/*.css')
    .pipe(csscomb())
    .pipe(minifycss())
    .pipe(gulp.dest('app/css'));
});