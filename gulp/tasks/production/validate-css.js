var gulp = require('gulp');
var csslint = require('gulp-csslint');

gulp.task('validate:css', function() {
  return gulp.src('_site/css/**/*.css')
    .pipe(csslint())
    .pipe(csslint.reporter());
});