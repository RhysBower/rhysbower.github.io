var gulp = require('gulp');

gulp.task('watch', ['browser-sync'], function() {
    gulp.watch('./app/_css/*.scss', ['sass', browserSync.reload]);
    gulp.watch('./app/_js/*.js', ['js', browserSync.reload]);
    gulp.watch('./app/_img/*.*', ['img', browserSync.reload]);
    gulp.watch('app/**/*.{html,markdown,md,xml}', ['jekyll', browserSync.reload]);
});