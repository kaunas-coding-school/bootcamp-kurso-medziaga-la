var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var wiredep = require('wiredep').stream;

// Paleisti serveri
gulp.task('browser-sync', function(){
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
});

// Kompiliuoti CSS
gulp.task('styles', function() {
  return gulp.src('./styles/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist/styles'))
    .pipe(browserSync.stream());
});

gulp.task('wiredep', function() {
  gulp.src('./index.html')
    .pipe(wiredep())
    .pipe(gulp.dest('./'));
});

// Atnaujinti browser, kai pakeiciami SCSS failai
// Pradedam developint
gulp.task('watch', ['wiredep', 'browser-sync', 'styles'], function(){
  gulp.watch('./styles/**/*.scss', ['styles']);
});

// Default komanda
// Perkompiliuoti
gulp.task('default', ['wiredep', 'styles']);
