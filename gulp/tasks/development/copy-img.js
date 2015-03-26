var gulp = require('gulp');

gulp.task('copy:img', function() {
  return gulp.src('./app/_img/**/*.{png,jpg,ico}')
    .pipe(gulp.dest('_site/img'));
});