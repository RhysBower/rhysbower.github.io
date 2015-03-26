var gulp = require('gulp');

gulp.task('copy:fonts', function() {
  return gulp.src('./bower_components/fontawesome/fonts/*.*')
    .pipe(gulp.dest('_site/fonts'));
});