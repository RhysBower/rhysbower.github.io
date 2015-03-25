var gulp = require('gulp');
var htmlmin = require('gulp-htmlmin');

gulp.task('optimize:html', function() {
  return gulp.src(['_site/**/*.html', '_site/**/*.xml'])
    .pipe(htmlmin({collapseWhitespace: true,
                   removeComments: true
                 }))
    .pipe(gulp.dest('_site'));
});