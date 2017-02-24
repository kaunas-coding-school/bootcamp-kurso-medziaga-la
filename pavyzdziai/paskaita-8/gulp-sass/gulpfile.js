var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');

// Paleisti serveri
gulp.task('browser-sync', function(){
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
});

gulp.task('styles', function() {
  return gulp.src('./styles/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist/styles'));
});
