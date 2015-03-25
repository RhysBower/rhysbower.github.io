var gulp = require('gulp');
var rm = require( 'gulp-rm' );

gulp.task( 'clean', function() {
  return gulp.src( ['app/css/**', 'app/js/**', 'app/img/**', 'app/fonts/**', 'build/**', '_site/**'], { read: false })
    .pipe( rm() );
});