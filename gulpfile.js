var gulp = require('gulp');
var notify = require("gulp-notify") 
var duration = require('gulp-duration')
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var config = {
     sassPath: './app/_sass',
     bowerDir: './bower_components' 
}

gulp.task('css', function() { 
    return gulp.src('./app/css/main.scss')
         .pipe(sass() 
          .on("error", notify.onError(function (error) {
              return "Error: " + error.message;
            }))) 
         .pipe(gulp.dest('./app/css')); 
});

gulp.task('js', function() {
  return gulp.src(['./bower_components/dist/js/jquery.min.js',
                   './bower_components/jquery_easing/jquery_easing.js',
                   './bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
                   './app/_js/main.js'])
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./app/js/'));
});

gulp.task('default', ['js'])