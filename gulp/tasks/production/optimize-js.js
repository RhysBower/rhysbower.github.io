var gulp   = require('gulp');
var uglify = require('gulp-uglify');

gulp.task('optimize:js', function() {
  return gulp.src('_site/js/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('_site/js'));
});