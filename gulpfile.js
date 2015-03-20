var gulp = require('gulp');
var notify = require("gulp-notify") 
var duration = require('gulp-duration')
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var csscomb = require('gulp-csscomb');
var csslint = require('gulp-csslint');
var jslint = require('gulp-jslint');

var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

var config = {
     sassPath: './app/_sass',
     bowerDir: './bower_components' 
}

gulp.task('css', function() {
  return gulp.src('./app/_css/main.scss')
    .pipe(sass())
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(csscomb())
    .pipe(csslint())
    .pipe(csslint.reporter())
    .pipe(minifyCSS())
    .pipe(gulp.dest('./app/css'));
});

gulp.task('font-awesome', function() {
  return gulp.src('./bower_components/fontawesome/fonts/*.*')
    .pipe(gulp.dest('./app/fonts'));
});


gulp.task('js', function() {
  return gulp.src(['./bower_components/jquery/dist/jquery.min.js',
                   './bower_components/jquery_easing/jquery_easing.js',
                   './bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
                   './app/_js/main.js'])
    .pipe(concat('all.js'))
    .pipe(jslint({
            node: true,
            evil: true,
            nomen: true,
            global: [],
            predef: [],
            reporter: 'default',
            errorsOnly: false
        }))
        .on('error', function (error) {
            console.error(String(error));
        })
    .pipe(uglify())
    .pipe(gulp.dest('./app/js/'));
});

gulp.task('img', function () {
    return gulp.src('app/_img/**')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('app/img'));
});

gulp.task('default', ['font-awesome', 'css', 'js'])