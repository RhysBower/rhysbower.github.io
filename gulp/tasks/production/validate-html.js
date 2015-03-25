var gulp = require('gulp');
var htmlv = require('gulp-html-validator');

gulp.task('validate:html', function() {
    return gulp.src('_site/**/*.html')
      .pipe(htmlv())
      .pipe(gulp.dest('build/html-validator'));
});