var gulp        = require('gulp');
var cp          = require('child_process');
var browsersync = require('browser-sync');

gulp.task('jekyll:production', function(done) {
  browsersync.notify('Compiling Jekyll');

  return cp.spawn('bundle', ['exec', 'jekyll', 'build', '--config=_config.yml,_config-production.yml'], { stdio: 'inherit' })
    .on('close', done);
});