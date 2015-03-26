var gulp = require('gulp');
var concat = require('gulp-concat');

gulp.task('js', function() {
  return gulp.src(['./bower_components/jquery/dist/jquery.js',
                   './bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
                   './app/_js/main.js'])
    .pipe(concat('_site/js/all.js'))
    .pipe(gulp.dest(''));
});
