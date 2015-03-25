var gulp = require('gulp');
var notify = require("gulp-notify") ;
var duration = require('gulp-duration');
var rm = require( 'gulp-rm' );

var concat = require('gulp-concat');

var htmlv = require('gulp-html-validator');
var htmlmin = require('gulp-htmlmin');

var sass = require('gulp-sass');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var csscomb = require('gulp-csscomb');
var csslint = require('gulp-csslint');

var uglify = require('gulp-uglify');
var jslint = require('gulp-jslint');

var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

var ghPages = require('gulp-gh-pages');

var config = {
     sassPath: './app/_sass',
     bowerDir: './bower_components' 
}

gulp.task( 'clean', function() {
  return gulp.src( ['app/css/**', 'app/js/**', 'app/img/**', 'app/fonts/**'], { read: false })
    .pipe( rm() )
})

gulp.task('validate-html', function() {
    return gulp.src('_site/**/*.html')
      .pipe(htmlv())
      .pipe(gulp.dest('build/html-validator'));
});

gulp.task('min-html', function() {
  return gulp.src('_site/**/*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('_site'))
});

gulp.task('sass', function() {
  return gulp.src('./app/_css/main.scss')
    .pipe(sass())
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('./app/css'));
});

gulp.task('validate-css', function() {
  return gulp.src('_site/css/**/*.css')
    .pipe(csslint())
    .pipe(csslint.reporter());
});

gulp.task('min-css', function() {
  return gulp.src('_site/css/**/*.css')
    .pipe(csscomb())
    .pipe(minifyCSS())
     .pipe(gulp.dest('_site/css'));
});

gulp.task('font-awesome', function() {
  return gulp.src('./bower_components/fontawesome/fonts/*.*')
    .pipe(gulp.dest('./app/fonts'));
});


gulp.task('js', function() {
  return gulp.src(['./bower_components/jquery/dist/jquery.min.js',
                   './bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
                   './app/_js/main.js'])
    .pipe(concat('./app/js/all.js'))
    // .pipe(jslint({
    //         node: true,
    //         evil: true,
    //         nomen: true,
    //         global: [],
    //         predef: [],
    //         reporter: 'default',
    //         errorsOnly: false
    //     }))
    //     .on('error', function (error) {
    //         console.error(String(error));
    //     })
    .pipe(uglify())
    .pipe(gulp.dest(''));
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

gulp.task('deploy', function() {
    return gulp.src('./_site/**/*')
      .pipe(ghPages({
        branch: "master"
      }))
});

gulp.task('watch', function() {
    gulp.watch('./app/_css/*.scss', ['css']);
    gulp.watch('./app/_js/*.js', ['js']);
    gulp.watch('./app/_img/*.*', ['img']);
});

gulp.task('default', ['font-awesome', 'sass', 'js', 'img'])
