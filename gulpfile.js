var gulp = require('gulp');
var duration = require('gulp-duration')
var sass = require('gulp-sass');

gulp.task('sass', function () {
    gulp.src('./_/app/css/main.scss')
        .pipe(sass({ includePaths : ['_/app/_sass/'] }))
        .pipe(gulp.dest('css'));
});