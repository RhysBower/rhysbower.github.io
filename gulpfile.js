var gulp = require('gulp');
var duration = require('gulp-duration')
var sass = require('gulp-sass');

gulp.task('sass', function () {
    gulp.src('./app/_sass/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('./app/css/main.css'));
});