var gulp        = require('gulp');
var cp          = require('child_process');
var browsersync = require('browser-sync');

gulp.task('jekyll', function(done) {
  browsersync.notify('Compiling Jekyll');

  return cp.spawn('bundle', ['exec', 'jekyll', 'build'], { stdio: 'inherit' })
    .on('close', done);
});

gulp.task('jekyll-rebuild', ['jekyll'], function() {
  browsersync.reload();
});