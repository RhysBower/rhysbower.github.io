var gulp   = require('gulp');
var gzip   = require('gulp-gzip');

gulp.task('gzip', function() {
  return gulp.src('_site/**/*.{html,xml,json,css,js}')
    .pipe(gzip())
    .pipe(gulp.dest('_site'));
});