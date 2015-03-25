var gulp = require('gulp');

gulp.task('build', ['copy:fonts', 'sass', 'optimize:js', 'optimize:img']);